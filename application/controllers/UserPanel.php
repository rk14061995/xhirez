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

	public function myprofile(){
		$this->load->view('userPanel/layout/header');
		$this->load->view('userPanel/pages/profile');
		$this->load->view('userPanel/layout/footer');
	}
}	