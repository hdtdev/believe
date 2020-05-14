<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_psikolog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('MArtikel');
    }

    public function index()
    {
    	$data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['index'] = $this->db->query("SELECT * FROM artikel INNER JOIN user ON id_user=id")->result_array(); 

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel_psikolog/index', $data);
        $this->load->view('templates/footer');
    }

    public function buat()
    {
        //here
        $data['title'] = 'Buat Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->db->query("SELECT * FROM kategori WHERE id_status = 2")->result_array();

        $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('artikel_psikolog/buat', $data);
            $this->load->view('templates/footer');
        }else{

            $judul_artikel = $this->input->post("judul_artikel");
            $konten_artikel = $this->input->post("konten_artikel");
            $id_kategori = $this->input->post("id_kategori");
            $tanggal_artikel = date("Y-m-d");
            $id_user = $this->input->post("id_user");
            $id_status = $this->input->post("id_status");
            $this->db->query("INSERT INTO artikel VALUES(NULL, '$judul_artikel', '$konten_artikel', '$id_kategori', '$tanggal_artikel', '$id_user', '$id_status')");
            redirect('artikel_psikolog');
        }
    }

    public function lihat($id_artikel)
    {
        //here
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['artikelDetail'] = $this->db->query("SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori = kategori.id_kategori WHERE artikel.id_status = 2 AND id_artikel =  ".intval($id_artikel))->row_array(); 
        $data['komentar'] = $this->db->query("SELECT * FROM komentar_artikel INNER JOIN user ON id=id_user WHERE id_artikel =".$id_artikel)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel_psikolog/lihat', $data);
        $this->load->view('templates/footer');
    }

    public function komentar($id_artikel)
    {
        $data['title'] = 'Tulis Komentar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/komentar', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['submit_komentar_artikel'])) {
            $this->MArtikel->komentar($_POST, $id_artikel);
            redirect('artikel_psikolog/lihat/'.intval($id_artikel));
        }
    }
}