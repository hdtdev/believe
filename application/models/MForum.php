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
        $waktu_komentar_forum = date("Y-m-d h:i:s");
        
        $sql = $this->db->query("INSERT INTO komentar_forum VALUES(NULL, '$konten_komentar', '$id_user', '$id_forum', '$waktu_komentar_forum')");

        if($sql){
            return true;
        }else{
            return false;
        }
    }

    public function buat($post, $id_psikolog)
    {
        //here
        $nama_list_forum = $this->input->post('nama_list_forum');
        $deskripsi_list_forum = $this->input->post('deskripsi_list_forum');
        $id_status = $this->input->post('id_status');
        if(!empty($_FILES['image_list_forum']['name'])){
            $img_forum =  str_replace(' ','_',date('Ymdhis').$_FILES['image_list_forum']['name']);
            $config['upload_path']      = './assets/img/forum/';
            $config['allowed_types']    = 'gif|jpg|png|webp';
            $config['max_size']         = '5048';
            $config['file_name']        = $img_forum;
            $this->upload->initialize($config);
            $this->upload->do_upload('image_list_forum');
            // echo "<pre>";
            // print_r($this->upload->data());
            // print_r($this->upload->display_errors());
            // echo "</pre>";
            // exit();
        }else{
            $img_forum = "default.png";
        }

        $image = $img_forum;
        $id_psikolog = $id_psikolog;

        $sql = $this->db->query("INSERT INTO list_forum VALUES(NULL, '$nama_list_forum', '$deskripsi_list_forum', '$image', '$id_status', '$id_psikolog')");
        return true;
    }
}