<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diary extends CI_Controller
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
            redirect('diary/saya');
        }
    }

    public function saya()
    {
        $data['title'] = 'Diary Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diary_saya'] = $this->MDiary->diary_saya($this->session->userdata('id'));

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diary/saya', $data);
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
        $this->load->view('diary/lihat', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['submit_komentar_diary'])) {
            $this->MDiary->komentar($_POST, $id_diary);
            redirect('diary/lihat/'.intval($id_diary));
        }
    }

    // public function komentar($id_diary)
    // {
    //     $data['title'] = 'Tulis Komentar';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('diary/komentar', $data);
    //     $this->load->view('templates/footer');

    //     if (isset($_POST['submit_komentar_diary'])) {
    //         $this->MDiary->komentar($_POST, $id_diary);
    //         redirect('diary/lihat/'.intval($id_diary));
    //     }
    // }
}