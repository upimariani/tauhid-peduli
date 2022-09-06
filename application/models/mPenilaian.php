<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPenilaian extends CI_Model
{
    public function siswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('data_siswa', 'siswa.id_siswa = data_siswa.id_siswa', 'left');
        return $this->db->get()->result();
    }
    public function siswa_nilai_raport($id)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('data_siswa', 'siswa.id_siswa = data_siswa.id_siswa', 'left');
        $this->db->where('data_siswa.id_siswa', $id);
        return $this->db->get()->row();
    }
    public function nilai($id, $data)
    {
        $this->db->where('id_dt_siswa', $id);
        $this->db->update('data_siswa', $data);
    }

    public function jawaban_soal($data)
    {
        $this->db->insert('jwbn_soal_siswa', $data);
    }


    //admin
    public function jawaban_siswa($id)
    {
        $this->db->select('*');
        $this->db->from('jwbn_soal_siswa');
        $this->db->join('siswa', 'siswa.id_siswa = jwbn_soal_siswa.id_siswa', 'left');
        $this->db->join('soal', 'soal.id_soal = jwbn_soal_siswa.id_soal', 'left');
        $this->db->where('jwbn_soal_siswa.id_siswa', $id);
        return $this->db->get()->result();
    }
    public function count_soal($id)
    {
        $this->db->select('COUNT(id_soal) as jml');
        $this->db->from('jwbn_soal_siswa');
        $this->db->where('id_siswa', $id);

        return $this->db->get()->row();
    }


    public function siswa_view($id)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('id_siswa', $id);
        return $this->db->get()->row();
    }
}

/* End of file mPenilaian.php */
