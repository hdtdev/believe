<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum_psikolog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('MForum');
    }

    public function index()
    {
    	$data['title'] = 'Forum';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->session->userdata('id');
        $data['allForum'] = $this->db->query("SELECT * FROM list_forum WHERE id_status = 2 AND id_psikolog=$id")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('forum_psikolog/index', $data);
        $this->load->view('templates/footer');
    }

    public function buat()
    {
        //here
        $data['title'] = 'Buat Forum';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_psikolog = $this->session->userdata('id');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('forum_psikolog/buat', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['buatforum'])) {
            $this->MForum->buat($_POST, $id_psikolog);
            redirect('forum_psikolog/');
        }
    }

    public function diskusi($id_list_forum)
    {
        $data['title'] = 'Diskusi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diskusi'] = $this->db->query("SELECT * FROM list_forum WHERE id_list_forum = $id_list_forum")->row_array();
        $data['komentar'] = $this->db->query("SELECT * FROM komentar_forum INNER JOIN user ON id=id_user WHERE id_forum =$id_list_forum ORDER BY waktu_komentar_forum ASC")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('forum_psikolog/diskusi', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['submit_komentar_forum'])) {
            $this->MForum->komentar($_POST, $id_list_forum);
            redirect('forum_psikolog/diskusi/'.intval($id_list_forum));
        }
    }
}