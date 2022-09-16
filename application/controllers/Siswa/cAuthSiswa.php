<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAuthSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAuth');
	}


	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('Siswa/vlogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$login = $this->mAuth->auth_siswa($username, $password);
			if ($login) {
				$username = $login->username;
				$id = $login->id_siswa;


				$array = array(
					'id' => $id
				);

				$this->session->set_userdata($array);
				redirect('Siswa/cDaftar');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Salah!!!');
				redirect('Siswa/cAuthSiswa');
			}
		}
	}
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
		$this->form_validation->set_rules('kon_password', 'Retype Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Siswa/vregister');
		} else {
			$pass = $this->input->post('kon_password');
			$uppercase = preg_match('@[A-Z]@', $pass);
			$lowercase = preg_match('@[a-z]@', $pass);
			$number    = preg_match('@[0-9]@', $pass);

			if (!$uppercase || !$lowercase || !$number || strlen($pass) <= 6) {
				$this->session->set_flashdata('error', 'Password harus kombinasi huruf besar, huruf kecil, angka Minimal Panjang 6!');
				redirect('Siswa/cAuthSiswa/register');
			} else {
				$data = array(
					'nama_siswa' => $this->input->post('nama'),
					'jk' => $this->input->post('jk'),
					'alamat_siswa' => $this->input->post('alamat'),
					'no_hp_siswa' => '+62' . $this->input->post('no_hp'),
					'username_siswa' => $this->input->post('username'),
					'password_siswa' => $this->input->post('kon_password'),
				);
				$this->mAuth->register($data);
				$this->session->set_flashdata('success', 'Register Berhasil! Silahkan Login');
				redirect('Siswa/cAuthSiswa');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
		redirect('Siswa/cAuthSiswa');
	}
}

/* End of file cAuthSiswa.php */
