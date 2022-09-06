<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSiswa');
	}
	public function index()
	{
		$this->load->view('Siswa/Layout/head');
		$this->load->view('Siswa/Layout/aside');
		$this->load->view('Siswa/vDashboard');
		$this->load->view('Siswa/Layout/footer');
	}
}

/* End of file cDashboard.php */
