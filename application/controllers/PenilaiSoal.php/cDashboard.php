<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('PenilaiSoal/Layout/head');
        $this->load->view('PenilaiSoal/Layout/aside');
        $this->load->view('PenilaiSoal/vDashboard');
        $this->load->view('PenilaiSoal/Layout/footer');
    }
}

/* End of file cDashboard.php */
