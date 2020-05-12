<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
    	$data['title'] = 'Forum';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allForum'] = $this->db->query("SELECT * FROM list_forum WHERE id_status = 2")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('forum/index', $data);
        $this->load->view('templates/footer');
    }
}