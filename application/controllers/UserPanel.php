<?php
class UserPanel extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('DatabaseModel','DTB');
	}
	public function dashboard(){
		$jobSeekerData=unserialize($this->session->userdata('jobSeekerSession'));
		$user_id=$jobSeekerData[0]->user_id;
		$data['jobSeekerData']=$this->db->where('user_id',$user_id)->get('user_')->result();
		$skillArr=explode(',',$data['jobSeekerData'][0]->skill_ids);
		$skills=array();
		foreach ($skillArr as $skiId) {
			$skills[]=$this->getSkillDetial($skiId)[0]->skill_name;
		}
		$data['skills']=$skills;
		$applied_jobsArray=array();
		$applied_jobs=$this->db
				->where('job_application.applied_by',$user_id)
				->join('jobs_added','job_application.job_post_id=jobs_added.job_id')
 				->join('job_category','job_category.category_id=jobs_added.job_category')
 				->join('job_type','job_type.type_id=jobs_added.job_type')
 				->join('company_','company_.company_id=jobs_added.added_by_company_id')
 				->order_by('job_application.job_post_id','desc')->limit(5)->get('job_application')->result();
 		foreach($applied_jobs as $apl_jobs){
 			$skillArrAplJbs=explode(',',$apl_jobs->skills);
			$skills_apl=array();
			foreach ($skillArrAplJbs as $skiId_apl) {
				$skills_apl[]=$this->getSkillDetial($skiId_apl)[0]->skill_name;
			}

			$data['skills_apl']=$skills_apl;
			array_push($applied_jobsArray, array("j_details"=>$apl_jobs,"apl_skills"=>$skills_apl));
 		}
 		$data['applied_jobs']=$applied_jobsArray;

 		// print_r($data['applied_jobs']);
 		// die;

 		$saved_jobs=$this->db
				->where('bookmarked_job.applied_by',$user_id)
				->join('jobs_added','bookmarked_job.job_post_id=jobs_added.job_id')
 				->join('job_category','job_category.category_id=jobs_added.job_category')
 				->join('job_type','job_type.type_id=jobs_added.job_type')
 				->join('company_','company_.company_id=jobs_added.added_by_company_id')
 				->order_by('bookmarked_job.job_post_id','desc')->limit(5)->get('bookmarked_job')->result();

 				// print_r($data['applied_jobs']);
 				// die;
 		$skillArrSvd_Ar=array();
		foreach($saved_jobs as $svd_jobs){
			// print_r($svd_jobs);

 			$skillArrSvd=explode(',',$svd_jobs->skills);
			$skills_Svd=array();
			foreach ($skillArrSvd as $skiId_svd) {
				$skills_Svd[]=$this->getSkillDetial($skiId_svd)[0]->skill_name;
			}

			$data['skills_Svd']=$skills_Svd;
			array_push($skillArrSvd_Ar, array("svd_details"=>$svd_jobs,"svd_skills"=>$skills_Svd));
 		}
 		// die;
 		$data['saved_jobs']=$skillArrSvd_Ar;
		$data['latest_jobs']=$this->db
 				->join('job_category','job_category.category_id=jobs_added.job_category')
 				->join('job_type','job_type.type_id=jobs_added.job_type')
 				->join('company_','company_.company_id=jobs_added.added_by_company_id')
 				->order_by('jobs_added.job_id','desc')->limit(5)->get('jobs_added')->result();
		// print_r($data['latest_jobs']);
 		$latestResume=$this->db->where('user_id',$user_id)->order_by('resume_id','desc')->get('resume_upload')->row();
 		$data['resumePath']=$latestResume->resume_path;
 		// $data['resumePath']=>this
 		$this->load->view('userPanel/layout/header',$data);
 		$this->load->view('userPanel/pages/dashboard');
 		$this->load->view('userPanel/layout/footer');
 	}
 	public function changePassword(){
 		$this->load->view('userPanel/layout/header');
 		$this->load->view('userPanel/pages/changePassword');
 		$this->load->view('userPanel/layout/footer');

 	}
 	public function updateBio(){
 		$data['jobSeekerData']=unserialize($this->session->userdata('jobSeekerSession'));
		$user_id=$data['jobSeekerData'][0]->user_id;
 		print_r($_POST);
 		$condition=array("user_id"=>$user_id);
 		$toUpdate=array("basic_introduction"=>$this->input->post('emp_bio'));
 		if($this->DTB->update_Data('user_',$toUpdate,$condition)){
 			die(json_encode(array("code",1)));
 		}else{
			die(json_encode(array("code",0)));
 		}
 	}
	 
	public function jobDetails($job_id){
		$jobDetails=$this->db
						->where('jobs_added.job_id',$job_id)
						->join('job_category','job_category.category_id=jobs_added.job_category')
 				->join('job_type','job_type.type_id=jobs_added.job_type')
 				->join('company_','company_.company_id=jobs_added.added_by_company_id')
 				->get('jobs_added')->row();

 		$jbArray=array();
 		$skillArr=explode(',',$jobDetails->skills);
 		// print_r($skillArr);
 		// echo ' || ';
 		
		foreach ($skillArr as $skiId) {
			// echo $skiId;
			$skills[]=$this->getSkillDetial($skiId)[0]->skill_name;

		}
		// print_r($skills);
		array_push($jbArray,array("JD"=>$jobDetails,'skills'=>$skills));
		
 	// die;
		$data['jobDetails']=$jbArray;
 	

						// print_r($data['jobDetails']);
		$this->load->view('userPanel/layout/header');
		$this->load->view('userPanel/pages/jobDetails',$data);
		$this->load->view('userPanel/layout/footer');
	}


	public function membershipPlans(){
		$this->load->view('userPanel/layout/header');
		$this->load->view('userPanel/pages/memberships');
		$this->load->view('userPanel/layout/footer');
	}


	public function myProfile(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 

		// $user_id=$jobSeekerData[0]->user_id;
		$user_id=$userDetail[0]->user_id;
		$data['jobSeekerDetail']=$this->db->where('user_id',$userDetail[0]->user_id)->get('user_')->row();
		$data['userDetails']=$userDetail;
		$data['workSummary']=$this->db->where('user_id',$userDetail[0]->user_id)->order_by('summ_id','desc')->get('user_work_summary')->result();
		$data['employment']=$this->db->where('user_id',$userDetail[0]->user_id)->order_by('join_year','asc')->get('user_employment')->result();
		$data['userEducation']=$this->db->where('user_id',$userDetail[0]->user_id)->order_by('passing_year','desc')->get('user_education')->result();
		$sk=$this->db->select('skill_ids')->where('user_id',$userDetail[0]->user_id)->get('user_')->row();
		$data['allskills']=$this->db->get('skills_')->result();
		$data['industry_categories']=$this->db->get('job_category')->result();
		$skillArr=explode(',',$sk->skill_ids);
		$skills=array();
		foreach ($skillArr as $skiId) {
			$skills[]=$this->getSkillDetial($skiId)[0]->skill_name;
		}
		$data['skill_s']=$skills;
		$data['myResume']=$this->db->join('user_','user_.resume_id=resume_upload.resume_id')->where('user_.user_id',$userDetail[0]->user_id)->get('resume_upload')->row();
		$latestResume=$this->db->where('user_id',$userDetail[0]->user_id)->order_by('resume_id','desc')->get('resume_upload')->row();
 		$data['resumePath']=$latestResume->resume_path;
		// $this->db->get()->result();
		$this->load->view('userPanel/layout/header');
		$this->load->view('userPanel/pages/profile',$data);
		$this->load->view('userPanel/layout/footer');
	}

	public function getSkillDetial($id){
		return $this->db->where('skill_id',$id)->get('skills_')->result();
	}

	public function addWorkSummary(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
		$dataArr=array(
						"user_id"=>$userDetail[0]->user_id,	
						"work_title"=>$this->input->post('work_title'),
						"profile_summary"=>$this->input->post('profile_summary'),
						"exp_year"=>$this->input->post('exp_year'),
						"exp_month"=>$this->input->post('exp_month'),
						"current_salary"=>$this->input->post('current_salary')
						);
		if(count($this->db->where('user_id',$userDetail[0]->user_id)->get('user_work_summary')->result())==0){
			if($this->db->insert('user_work_summary',$dataArr)){
				die(json_encode(array("code"=>1)));
			}else{
				
				die(json_encode(array("code"=>0)));
			}
		}else{
			if($this->db->where('user_id',$userDetail[0]->user_id)->update('user_work_summary',$dataArr)){
				die(json_encode(array("code"=>1)));
			}else{
				
				die(json_encode(array("code"=>0)));
			}
			
		}
	}
	
	public function addEmployment(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
		$dataArr=array(
						"user_id"=>$userDetail[0]->user_id,	
						"job_title"=>$this->input->post('job_title'),
						"company_name"=>$this->input->post('comp_name'),
						"join_year"=>$this->input->post('join_year'),
						"to_year"=>$this->input->post('to_year'),
						"category_id"=>$this->input->post('industry'),
						"company_address"=>$this->input->post('comp_add'),
						);
					
		if(count($this->db->where($dataArr)->get('user_employment')->result())==0){
			if($this->db->insert('user_employment',$dataArr)){
				die(json_encode(array("code"=>1)));
			}else{
				die(json_encode(array("code"=>0)));
			}
		}else{
			die(json_encode(array("code"=>0)));
		}
	}


	public function GetEmployment(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
		$dataArr=array(
						"user_id"=>$userDetail[0]->user_id,	
						"emp_id"=>$this->input->post('emp_id'),

						);
		if($sara = $this->db->where($dataArr)->get('user_employment')->result()){
			$categories = $this->db->get('job_category')->result();
			die(json_encode(array("code"=>1,"data"=>$sara,"categories"=>$categories)));
		
		}else{
			die(json_encode(array("code"=>0)));
		}
	}

	public function updateEmploymentDetails(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
		$dataArr=array(
						// "user_id"=>$userDetail[0]->user_id,	
						// "emp_id"=>$this->input->post('emp_id'),
						"job_title"=>$this->input->post('job_title'),
						"company_name"=>$this->input->post('comp_name'),
						"join_year"=>$this->input->post('join_year'),
						"to_year"=>$this->input->post('to_year'),
						"category_id"=>$this->input->post('industry'),
						"company_address"=>$this->input->post('comp_add'),
						);
		$condition=array(
			"user_id"=>$userDetail[0]->user_id,	
			"emp_id"=>$this->input->post('emp_id'),

			);
		
		if(count($this->db->where($condition)->get('user_employment')->result()) > 0){
			if($this->db->where($condition)->update('user_employment',$dataArr)){
				die(json_encode(array("code"=>1)));
			}else{
				echo"as";
				die(json_encode(array("code"=>0)));
			}
		}else{
			echo"No";
			die(json_encode(array("code"=>0)));
		}
	}

	public function GetEducation()	{
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
		$dataArr=array(
					"user_id"=>$userDetail[0]->user_id,	
					"id"=>$this->input->post('emp_id'),
				);
		if($sara = $this->db->where($dataArr)->get('user_education')->result()){
		
			die(json_encode(array("code"=>1,"data"=>$sara)));
		
		}else{
			die(json_encode(array("code"=>0)));
		}
	}

	public function addUpdateEducation(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
		$dataArr=array(
			"user_id"=>$userDetail[0]->user_id,	
			"degree"=>$this->input->post('deg_name'),
			"course_"=>$this->input->post('course_name'),
			"institute_"=>$this->input->post('inst_name'),
			"passing_year"=>$this->input->post('passing_year'),
			"course_type"=>$this->input->post('course_type'),
			);
	
		if($this->input->post('edu_id')==0){
			// add Education 
			
			if(count($this->db->where($dataArr)->get('user_education')->result())==0){
				if($this->db->insert('user_education',$dataArr)){
					die(json_encode(array("code"=>1)));
				}else{
					die(json_encode(array("code"=>0)));
				}
			}else{
				die(json_encode(array("code"=>0)));
			}

		}else{
			// update Education
		
				$condition=array(
							"user_id"=>$userDetail[0]->user_id,	
							"id"=>$this->input->post('edu_id'),
						);
				if(count($this->db->where($condition)->get('user_education')->result())>0){
					if($this->db->where($condition)->update('user_education',$dataArr)){
						die(json_encode(array("code"=>1)));
					}else{
						
						die(json_encode(array("code"=>0)));
					}
				}else{
				
					die(json_encode(array("code"=>0)));
				}
		}
	}

	public function deleteEducation(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
	
		$condition=array(
			"user_id"=>$userDetail[0]->user_id,	
			"id"=>$this->input->post('emp_id'),
		);
		if(count($this->db->where($condition)->get('user_education')->result())>0){
			if($this->db->where($condition)->delete('user_education')){
				die(json_encode(array("code"=>1)));
			}else{
				
				die(json_encode(array("code"=>0)));
			}
		}else{
		
			die(json_encode(array("code"=>0)));
		}
	}

	public function deleteEmployment(){
		$userDetail=$this->session->userdata('jobSeekerSession');
		$userDetail=unserialize($userDetail); 
	
		$condition=array(
			"user_id"=>$userDetail[0]->user_id,	
			"emp_id"=>$this->input->post('emp_id'),
		);
	
		if(count($this->db->where($condition)->get('user_employment')->result())>0){
			if($this->db->where($condition)->delete('user_employment')){
				die(json_encode(array("code"=>1)));
			}else{
				
				die(json_encode(array("code"=>0)));
			}
		}else{
		
			die(json_encode(array("code"=>0)));
		}
	}
	public function uploadResume(){
		$jobSeekerData=unserialize($this->session->userdata('jobSeekerSession'));
		$user_id=$jobSeekerData[0]->user_id;
		$resumeFileDeatils=pathinfo($_FILES['resume']['name']);
        $config['upload_path'] = 'assets/user_resume/';
        $config['allowed_types'] = 'xls|xlsx|pdf|doc|docx';
        $config['file_name'] = 'Resume-'.date('d-m-y-h-i-s').'-Image.'.$resumeFileDeatils['extension'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('resume')){
            $uploadData = $this->upload->data();
            $userResume =$uploadData['file_name'];
            // $condition=array()
            if(count($this->db->where('user_id',$user_id)->get('resume_upload')->result())>0){
            	// echo ' Update ';
            	if($this->db->where('user_id',$user_id)->update('resume_upload',array("resume_path"=>$userResume))){
            		die(json_encode(array("code"=>1,"msg"=>"Resume Uploaded & Updated")));
            	}else{
            		die(json_encode(array("code"=>0,"msg"=>"Resume Uploaded & Failed To Update")));
            	}
            	//Update
            }else{
            	//Insert
            	// echo ' Insert ';
            	if($this->db->insert('resume_upload',array("user_id"=>$user_id,"resume_path"=>$userResume))){
            		die(json_encode(array("code"=>1,"msg"=>"Resume Uploaded & Added")));
            	}else{
            		die(json_encode(array("code"=>0,"msg"=>"Resume Uploaded & Faild To Add.")));
            	}
            }
        }
        else{
        	print_r($this->upload->display_errors());
            $userResume = '';
        }


		
	}
	public function change_Password(){
		$userDetail=unserialize($this->session->userdata('jobSeekerSession'));
		$user_id=$userDetail[0]->user_id;
		$pwdEncyt=$this->encryption->encrypt(trim($_POST['new_pwd']));
		if($this->db->where('user_id',$user_id)->update('user_',array('password'=>$pwdEncyt))){
			die(json_encode(array("code"=>1,"msg"=>"Password Updated")));
		}else{
			die(json_encode(array("code"=>0,"msg"=>"Failed To Update Password")));
		}
	}
}	