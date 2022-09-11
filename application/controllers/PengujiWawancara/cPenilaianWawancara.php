<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenilaianWawancara extends CI_Controller
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
        $this->load->view('PengujiTesWawancara/Layout/head');
        $this->load->view('PengujiTesWawancara/Layout/aside');
        $this->load->view('PengujiTesWawancara/vPenilaianWawancara', $data);
        $this->load->view('PengujiTesWawancara/Layout/footer');
    }
    public function nilai_wawancara($id)
    {
        $data = array(
            'tes_wawancara' => $this->input->post('nilai_wawancara')
        );
        $this->mPenilaian->nilai($id, $data);
        $this->session->set_flashdata('success', 'Data Nilai Wawancara Berhasil Ditambahkan!');
        redirect('PengujiWawancara/cPenilaianWawancara');
    }
}

/* End of file cPenilaianWawancara.php */
