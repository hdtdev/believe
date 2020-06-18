<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // is_logged_in();
    }

    public function buat()
    {
    	$data['title'] = 'Kuisioner User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        //$this->load->view('templates/topbar', $data);
        $this->load->view('kuisioner/kuisioner_user', $data);
        //$this->load->view('templates/footer');
    }

}