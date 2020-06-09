<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MKonsultasi extends CI_Model
{
	public function konsultasi($post, $id_psikolog)
    {
        //here
        $id_user = $this->session->userdata('id');
        $id_sender = $this->session->userdata('id');
        $id_psikolog = $id_psikolog;
        $pesan = $this->input->post('pesan');
        $waktu_konsultasi = date("Y-m-d h:i:s");
        
        $sql = $this->db->query("INSERT INTO konsultasi VALUES(NULL, '$id_sender', '$id_user', '$id_psikolog', '$pesan', '$waktu_konsultasi')");

        if($sql){
            return true;
        }else{
            return false;
        }
    }

    public function konsultasi_psikolog($post, $id_user)
    {
        //here
        $id_sender = $this->session->userdata('id');
        $id_psikolog = $this->session->userdata('id');
        $id_user = $id_user;
        $pesan = $this->input->post('pesan');
        $waktu_konsultasi = date("Y-m-d h:i:s");
        
        $sql = $this->db->query("INSERT INTO konsultasi VALUES(NULL, '$id_sender', '$id_user', '$id_psikolog', '$pesan', '$waktu_konsultasi')");

        if($sql){
            return true;
        }else{
            return false;
        }
    }
}
// SELECT id_konsultasi,id_user, pesan, waktu_konsultasi FROM konsultasi GROUP BY id_user HAVING COUNT(id_user)>=1 ORDER BY `konsultasi`.`waktu_konsultasi`  DESC

// berhasil
// SELECT id_konsultasi,id_user, pesan, waktu_konsultasi FROM konsultasi GROUP BY id_user HAVING COUNT(id_user)>=1 ORDER BY waktu_konsultasi DESC

