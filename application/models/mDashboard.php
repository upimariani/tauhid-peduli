<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
    public function hasil_analisis()
    {
        $this->db->select('*');
        $this->db->from('data_siswa');
        $this->db->join('siswa', 'data_siswa.id_siswa = siswa.id_siswa', 'left');
        $this->db->order_by('hasil', 'desc');

        return $this->db->get()->result();
    }
    public function jumlah_dashboard()
    {
        $data['admin'] = $this->db->query("SELECT COUNT(nama_admin) as jml_admin FROM admin")->row();
        $data['soal'] = $this->db->query("SELECT COUNT(nama_soal) as jml_soal FROM soal")->row();
        $data['siswa'] = $this->db->query("SELECT COUNT(nama_siswa) as jml_siswa FROM siswa")->row();
        $data['siswa_tdk_valid'] = $this->db->query("SELECT COUNT(nisn) as jml_tdk_valid FROM data_siswa WHERE hasil='0'")->row();
        return $data;
    }
}

/* End of file mDashboard.php */
