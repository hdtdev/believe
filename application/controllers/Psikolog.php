<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psikolog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
    	$data['title'] = 'List Psikolog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['psikolog'] = $this->db->query("SELECT * FROM user WHERE role_id = 2 AND is_active = 1")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('psikolog/index', $data);
        $this->load->view('templates/footer');
    }

    // public function lihat($id)
    // {
    //     $data['title'] = 'Detail Pengguna';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['psikolog'] = $this->db->query("SELECT * FROM user WHERE role_id = 2 AND is_active = 1")->result_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('psikolog/index', $data);
    //     $this->load->view('templates/footer');
    // }
}