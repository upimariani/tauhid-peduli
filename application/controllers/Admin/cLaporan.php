<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPerhitungan');
	}


	public function index()
	{
		$data = array(
			'lap' => $this->mPerhitungan->hasil_siswa()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/aside');
		$this->load->view('Admin/vLaporan', $data);
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cLaporan.php */
