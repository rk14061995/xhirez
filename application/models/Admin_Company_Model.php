<?php

class Admin_Company_Model extends CI_Model
{
	public function addCompany($data,$company)
	{
		$condition=array("company_name"=>$company);
		// print_r($condition);
        $res=$this->db->where($condition)->get('company_')->result();
        // print_r($res);
        // echo ' *** '.count($res);
	   if(count($res)==0){   	
	   			
	   		// echo '-------------------------------------------------------';
	   		// print_r($data);



// INSERT INTO `company_`(`company_id`, `company_name`, `comp_phone`, `comp_desc`, `comp_address`, `website_url`, `company_email`, `company_pwd`, `company_logo`, `company_status`, `company_reg_no`, `reg_on`, `comp_incorporation`, `comp_aoa`, `comp_moa`, `comp_gst`, `comp_plan_type`) 

// 	   		[company_name] => test
//     [comp_desc] =>                                       
//                                     dfgdfg
//     [comp_address] => Devpuram phase 2 d 17 lane
//     [website_url] => asdfsdf@ddd.com
//     [company_email] => admin@admin.com
//     [company_reg_no] => sfsdsd
//     [company_pwd] => 123
//     [comp_incorporation] => Business_Requirements_Document_of_Recruitment_Portal_for_Syolo_Group_By_Sudha_Yadav9.docx
//     [comp_aoa] => recruitment_dashboard9.docx
//     [comp_moa] => BoardingPass14.pdf
//     [comp_gst] => job_portal_model14.docx
//     [comp_plan_type] => 
//     [company_logo] => Slider-39.jpg
			$results=$this->db->insert('company_',$data);
			if($results)
			{
				// echo ' Inserted Successfully ';
				return 1;
			}
			else
			{
				// echo ' failed To Insert ';
				return 0;
			}
	 	}
		else
		{
			// echo 'Data exists';
			return 2;
	    }
		
		
	}
	public function getCompanyDetails()
	{
		$this->db->order_by('company_id','DESC');
		return $this->db->get('company_')->result();
	}
	public function getCompanyDetailById($company_id)
	{
		$this->db->where('company_id',$company_id);
		 return $this->db->get('company_')->result();

	}
	public function getCompanytdetailsById($company_id)
	{
		$this->db->where('company_id',$company_id);
		 return $this->db->get('company_')->result();

	}
	public function getCompanytype()
	{
		return $this->db->get('plan_type')->result();
	}
	// public function getCompanyTypeDetails()
	// {
	// 	return $this->db->get('company_type')->result();
	// }
	public function updateCompany($data,$company_id)
	{
		
       		 $this->db->where('company_id',$company_id);
			$results=$this->db->update('company_',$data);
			if($results)
			{
				return 1;
			}
			else
			{
				return 0;
			}
	 
		
	}
	public function addCompanyType($data)
	{
		 // print_r($data);
		 // die;
       
	   if(count($this->db->where($data)->get('plan_type')->result())==0)
	   {   	
	   		// echo 'not found';	
			$results=$this->db->insert('plan_type',$data);
			if($results)
			{
				return 1;
			}
			else
			{
				return 0;
			}
	 	}
		else
		{
			// echo 'Alreaedey';
			return 2;
	    }
	 }
	 public function updateCompanyType($data,$c_type_id){
		 $this->db->where('c_type_id',$c_type_id);
		 return $this->db->update('plan_type',$data);
	 }

} ?>