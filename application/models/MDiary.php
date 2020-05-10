<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MDiary extends CI_Model
{
    public function diary_saya($id_user)
    {
        $sql = $this->db->query("SELECT * FROM diary WHERE id_user=".intval($id_user));
        return $sql->result_array();
    }

    public function getAll()
    {
    	$sql = $this->db->query("SELECT * FROM diary WHERE id_status = 2 AND only_psikolog = 0");
    	return $sql->result_array();
    }
}