<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenilaianSoal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPenilaian');
    }
    public function index()
    {
        $data = array(
            'siswa' => $this->mPenilaian->siswa()
        );
        $this->load->view('PenilaiSoal/Layout/head');
        $this->load->view('PenilaiSoal/Layout/aside');
        $this->load->view('PenilaiSoal/vJawabanSiswa', $data);
        $this->load->view('PenilaiSoal/Layout/footer');
    }
    public function nilai_tes_tulis($id)
    {
        $data = array(
            'siswa_view' => $this->mPenilaian->siswa_view($id),
            'jawaban' => $this->mPenilaian->jawaban_siswa($id)
        );
        $this->load->view('PenilaiSoal/Layout/head');
        $this->load->view('PenilaiSoal/Layout/aside');
        $this->load->view('PenilaiSoal/vJawabanSoal', $data);
        $this->load->view('PenilaiSoal/Layout/footer');
    }
    public function add_nilai($id)
    {
        $jawaban = $this->mPenilaian->jawaban_siswa($id);
        $nilai = 1;
        $nilai1 = 1;
        $total = 0;
        $count = $this->mPenilaian->count_soal($id);
        foreach ($jawaban as $key => $value) {
            $total += $this->input->post('nilai' . $nilai1++);
            $data = array(
                'nilai_soal' => $this->input->post('nilai' . $nilai++)
            );
            $this->db->where('id_jwb', $value->id_jwb);
            $this->db->update('jwbn_soal_siswa', $data);
        }

        $hasil = round($total / $count->jml);


        $data_total = array(
            'tes_tulis' => $hasil
        );
        $this->db->where('id_siswa', $id);
        $this->db->update('data_siswa', $data_total);


        $this->session->set_flashdata('success', 'Penilaian Tes Tulis Berhasil Disimpan!');
        redirect('PenilaiSoal/cPenilaianSoal');
    }
}

/* End of file cPenilaianSoal.php */
