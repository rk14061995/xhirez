<?php

class CompanyAdmin_model extends CI_Model
{
    public function getUsers(){
        
        $this->db->join('resume_upload','user_.user_id = resume_upload.user_id');
        $data['users'] = $this->db->get('user_')->result();
        
        $sk=$this->db->select('skill_ids')->where('user_id',$data['users'][0]->user_id)->get('user_')->row();
		$skillArr=explode(',',$sk->skill_ids);
		$skills=array();
		foreach ($skillArr as $skiId) {
			$skills[]=$this->getSkillDetial($skiId);
		}
        $data['skills']=$skills;
        return $data;
    }
    public function getSkillDetial($id){
		return $this->db->where('skill_id',$id)->get('skills_')->result();
	}

}

?>