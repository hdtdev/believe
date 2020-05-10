<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diary extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
    	$data['title'] = 'Diary Public';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diary/index', $data);
        $this->load->view('templates/footer');
    }

    public function tulis()
    {
        $data['title'] = 'Tulis Diary';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('konten_diary', 'Konten', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('diary/tulis', $data);
            $this->load->view('templates/footer');
        }else{
            //here
            $konten_diary = $this->input->post('konten_diary');
            $only_psikolog = $this->input->post('only_psikolog');
            $tanggal_diary = date("Y-m-d h:i:sa");
            $id_user = $this->input->post('id_user');
            $only_psikolog = $this->input->post('only_psikolog');
            $id_status = $this->input->post('id_status');

            $this->db->query("INSERT INTO diary VALUES (NULL, '$konten_diary', '$tanggal_diary', '$id_user', '$only_psikolog', '$id_status')");
            redirect('diary');
        }
    }

    public function saya()
    {
        //here
        $data['title'] = 'Diary Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diary/tulis', $data);
        $this->load->view('templates/footer');
    }
}