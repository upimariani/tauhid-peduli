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

    //dashboard tes baca al quran
    public function lap_baca_alquran()
    {
        $data['baca'] = $this->db->query("SELECT * FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa WHERE tes_baca!='0'")->result();
        $data['jml_sudah'] = $this->db->query("SELECT COUNT(tes_baca) as jml FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa WHERE tes_baca!='0'")->row();
        $data['jml_belum'] = $this->db->query("SELECT COUNT(tes_baca) as jml FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa ='0'")->row();
        return $data;
    }
    //dashboard tes wawancara
    public function lap_wawancara()
    {
        $data['wawancara'] = $this->db->query("SELECT * FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa WHERE tes_wawancara!='0'")->result();
        $data['jml_sudah'] = $this->db->query("SELECT COUNT(tes_wawancara) as jml FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa WHERE tes_wawancara!='0'")->row();
        $data['jml_belum'] = $this->db->query("SELECT COUNT(tes_wawancara) as jml FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa ='0'")->row();
        return $data;
    }
    //dashboard tes tulis
    public function lap_tulis()
    {
        $data['tulis'] = $this->db->query("SELECT * FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa WHERE tes_tulis!='0' && 1")->result();
        $data['jml_sudah'] = $this->db->query("SELECT COUNT(tes_tulis) as jml FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa WHERE tes_tulis!='0' && 1")->row();
        $data['jml_belum'] = $this->db->query("SELECT COUNT(tes_tulis) as jml FROM `data_siswa` JOIN siswa ON data_siswa.id_siswa=siswa.id_siswa ='0' && '1'")->row();
        return $data;
    }
}

/* End of file mDashboard.php */
