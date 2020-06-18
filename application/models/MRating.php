<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Model
{
   public function submit($post)
	{
		//here
		$rating = $this->input->post('rating');
        $id_user = $this->session->userdata('id');
        $id_psikolog = 1;
        
        $sql = $this->db->query("INSERT INTO rating VALUES(NULL, '$id_psikolog', '$id_user', '$rating')");

        if($sql){
			return true;
		}else{
			return false;
		}
	}
}









