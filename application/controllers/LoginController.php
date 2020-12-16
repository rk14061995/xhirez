<?php
 /**
  * 
  */
 class LoginController extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->library('encryption');
 		$this->load->model('DatabaseModel','DTB');

 	}
 	public  function jobseekerloginPage(){
 		$this->load->view('userPanel/pages/userLogin');
 	}
 	public function jobseekerLogin(){
 		// print_r($_POST);
 		$condition=array("email"=>$this->input->post('user_email'));
		$res=$this->DTB->getData('user_',$condition);
		$pwd=trim($this->input->post('pass_code'));
		if(count($res)>0){
			$password=$res[0]->password;
			$decryptPwd=$this->encryption->decrypt($password);
			if($decryptPwd==$pwd){
				echo 'Password Matched.';
				$this->session->set_userdata('jobSeekerSession',serialize($res));
				redirect('Employee-Dashboard');
			}else{
				echo 'Password Not Match.';
				$this->session->set_flashdata('err','Invalid Password');
				redirect('Employee-Login');
			}
		}else{
			echo 'Email Id Not Found.';
			$this->session->set_flashdata('err','Invalid Email Id');
			redirect('Employee-Login');
		}
 	}
 	public  function jobseekerlogout(){
 		if($this->session->userdata('jobSeekerSession')){
 			$this->session->unset_userdata('jobSeekerSession');
 			// $this->session->sess_destroy();
 		}
 		redirect('Employee-Login');
 	}
 	public function jobseekerRegistrationPage(){
 		$this->load->view('userPanel/pages/userRegister');
 	}
 	public function companyLoginPage(){
		$this->load->view('companyPanel/pages/companyLogin');
	}
	public  function companylogout(){
 		if($this->session->userdata('companySession')){
 			$this->session->unset_userdata('companySession');
 			// $this->session->sess_destroy();
 		}
 		redirect('Employee-Login');
 	}
	public function companyRegistrationPage(){
		$this->load->view('companyPanel/pages/companyRegister');
	}
 	public function jobseekerRegistration(){
 		$pwdEncyt=$this->encryption->encrypt(trim($_POST['user_pass_code']));
 		$jobSeekerData=array(
 								"fullname"=>$this->input->post('full_name'),
 								"email"=>$this->input->post('email_'),
 								"phone_"=>$this->input->post('phone_no'),
 								"password"=>$pwdEncyt,
 								
 							);
 		// print_r($jobSeekerData);
 		$response=$this->DTB->insertData('user_', $jobSeekerData);
 		switch ($response) {
 			case 0:
 				# code...	
 				$this->session->set_flashdata('msg','Failed To Register');
 				break;
 			case 1:
 				# code...
 				$this->session->set_flashdata('msg','Registered Successfully');
 				break;
 			case 2:
 				# code...
 				$this->session->set_flashdata('msg','Email Id Already Exists');
 				break;
 			
 			default:
 				# code...
 				$this->session->set_flashdata('msg','Server Error');
 				break;
 		}
 		redirect('Employee-Login');
 	}
 	
 	public function companyRegistration(){
 		$pwdEncyt=$this->encryption->encrypt(trim($_POST['Pass_code']));
 		$companyData=array(
 								"company_name"=>$this->input->post('comp_name'),
 								"company_email"=>$this->input->post('comp_email'),
 								"comp_phone"=>$this->input->post('phone_no'),
 								"company_pwd"=>$pwdEncyt,
 								
 							);
 		// print_r($jobSeekerData);
 		$response=$this->DTB->insertData('company_', $companyData);
 		switch ($response) {
 			case 0:
 				# code...	
 				$this->session->set_flashdata('msg','Failed To Register');
 				break;
 			case 1:
 				# code...
 				$this->session->set_flashdata('msg','Registered Successfully');
 				break;
 			case 2:
 				# code...
 				$this->session->set_flashdata('msg','Email Id Already Exists');
 				break;
 			
 			default:
 				# code...
 				$this->session->set_flashdata('msg','Server Error');
 				break;
 		}
 		redirect('Employer-Login');
 	}
 	public function companyLogin(){
 		// print_r($_POST);
 		$condition=array("company_email"=>$this->input->post('comp_email'));
		$res=$this->DTB->getData('company_',$condition);
		// print_r($res);
		// die;
		$pwd=trim($this->input->post('pass_code'));
		if(count($res)>0){
			$password=$res[0]->company_pwd;
			$decryptPwd=$this->encryption->decrypt($password);
			if($decryptPwd==$pwd){
				echo 'Password Matched.'; 
				$this->session->set_userdata('companySession',serialize($res));
				redirect('Employee-Dashboard');
			}else{
				echo 'Password Not Match.';
				$this->session->set_flashdata('err','Invalid Password');
				// redirect('Employer-Login');
			}
		}else{
			echo 'Email Id Not Found.';
			$this->session->set_flashdata('err','Invalid Email Id');
			// redirect('Employer-Login');
		}
 	}
 }
?>