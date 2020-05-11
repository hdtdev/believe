<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_psikolog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function masuk()
    {
    	$data['title'] = 'Konsultasi Masuk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('konsultasi_psikolog/index', $data);
        $this->load->view('templates/footer');
    }
}