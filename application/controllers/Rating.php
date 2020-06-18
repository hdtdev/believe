<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MRating');
        // is_logged_in();
    }

    public function submit()
    {
        if (isset($_POST['submit_rating'])) {
            $this->MRating->submit($_POST);
            redirect('artikel/');
        }
        
    }

}