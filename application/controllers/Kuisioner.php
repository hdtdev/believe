<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MKuisioner');
        // is_logged_in();
    }

    public function buat()
    {
    	$data['title'] = 'Kuisioner User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->session->userdata('id');
        
        $this->load->view('templates/header', $data);
        $this->load->view('kuisioner/kuisioner_user', $data);

        if (isset($_POST['submit_kuisioner'])) {
            # code...
            $this->MKuisioner->submit($_POST, $id);
            redirect('user');
        }
    }

}