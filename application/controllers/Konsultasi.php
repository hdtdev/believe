<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('MKonsultasi');
    }

    public function index()
    {
    	$data['title'] = 'Konsultasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allPsikolog'] = $this->db->query("SELECT * FROM user WHERE role_id = 2")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('konsultasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function konsultasi($id_psikolog)
    {
        //here
        $data['title'] = 'Konsultasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_user = $this->session->userdata('id');
        $data['psikolog'] = $this->db->get_where('user', ['id' => $id_psikolog])->row_array();
        $data['konsultasi'] = $this->db->query("SELECT * FROM konsultasi INNER JOIN user ON id=id_sender WHERE id_user=$id_user AND id_psikolog=$id_psikolog ORDER BY id_konsultasi")->result_array();
        $data['is_active'] = $this->db->query("SELECT is_active FROM konsultasi WHERE id_psikolog=$id_psikolog AND id_user=$id_user LIMIT 1")->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('konsultasi/konsultasi', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['submit_konsultasi'])) {
            $this->MKonsultasi->konsultasi($_POST, $id_psikolog);
            redirect('konsultasi/konsultasi/'.intval($id_psikolog));
        }
    }

    public function reactive($id_psikolog)
    {
        //here
        $id_user = $this->session->userdata('id');
        $id_psikolog = $id_psikolog;
        $this->db->query("UPDATE konsultasi SET is_active = 1 WHERE id_psikolog = $id_psikolog AND id_user = $id_user");
        redirect('konsultasi/konsultasi/'.intval($id_psikolog));
    }
}