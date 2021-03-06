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
		 $userSession=unserialize($this->session->userdata('companySession'));
		 //print_r($userSession);
		  $comp_id =  $userSession[0]->company_id;
		  $data['jobs'] = $this->CAM->fetchJobs($comp_id);
 
 		$this->load->view('companyPanel/layout/header',$data);
 		$this->load->view('companyPanel/pages/dashboard');
 		$this->load->view('companyPanel/layout/footer');
 	}

 	public function PostNewJobs(){
		$data['companySession']=unserialize($this->session->userdata('companySession'));
		$data['currency']=$this->db->get('currency_type')->result();
		$data['industry']=$this->db->get('job_category')->result();
		$data['jobType']=$this->db->get('job_type')->result();
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
		$userSession=unserialize($this->session->userdata('companySession'));
		//print_r($userSession);
		 $comp_id =  $userSession[0]->company_id;
		 $data['jobs'] = $this->CAM->fetchJobs($comp_id);

		// print_r($data['jobs']);
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/manageJobs',$data);
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
		$data['categories'] = $this->CAM->getCategories();
		// print_r($data['categories']);
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/candidateSearch',$data);
        $this->load->view('companyPanel/layout/footer');
	}

	public function changeJobStatus(){
		$u_id = $this->input->post('job_id');
		$result = $this->CAM->jobStatusChange($u_id);

		if($result){
			die(json_encode(array('status'=>1,'msg'=>"Status Changed Successfully.")));
		}else{
			die(json_encode(array('status'=>0,'msg'=>"Error Found.")));
		}
	} 

	public function deleteJob(){
		$u_id = $this->input->post('job_id');
		$result = $this->CAM->jobDeleted($u_id);

		if($result){
			die(json_encode(array('status'=>1,'msg'=>"Deleted Successfully.")));
		}else{
			die(json_encode(array('status'=>0,'msg'=>"Error Found.")));
		}
	} 
	
	public function addPost(){
		//  print_r($_POST);
		  $this->input->post('company_id');
		// die();
		$skills = implode(',',$this->input->post('skills'));
			$dat =array(
				"added_by_company_id"=>$this->input->post('company_id'),
				"job_title"=>$this->input->post('name'),
				"job_type"=>$this->input->post('jobType'),
				"skills"=>$skills,
				"job_category"=>$this->input->post('industry'),
				"job_desc"=>$this->input->post('editor12'),
				"min_work_exp"=>$this->input->post('minExp'),
				"max_work_exp"=>$this->input->post('maxExp'),
				"currency_type"=>$this->input->post('currency_type'),
				"min_annual_sal"=>$this->input->post('minSalary'),
				"max_annaul_sal"=>$this->input->post('maxSalary'),
				"job_location_"=>$this->input->post('company_address'),
				"ug_qualification"=>$this->input->post('ugqualification'),
				"pg_qualification"=>$this->input->post('pgqualification'),
				"phd_qualification"=>$this->input->post('doctorate_phd'),
				
			);
			$pos = $this->CAM->insertJobs($dat);
			if($pos){
				die(json_encode(array('status'=>1,'msg'=>"Added Successfully.")));
			}else{
				die(json_encode(array('status'=>0,'msg'=>"Error Found.")));
			}
		
		// $this->load->view('companyPanel/layout/header');
        // $this->load->view('companyPanel/pages/candidateSearch');
        // $this->load->view('companyPanel/layout/footer');
	}

	public function updateJobPost(){
		//  print_r($_POST);
		$this->input->post('job_id');
		$ara = array(
			'job_id'=>$this->input->post('job_id'),
			'added_by_company_id'=>$this->input->post('company_id')
		);
		// die();
		$skills = implode(',',$this->input->post('skills'));
			$dat =array(
			
				"job_title"=>$this->input->post('name'),
				"job_type"=>$this->input->post('jobType'),
				"skills"=>$skills,
				"job_category"=>$this->input->post('industry'),
				"job_desc"=>$this->input->post('editor12'),
				"min_work_exp"=>$this->input->post('minExp'),
				"max_work_exp"=>$this->input->post('maxExp'),
				"currency_type"=>$this->input->post('currency_type'),
				"min_annual_sal"=>$this->input->post('minSalary'),
				"max_annaul_sal"=>$this->input->post('maxSalary'),
				"job_location_"=>$this->input->post('company_address'),
				"ug_qualification"=>$this->input->post('ugqualification'),
				"pg_qualification"=>$this->input->post('pgqualification'),
				"phd_qualification"=>$this->input->post('doctorate_phd'),
				
			);
			
			$pos = $this->CAM->updatePost($dat,$ara);
			if($pos){
				die(json_encode(array('status'=>1,'msg'=>"Added Successfully.")));
			}else{
				die(json_encode(array('status'=>0,'msg'=>"Error Found.")));
			}
	}

	public function UpdatePostJob($id){
		$this->db->where('job_id',$id);
		$data['jobdata'] = $this->db->get('jobs_added')->result();
		// print_r($data['jobdata']);
		$data['currency']=$this->db->get('currency_type')->result();
		$data['industry']=$this->db->get('job_category')->result();
		$data['jobType']=$this->db->get('job_type')->result();
		$data['skills']=$this->db->get('skills_')->result();
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/update_post_job',$data);
        $this->load->view('companyPanel/layout/footer');
	}

	public function fetchAppliedCandidates($job_id){
		$data['usersData'] = $this->CAM->appliedForJObs($job_id);
		$data['jobData'] = $this->CAM->jobDataById($job_id);

		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/applied_candidates',$data);
        $this->load->view('companyPanel/layout/footer');
	}

	public function fetchUserDataProfile($user_id){
		$data['userDetails'] = $this->CAM->getUserById($user_id);
		$data['workSummary']=$this->db->where('user_id',$user_id)->order_by('summ_id','desc')->get('user_work_summary')->result();
		$data['employment']=$this->db->where('user_id',$user_id)->order_by('join_year','asc')->get('user_employment')->result();
		$data['userEducation']=$this->db->where('user_id',$user_id)->order_by('passing_year','desc')->get('user_education')->result();
		$latestResume=$this->db->where('user_id',$user_id)->order_by('resume_id','desc')->get('resume_upload')->row();
 		$data['resumePath']=$latestResume->resume_path;
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/user_profile',$data);
        $this->load->view('companyPanel/layout/footer');
	}

	public function companyDetails(){
		$result = unserialize($this->session->userdata('companySession'));
		$comp_id= $result[0]->company_id; 
		$this->db->where('company_id',$comp_id);

		$data['companyData']= $this->db->get('company_')->result();
		$this->load->view('companyPanel/layout/header');
        $this->load->view('companyPanel/pages/company_details',$data);
        $this->load->view('companyPanel/layout/footer');
	}

	public function updateCompanyDetails(){
		$comp_id = $this->input->post('comp_id');

		$this->db->where('company_id',$comp_id);
		$result = $this->db->get('company_')->result();
		if(!empty($_FILES['Incorpfile']['name']))
	    	{   

	    		$iconfigFileDeatils=pathinfo($_FILES['Incorpfile']['name']);
                $configg['upload_path'] = 'assets/company_assets/company_Incorporation/';
                $configg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configg['file_name'] = 'IncorProfile-'.date('d-m-y-h-i-s').'-Image.'.$iconfigFileDeatils['extension'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configg);
                $this->upload->initialize($configg);
                
                    if($this->upload->do_upload('Incorpfile'))
                    {
                        $uploadData = $this->upload->data();
                        $companyIncorporation =$uploadData['file_name'];
                    }
                    else
                    {
                        $companyIncorporation = '';
                    }
            }else{
                	  $companyIncorporation = $result[0]->comp_incorporation;
                }

            if(!empty($_FILES['aoa']['name']))
	    	{   
	    		$aoaDetails=pathinfo($_FILES['aoa']['name']);
                $configgg['upload_path'] = 'assets/company_assets/company_AOA/';
                $configgg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configgg['file_name'] ='AOA-'.date('d-m-y-h-i-s').'-Image.'.$aoaDetails['extension'] ;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configgg);
                $this->upload->initialize($configgg);
                
                    if($this->upload->do_upload('aoa'))
                    {
                        $uploadData = $this->upload->data();
                        $company_AOA =$uploadData['file_name'];
                    }
                    else
                    {
                    	$error = array('error_for_aoa' => $this->upload->display_errors());
                    	print_r($error);
                        $company_AOA = '';
                    }
			}
			else{
                	  $company_AOA = $result[0]->comp_aoa;
                }
           if(!empty($_FILES['moa']['name']))
	    	{   
	    		$moaDetails=pathinfo($_FILES['moa']['name']);
                $configggg['upload_path'] = 'assets/company_assets/company_MOA/';
                $configggg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configggg['file_name'] = 'MOA-'.date('d-m-y-h-i-s').'-Image.'.$moaDetails['extension'] ;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configggg);
                $this->upload->initialize($configggg);
                
                    if($this->upload->do_upload('moa'))
                    {
                        $uploadData = $this->upload->data();
                        $company_MOA =$uploadData['file_name'];
                    }
                    else
                    {
                    	$error = array('error_for_moa' => $this->upload->display_errors());
                    	print_r($error);
                        $company_MOA = '';
                    }
            }
                else{
                	  $company_MOA = $result[0]->comp_moa;
                }
              if(!empty($_FILES['gst']['name']))
	    	{   
	    		$gstDetails=pathinfo($_FILES['gst']['name']);
                $configgggg['upload_path'] = 'assets/company_assets/company_GST/';
                $configgggg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configgggg['file_name'] = 'GST-'.date('d-m-y-h-i-s').'-Image.'.$gstDetails['extension'] ;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configgggg);
                $this->upload->initialize($configgggg);
                
                    if($this->upload->do_upload('gst'))
                    {
                        $uploadData = $this->upload->data();
                        $company_GST =$uploadData['file_name'];
                    }
                    else
                    {
                    	$error = array('error_for_gst' => $this->upload->display_errors());
                    	print_r($error);
                        $company_GST = '';
                    }
            }
                else{
                	  $company_GST = $result[0]->comp_gst;
                }
		 if(!empty($_FILES['file']['name']))
	    	{   
	    		$logoDetails=pathinfo($_FILES['file']['name']);
                $config['upload_path'] = 'assets/companyImages/logo/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $this->input->post('company').'-'.date('d-m-y-h-i-s').'-Logo.'.$logoDetails['extension'] ;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                    if($this->upload->do_upload('file'))
                    {
                        $uploadData = $this->upload->data();
                        $picture =$uploadData['file_name'];
                    }
                    else
                    {
                    	$error = array('error_for_logo' => $this->upload->display_errors());
                    	print_r($error);
                        $picture = '';
                    }
            }
                else{
                	  $picture = $result[0]->company_logo;
                }
                
		         	$company=$this->input->post('company');
		         	// $pwdEncyt=$this->encryption->encrypt(trim($this->input->post('pass')));
					$data=array('company_name'=>$company,
					'comp_desc'=>$this->input->post('desc'),
					'comp_address'=>$this->input->post('address'),
					'website_url'=>$this->input->post('url'),
					'comp_phone'=>$this->input->post('comp_phone'),
					'comp_address'=>$this->input->post('comp_address'),
					'country'=>$this->input->post('country'),
					'state'=>$this->input->post('state'),
					'city'=>$this->input->post('city'),
					'zipcode'=>$this->input->post('zipcode'),
				
					'company_reg_no'=>$this->input->post('regist'),
				
					'comp_incorporation'=>$companyIncorporation,
					'comp_aoa'=>$company_AOA,
					'comp_moa'=>$company_MOA,
					'comp_gst'=>$company_GST,
					'comp_plan_type'=>$this->input->post('Company_plans'),
					'company_logo'=>$picture);
					// print_r($data);
					$results=$this->CAM->updateCompanyDetails($data,$comp_id);
					if($results==1){
						die(json_encode(array('status'=>1,'msg'=>"Added Successfully.")));
					}
					else if($results==2){
						die(json_encode(array('status'=>2,'msg'=>"Already Exists.")));
					}else{
						die(json_encode(array('status'=>0,'msg'=>"Failed To Add.")));
					}
				
	}
}	
?>