<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MDiary extends CI_Model
{
    public function diary_saya($id_user)
    {
        $sql = $this->db->query("SELECT * FROM diary INNER JOIN user ON id=id_user WHERE id_user=".intval($id_user));
        return $sql->result_array();
    }

    public function getAll()
    {
        $sql = $this->db->query("SELECT * FROM diary INNER JOIN user ON id=id_user WHERE id_status = 2 AND only_psikolog = 0");
    	// $sql = $this->db->query("SELECT * FROM diary INNER JOIN user ON id_user=id WHERE id_status = 2 AND only_psikolog = 0");
    	return $sql->result_array();
    }

    public function getById($id_diary)
    {
        $sql = $this->db->query("SELECT * FROM diary WHERE id_diary =".intval($id_diary));
        return $sql->row_array();
    }

    public function getDiaryPsikolog()
    {
        $sql = $this->db->query("SELECT * FROM diary INNER JOIN user ON id=id_user WHERE only_psikolog = 1 AND id_status =2");
        return $sql->result_array();
    }
}