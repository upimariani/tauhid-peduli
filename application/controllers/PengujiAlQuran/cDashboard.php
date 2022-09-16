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
            'baca' => $this->mDashboard->lap_baca_alquran()
        );
        $this->load->view('PengujiTesAlQuran/Layout/head');
        $this->load->view('PengujiTesAlQuran/Layout/aside');
        $this->load->view('PengujiTesAlQuran/vDashboard', $data);
        $this->load->view('PengujiTesAlQuran/Layout/footer');
    }
}

/* End of file cDashboard.php */
