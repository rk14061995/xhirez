<?php
	/**
	 * 
	 */
	class CompLogin extends CI_Controller
	{
		
		public function index(){
		    // $this->load->view('website/new_/header');
			$this->load->view('company/pages/login');
			// $this->load->view('website/new_/footer');
			// $this->load->view('company/layout/header');
			// $this->load->view('company/pages/index');
			// $this->load->view('company/layout/footer');
		}
		public function register()
		{
		    // $this->load->view('website/new_/header');
			$this->load->view('company/pages/register');
			// $this->load->view('website/new_/footer');
		}
		public function forgotPassword(){
			$this->load->view('company/pages/forgot-password');
		}
		public function registerCompany(){
		    $regData=array(
		    					"agency_name"=>$this->input->post('comp_name'),
		    					"agency_email"=>$this->input->post('comp_email'),
		    					"agency_phone"=>$this->input->post('comp_phone'),
		    					"agency_pwd"=>$this->input->post('comp_pass'),
		    				);
		    die(json_encode(array("code"=>$this->addNewAgency($regData))));
		    
		}
		public function addNewAgency($data){

			if(count($this->db->where('agency_email',$data['agency_email'])->get('agency_')->result())==0){
				if($this->db->insert('agency_',$data)){
					return 1;
				}else{
					return 0;
				}
			}else{
				return 2;
			}
		}
		public function loginValidate(){
		
			$dat=array(
						"agency_email"=>$this->input->post('comp_email'),
							"agency_pwd"=>$this->input->post('comp_pass'),
						);
			if(count($compData=$this->db->where($dat)->get('agency_')->result())>0){
				$compData=serialize($compData);
				$this->session->set_userdata('logged_company',$compData);
				redirect('Agency/dashboard');
			}else{
				$this->session->set_flashdata('msg','Invalid Email/Password');
				redirect('Agency-Login');
			}
		}
		
	}
?>