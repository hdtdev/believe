<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_psikolog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('MKonsultasi');
    }

    public function masuk()
    {
    	$data['title'] = 'Konsultasi Masuk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_psikolog = $this->session->userdata('id');
        $data['list'] = $this->db->query("SELECT * FROM konsultasi INNER JOIN user ON konsultasi.id_sender = user.id WHERE id_psikolog=$id_psikolog GROUP BY id_user HAVING COUNT(id_user)>=1 ORDER BY waktu_konsultasi DESC")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('konsultasi_psikolog/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($id_user)
    {
        //here
        $data['title'] = 'Konsultasi Masuk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_psikolog = $this->session->userdata('id');
        $data['lihat'] = $this->db->query("SELECT * FROM konsultasi INNER JOIN user ON id=id_sender WHERE id_user=$id_user AND id_psikolog=$id_psikolog ORDER BY id_konsultasi ")->result_array();
        $data['is_active'] = $this->db->query("SELECT is_active FROM konsultasi WHERE id_psikolog=$id_psikolog AND id_user=$id_user LIMIT 1")->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('konsultasi_psikolog/lihat', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['submit_konsultasi_psikolog'])) {
            $this->MKonsultasi->konsultasi_psikolog($_POST, $id_user);
            redirect('konsultasi_psikolog/lihat/'.intval($id_user));
        }
    }

    public function disable($id_user)
    {
        //here
        $this->MKonsultasi->disable($id_user);
        redirect('konsultasi_psikolog/lihat/'.intval($id_user));
    }
}