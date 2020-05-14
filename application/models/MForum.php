<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MForum extends CI_Model
{
	public function komentar($post, $id_forum)
    {
        //here
        $konten_komentar = $this->input->post('konten_komentar');
        $id_user = $this->session->userdata('id');
        $id_forum = $id_forum;
        $waktu_komentar_forum = date("Y-m-d h:i:sa");
        
        $sql = $this->db->query("INSERT INTO komentar_forum VALUES(NULL, '$konten_komentar', '$id_user', '$id_forum', '$waktu_komentar_forum')");

        if($sql){
            return true;
        }else{
            return false;
        }
    }
}