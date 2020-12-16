<?php
class UserPanel extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('DatabaseModel','DTB');
	}
	public function dashboard(){
		$data['jobSeekerData']=unserialize($this->session->userdata('jobSeekerSession'));
		$data['latest_jobs']=$this->db
 				->join('job_category','job_category.category_id=jobs_added.job_category')
 				->join('job_type','job_type.type_id=jobs_added.job_type')
 				->join('company_','company_.company_id=jobs_added.added_by_company_id')
 				->order_by('jobs_added.job_id','desc')->limit(5)->get('jobs_added')->result();
		// print_r($data['latest_jobs']);

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
 		print_r($_POST);
 		$toUpdate=array("basic_introduction"=>$this->input->post('emp_bio'));
 		// if($this->DTB->updateReacord($table_name,$toUpdate,$condition)){

 		// }
 	}
	 
	public function jobDetails(){
		$this->load->view('userPanel/layout/header');
		$this->load->view('userPanel/pages/jobDetails');
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
			$skills[]=$this->getSkillDetial($skiId);
		}
		$data['skills']=$skills;
		$data['myResume']=$this->db->join('user_','user_.resume_id=resume_upload.resume_id')->where('user_.user_id',$userDetail[0]->user_id)->get('resume_upload')->row();
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
}	