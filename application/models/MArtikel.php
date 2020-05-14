<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MArtikel extends CI_Model
{
	public function komentar($post, $id_artikel)
	{
		//here
		$konten_komentar = $this->input->post('konten_komentar');
        $id_user = $this->session->userdata('id');
        $id_artikel = $id_artikel;
        $waktu_komentar_artikel = date("Y-m-d h:i:sa");
        
        $sql = $this->db->query("INSERT INTO komentar_artikel VALUES(NULL, '$konten_komentar', '$id_user', '$id_artikel', '$waktu_komentar_artikel')");

        if($sql){
			return true;
		}else{
			return false;
		}
	}
}