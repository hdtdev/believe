<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
    	$data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['index'] = $this->db->query("SELECT * FROM artikel WHERE id_status =  2")->result_array(); 

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($id_artikel)
    {
        //here
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['artikelDetail'] = $this->db->query("SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori = kategori.id_kategori WHERE artikel.id_status = 2 AND id_artikel =  ".intval($id_artikel))->row_array(); 

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/lihat', $data);
        $this->load->view('templates/footer');
    }
}