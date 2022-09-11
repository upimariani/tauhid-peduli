<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('PengujiTesAlQuran/Layout/head');
        $this->load->view('PengujiTesAlQuran/Layout/aside');
        $this->load->view('PengujiTesAlQuran/vDashboard');
        $this->load->view('PengujiTesAlQuran/Layout/footer');
    }
}

/* End of file cDashboard.php */
