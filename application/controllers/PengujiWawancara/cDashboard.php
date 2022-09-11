<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('PengujiTesWawancara/Layout/head');
        $this->load->view('PengujiTesWawancara/Layout/aside');
        $this->load->view('PengujiTesWawancara/vDashboard');
        $this->load->view('PengujiTesWawancara/Layout/footer');
    }
}

/* End of file cDashboard.php */
