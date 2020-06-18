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
        $is_active = 1;
        
        $sql = $this->db->query("INSERT INTO konsultasi VALUES(NULL, '$id_sender', '$id_user', '$id_psikolog', '$pesan', '$waktu_konsultasi', '$is_active')");

        if($sql){
            return true;
        }else{
            return false;
        }
    }

    public function rating($post, $id_psikolog)
    {
        //here
        $id_user = $this->session->userdata('id');
        $id_psikolog = $id_psikolog;
        $rating = $this->input->post('rating');
        
        $sql = $this->db->query("INSERT INTO rating VALUES(NULL, '$id_psikolog', '$id_user', '$rating')");

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
        $is_active = 1;
        
        $sql = $this->db->query("INSERT INTO konsultasi VALUES(NULL, '$id_sender', '$id_user', '$id_psikolog', '$pesan', '$waktu_konsultasi','$is_active')");

        if($sql){
            return true;
        }else{
            return false;
        }
    }

    public function disable($id_user)
    {
        //here
        $id_user = $id_user;
        $id_psikolog = $this->session->userdata('id');
        $sql = $this->db->query("UPDATE konsultasi SET is_active = 0 WHERE id_psikolog = $id_psikolog AND id_user = $id_user");
        return true;
    }

    // disable dilakukan oleh user
    public function disable_user($id_psikolog)
    {
        //here
        $id_user = $this->session->userdata('id');
        $id_psikolog = $id_psikolog;
        $sql = $this->db->query("UPDATE konsultasi SET is_active = 0 WHERE id_psikolog = $id_psikolog AND id_user = $id_user");
        return true;
    }
}
// SELECT id_konsultasi,id_user, pesan, waktu_konsultasi FROM konsultasi GROUP BY id_user HAVING COUNT(id_user)>=1 ORDER BY `konsultasi`.`waktu_konsultasi`  DESC

// berhasil
// SELECT id_konsultasi,id_user, pesan, waktu_konsultasi FROM konsultasi GROUP BY id_user HAVING COUNT(id_user)>=1 ORDER BY waktu_konsultasi DESC

