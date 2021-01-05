<?php

class CompanyAdmin_model extends CI_Model
{
    public function getUsers(){
        
        
       $this->db->select('user_.user_id AS uid,user_.*,resume_upload.*');
       
        $this->db->join('resume_upload','user_.resume_id = resume_upload.resume_id');
        $JObs =$this->db->get('user_')->result();
		$jobArray=array();
		foreach($JObs as $job_details){
            $skillArr=explode(',',$job_details->skill_ids);
            $skills=array();
            foreach ($skillArr as $skiId) {
                $skills[]=$this->getSkillDetial($skiId)->skill_name;
            }
            array_push($jobArray, array("details"=>$job_details,"skills"=>$skills));
        }
        return $jobArray;
    }
    public function getSkillDetial($id){
        return $this->db->where('skill_id',$id)->get('skills_')->row();
    }

    public function insertJobs($dat){
        return $this->db->insert('jobs_added',$dat);
    }

    public function fetchJobs($comp_id){
        $this->db->select('jobs_added.*, COUNT(job_application.job_post_id) as applied');
        $this->db->where('jobs_added.added_by_company_id',$comp_id);
        $this->db->join('job_application','job_application.job_post_id = jobs_added.job_id','left');
        $this->db->group_by('jobs_added.job_id'); 
      return  $this->db->get('jobs_added')->result();
    }

    public function jobStatusChange($u_id){
        $this->db->where('job_id',$u_id);
        $data = $this->db->get('jobs_added')->result();
       
        if($data[0]->job_apps_status == 'active'){
           
            $ara=array(
                'job_apps_status'=>'deactive'
            );
            $this->db->where('job_id',$u_id);
            return   $this->db->update('jobs_added',$ara);
        }else{
          
            $ara=array(
                'job_apps_status'=>'active'
            );
            $this->db->where('job_id',$u_id);
          return  $this->db->update('jobs_added',$ara);
        }
    }

    public function jobDeleted($u_id){
        $this->db->where('job_id',$u_id);
      return $this->db->delete('jobs_added');
    }

    public function getCategories(){
        $this->db->select('job_category.category_name, COUNT(jobs_added.job_category) as total');
        $this->db->from('jobs_added');
        $this->db->join('job_category',' job_category.category_id=jobs_added.job_category');
        $this->db->group_by('jobs_added.job_category'); 
        $this->db->order_by('total', 'desc'); 
       
        return $this->db->get()->result();
          
    }

    public function updatePost($dat,$ara){
        $this->db->where($ara);
        return $this->db->update('jobs_added',$dat);
    }

    public function appliedForJObs($job_id){
        
        $this->db->select('user_.*');
		$this->db->from('job_application');
		$this->db->where('job_post_id',$job_id);
		$this->db->join('user_', 'user_.user_id = job_application.applied_by');

        $JObs  = $this->db->get()->result();
         $jobArray=array();
         foreach($JObs as $job_details){
             $skillArr=explode(',',$job_details->skill_ids);
             $skills=array();
             foreach ($skillArr as $skiId) {
                 $skills[]=$this->getSkillDetial($skiId)->skill_name;
             }
             array_push($jobArray, array("details"=>$job_details,"skills"=>$skills));
         }
         return $jobArray;
     }

     public function jobDataById($job_id){
         $this->db->where('job_id',$job_id);
         return $this->db->get('jobs_added')->result();
     }

     public function getUserById($user_id){
        
        $this->db->where('user_id',$user_id);
        $JObs  = $this->db->get('user_')->result();
         $jobArray=array();
         foreach($JObs as $job_details){
             $skillArr=explode(',',$job_details->skill_ids);
             $skills=array();
             foreach ($skillArr as $skiId) {
                 $skills[]=$this->getSkillDetial($skiId)->skill_name;
             }
             array_push($jobArray, array("details"=>$job_details,"skills"=>$skills));
         }
         return $jobArray;
     }
}

?>