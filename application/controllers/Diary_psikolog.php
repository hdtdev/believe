<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diary_psikolog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->Model('MDiary');
    }

    public function index()
    {
    	$data['title'] = 'Diary Public';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['index'] = $this->MDiary->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diarypsikolog/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($id_diary)
    {
        //here
        $data['title'] = 'Details Diary';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diaryId'] = $this->MDiary->getById($id_diary);
        $data['komentar'] = $this->db->query("SELECT * FROM komentar_diary INNER JOIN user ON id=id_user WHERE id_diary =$id_diary ORDER BY waktu_komentar_diary ASC")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diarypsikolog/lihat', $data);
        $this->load->view('templates/footer');
    }

    public function psikolog()
    {
        //here
        $data['title'] = 'Diary Psikolog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diaryPsikolog'] = $this->MDiary->getDiaryPsikolog();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diarypsikolog/psikolog', $data);
        $this->load->view('templates/footer');
    }

    public function komentar($id_diary)
    {
        $data['title'] = 'Tulis Komentar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diarypsikolog/komentar', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['submit_komentar_diary'])) {
            $this->MDiary->komentar($_POST, $id_diary);
            redirect('diary_psikolog/lihat/'.intval($id_diary));
        }
    }
}