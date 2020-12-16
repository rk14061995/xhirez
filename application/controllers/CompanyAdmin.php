<?php
class CompanyAdmin extends CI_Controller{
function __construct(){
	parent::__construct();

}


	public function dashboard(){
 		// print_r($this->session->userdata('login'));
 		$data['companySession']=unserialize($this->session->userdata('companySession'));
 		$this->load->view('companyPanel/layout/header',$data);
 		$this->load->view('companyPanel/pages/dashboard');
 		$this->load->view('companyPanel/layout/footer');
 	}

 	public function PostNewJobs(){
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/postNewJobs');
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
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/candidateSearch');
        $this->load->view('companyPanel/layout/footer');
	}

}