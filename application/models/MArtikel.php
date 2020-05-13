<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MArtikel extends CI_Model
{
	public function add($post)
	{
		//here
		$judul_artikel = $this->db->escape($post["judul_artikel"]);
        $konten_artikel = $this->db->escape(["konten_artikel"]);
        $id_kategori = $this->db->escape(["id_kategori"]);
        $tanggal_artikel = date("Y-m-d");
        $id_status = $this->db->escape($post["id_status"]);
        
        $sql = $this->db->query("INSERT INTO artikel VALUES(NULL, $judul_artikel, '$konten_artikel', $id_kategori, $tanggal_artikel, $id_status)");

        if($sql){
			return true;
		}else{
			return false;
		}
	}
}