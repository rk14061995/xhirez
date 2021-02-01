<?php
class Website extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('DatabaseModel','DTB');

	}

	public function index(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('website/webpages/splash');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
	}
	// pubilic function search(){

	// }
	public function home(){
 		// print_r($this->session->userdata('login'));
 		// $categories=$this->DTB->getData('job_category');
 		$categories=$this->db->get('job_category')->result();
 		$jobArray=array();
 		foreach($categories as $cat){
 			// print_r($cat);
 			$condition=array("job_category"=>$cat->category_id,"job_apps_status"=>'active');
 			$res=$this->DTB->getData('jobs_added',$condition);
 			$data=array(
 							'category_id'=>$cat->category_id,
 							'category_icon'=>$cat->category_icon,
 							'category_name'=>$cat->category_name,
							'jobs_details'=>"d",
							'total_jobs'=>count($res)
						);
 			array_push($jobArray,$data);
 			
 		}
 		$data['categories']=$jobArray;

 		$data['interest']=$this->db
 				->join('job_category','job_category.category_id=jobs_added.job_category')
 				->join('job_type','job_type.type_id=jobs_added.job_type')
 				->join('company_','company_.company_id=jobs_added.added_by_company_id')
 				->order_by('rand()')->limit(4)->get('jobs_added')->result();
 		$data['total_jobs']=$this->db->get('jobs_added')->result();
 		// die(json_encode(array("code"=>1,"data"=>$jobArray)));
 		$this->load->view('website/layout/header');
 		$this->load->view('website/webpages/home',$data);
 		$this->load->view('website/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}
 	public function jobsByCategory($category_id){
		$data['jobs']=$this->DTB->getJobsByCategory($category_id);
 		$data['totaljobs']=$this->DTB->getJobsByCategoryTotal($category_id);
 		// print_r(expression);
 		$this->load->view('website/Layout/header');
 		$this->load->view('website/webpages/jobSearch',$data);
 		$this->load->view('website/Layout/footer');
		// print_r($res);
 	}
 	public function getJobDescription($job_post_id){
 		$condition=array("job_id"=>$job_post_id);
		$res=$this->DTB->getData('jobs_added',$condition);
		print_r($res);
 	}
 	public function getCompanyDetails($company_id){
 		$condition=array("company_id"=>$company_id);
		$res=$this->DTB->getData('company_',$condition);
		print_r($res);
 	}
	 public function features(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('website/layout/header');
 		$this->load->view('website/webpages/features');
 		$this->load->view('website/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
	 }
	 
	 public function JobSearch(){
		// print_r($this->session->userdata('login'));
		$this->load->view('website/layout/header');
		$this->load->view('website/webpages/jobSearch');
		$this->load->view('website/layout/footer');
		// $this->load->view('admin/Pages/index');
		// $this->load->view('Layout/footer');
	}
}