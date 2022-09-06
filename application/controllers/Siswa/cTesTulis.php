<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cTesTulis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSiswa');
		$this->load->model('mSoal');
		$this->load->model('mPenilaian');
	}
	public function index()
	{
		$data = array(
			'siswa' => $this->mSiswa->select_siswa(),
		);
		$this->load->view('Siswa/Layout/head');
		$this->load->view('Siswa/Layout/aside');
		$this->load->view('Siswa/vPetunjukSoal', $data);
		$this->load->view('Siswa/Layout/footer');
	}
	public function soal()
	{
		$data = array(
			'soal' => $this->mSoal->select()
		);
		$this->load->view('Siswa/Layout/head');
		$this->load->view('Siswa/Layout/aside');
		$this->load->view('Siswa/vSoal', $data);
		$this->load->view('Siswa/Layout/footer');
	}
	public function jawab()
	{
		$soal = $this->mSoal->select();
		$name = 1;
		$no_soal = 1;
		foreach ($soal as $key => $value) {
			$data = array(
				'id_siswa' => $this->session->userdata('id'),
				'id_soal' => $this->input->post('id_soal' . $no_soal++),
				'jwbn_siswa' => $this->input->post('jwb' . $name++)
			);
			$this->mPenilaian->jawaban_soal($data);
		}
		$status_tes = array(
			'tes_tulis' => '1'
		);
		$this->db->where('id_siswa', $this->session->userdata('id'));
		$this->db->update('data_siswa', $status_tes);


		$this->session->set_flashdata('success', 'Jawaban Anda Berhasil Dikirim!');
		redirect('Siswa/cTesTulis');
	}
}

/* End of file cTesTulis.php */
