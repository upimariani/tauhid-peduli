<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSiswa extends CI_Model
{
	public function select_siswa()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('data_siswa', 'siswa.id_siswa = data_siswa.id_siswa', 'left');
		$this->db->where('data_siswa.id_siswa', $this->session->userdata('id'));
		return $this->db->get()->row();
	}
	public function daftar($data)
	{
		$this->db->insert('data_siswa', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_dt_siswa', $id);
		$this->db->update('data_siswa', $data);
	}
}

/* End of file mSiswa.php */
