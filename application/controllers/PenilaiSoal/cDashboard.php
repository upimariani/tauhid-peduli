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
            'soal' => $this->mDashboard->lap_tulis()
        );
        $this->load->view('PenilaiSoal/Layout/head');
        $this->load->view('PenilaiSoal/Layout/aside');
        $this->load->view('PenilaiSoal/vDashboard', $data);
        $this->load->view('PenilaiSoal/Layout/footer');
    }
}

/* End of file cDashboard.php */
