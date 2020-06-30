<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
    	$data['title'] = 'List Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allUser'] = $this->db->query("SELECT * FROM user WHERE role_id = 3")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengguna/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($id)
    {
        $data['title'] = 'Detail Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengguna'] = $this->db->query("SELECT * FROM user WHERE role_id = 3 AND id = $id")->row_array();
        $data['index'] = $this->db->query("SELECT * FROM diary INNER JOIN user ON id_user = id WHERE id_user = $id AND id_status=2")->result_array();
        $data['result_kuisioner'] = $this->db->query("SELECT kuisioner.1+kuisioner.2+kuisioner.3+kuisioner.4+kuisioner.5+kuisioner.6+kuisioner.7+kuisioner.8+kuisioner.9+kuisioner.10+kuisioner.11+kuisioner.12+kuisioner.13+kuisioner.14 as result FROM kuisioner WHERE id_user = $id")->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengguna/lihat', $data);
        $this->load->view('templates/footer');
    }
}