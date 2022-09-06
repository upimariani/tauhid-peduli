<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSoal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mSoal');
    }


    public function index()
    {
        $data = array(
            'soal' => $this->mSoal->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/vSoal', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {
        $data = array(
            'nama_soal' => $this->input->post('nama'),
            'pertanyaan_soal' => $this->input->post('soal')
        );
        $this->mSoal->insert($data);
        $this->session->set_flashdata('success', 'Data Soal Berhasil Ditambahkan!');
        redirect('Admin/cSoal');
    }
    public function update($id)
    {
        $data = array(
            'nama_soal' => $this->input->post('nama'),
            'pertanyaan_soal' => $this->input->post('soal')
        );
        $this->mSoal->update($id, $data);
        $this->session->set_flashdata('success', 'Data Soal Berhasil Diperbaharui!');
        redirect('Admin/cSoal');
    }
    public function delete($id)
    {
        $this->mSoal->delete($id);
        $this->session->set_flashdata('success', 'Data Soal Berhasil Dihapus!');
        redirect('Admin/cSoal');
    }
}

/* End of file cSoal.php */
