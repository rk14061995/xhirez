<?php
class CompanyAdmin extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('DatabaseModel','DTB');
	$this->load->model('CompanyAdmin_model','CAM');
}


	public function dashboard(){
 		// print_r($this->session->userdata('login'));
 		$data['companySession']=unserialize($this->session->userdata('companySession'));
 		$this->load->view('companyPanel/layout/header',$data);
 		$this->load->view('companyPanel/pages/dashboard');
 		$this->load->view('companyPanel/layout/footer');
 	}

 	public function PostNewJobs(){
		$data['industry']=$this->db->get('job_category')->result();
		$data['skills']=$this->db->get('skills_')->result();
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/postNewJobs',$data);
 		$this->load->view('companyPanel/layout/footer');
 	}

 	public function PostWalkInJobs(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/walkinJobs');
 		$this->load->view('companyPanel/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}

 	public function ManageJobs(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/manageJobs');
 		$this->load->view('companyPanel/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}

 	public function EmailTemplate(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/emailTemplate');
 		$this->load->view('companyPanel/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}

	public function ManageEmails(){
        // print_r($this->session->userdata('login'));
        $this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/manageEmails');
        $this->load->view('companyPanel/layout/footer');
        // $this->load->view('admin/Pages/index');
        // $this->load->view('Layout/footer');
	}
	public function CandidateSearch(){
		
		$data['usersData'] = $this->CAM->getUsers();
		print_r($data);
		die();
		
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/candidateSearch',$data);
        $this->load->view('companyPanel/layout/footer');
	}
	public function addPost(){
		print_r($_POST);
		die();
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/candidateSearch');
        $this->load->view('companyPanel/layout/footer');
	}


}