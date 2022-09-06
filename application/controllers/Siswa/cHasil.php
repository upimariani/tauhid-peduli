<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHasil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mSiswa');
    }
    public function index()
    {
        $data = array(
            'siswa' => $this->mSiswa->select_siswa()
        );
        $this->load->view('Siswa/Layout/head');
        $this->load->view('Siswa/Layout/aside');
        $this->load->view('Siswa/vHasil', $data);
        $this->load->view('Siswa/Layout/footer');
    }
}

/* End of file cHasil.php */
