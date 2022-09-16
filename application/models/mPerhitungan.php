<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPerhitungan extends CI_Model
{
	public function hasil_siswa()
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->join('siswa', 'data_siswa.id_siswa = siswa.id_siswa', 'left');
		$this->db->where('tes_baca!=0');
		$this->db->where('tes_wawancara!=0');
		$this->db->where('tes_tulis!=0');
		$this->db->where('nilai_ing!=0');
		$this->db->order_by('keputusan', 'asc');
		return $this->db->get()->result();
	}
	public function rangking()
	{
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->order_by('hasil', 'desc');
		return $this->db->get()->result();
	}
}

/* End of file mPerhitungan.php */
