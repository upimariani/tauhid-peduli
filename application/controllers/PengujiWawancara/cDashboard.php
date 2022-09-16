<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mDashboard');
    }
    public function index()
    {
        $data = array(
            'wawancara' => $this->mDashboard->lap_wawancara()
        );
        $this->load->view('PengujiTesWawancara/Layout/head');
        $this->load->view('PengujiTesWawancara/Layout/aside');
        $this->load->view('PengujiTesWawancara/vDashboard', $data);
        $this->load->view('PengujiTesWawancara/Layout/footer');
    }
}

/* End of file cDashboard.php */
