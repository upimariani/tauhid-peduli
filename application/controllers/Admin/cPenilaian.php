<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenilaian extends CI_Controller
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
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/vPenilaian', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function nilai_raport($id)
    {
        $this->form_validation->set_rules('ing', 'Bahasa Inggris', 'required');
        $this->form_validation->set_rules('mtk', 'Matematika', 'required');
        $this->form_validation->set_rules('indo', 'Bahasa Indonesia', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'siswa_raport' => $this->mPenilaian->siswa_nilai_raport($id)
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/aside');
            $this->load->view('Admin/vNilaiRaport', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            $data = array(
                'nilai_ing' => $this->input->post('ing'),
                'nilai_mtk' => $this->input->post('mtk'),
                'nilai_indo' => $this->input->post('indo')
            );
            $this->mPenilaian->nilai($id, $data);
            $this->session->set_flashdata('success', 'Data Raport Berhasil Ditambahkan!');
            redirect('Admin/cPenilaian');
        }
    }
}

/* End of file cPenilaian.php */
