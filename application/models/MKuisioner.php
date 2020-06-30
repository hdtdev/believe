<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MKuisioner extends CI_Model
{
    public function submit($post, $id)
    {
        //here
        $id_user = $id;
        $satu = $this->db->escape($post["1"]);
        $dua = $this->db->escape($post["2"]);
        $tiga = $this->db->escape($post["3"]);
        $empat = $this->db->escape($post["4"]);
        $lima = $this->db->escape($post["5"]);
        $enam = $this->db->escape($post["6"]);
        $tujuh = $this->db->escape($post["7"]);
        $delapan = $this->db->escape($post["8"]);
        $sembilan = $this->db->escape($post["9"]);
        $sepuluh = $this->db->escape($post["10"]);
        $sebelas = $this->db->escape($post["11"]);
        $duabelas = $this->db->escape($post["12"]);
        $tigabelas = $this->db->escape($post["13"]);
        $empatbelas = $this->db->escape($post["14"]);

        $this->db->query("INSERT INTO kuisioner VALUES(NULL, $id_user, $satu, $dua, $tiga, $empat,$lima,$enam,$tujuh,$delapan,$sembilan,$sepuluh,$sebelas,$duabelas,$tigabelas,$empatbelas)");
        $this->db->query("UPDATE user SET is_kuisioner = 1 WHERE id = $id_user");
        return true;
    }
}