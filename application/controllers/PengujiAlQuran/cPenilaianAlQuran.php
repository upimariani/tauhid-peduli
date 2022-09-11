<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenilaianAlQuran extends CI_Controller
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
        $this->load->view('PengujiTesAlQuran/Layout/head');
        $this->load->view('PengujiTesAlQuran/Layout/aside');
        $this->load->view('PengujiTesAlQuran/vPenilaiantesAlQuran', $data);
        $this->load->view('PengujiTesAlQuran/Layout/footer');
    }
    public function nilai_baca($id)
    {
        $data = array(
            'tes_baca' => $this->input->post('nilai_baca')
        );
        $this->mPenilaian->nilai($id, $data);
        $this->session->set_flashdata('success', 'Data Nilai Baca Al-Quran Berhasil Ditambahkan!');
        redirect('PengujiAlQuran/cPenilaianAlQuran');
    }
}

/* End of file cPenilaianAlQuran.php */
