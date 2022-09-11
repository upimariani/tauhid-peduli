<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDaftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mSiswa');
    }

    public function index()
    {
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('ortu', 'Nama Orang Tua', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'siswa' => $this->mSiswa->select_siswa()
            );
            $this->load->view('Siswa/Layout/head');
            $this->load->view('Siswa/Layout/aside');
            $this->load->view('Siswa/vPendaftaran', $data);
            $this->load->view('Siswa/Layout/footer');
        } else {
            $config['upload_path']          = './asset/file';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 5000;

            $this->load->library('upload', $config);

            if (!empty($this->upload->do_upload('file'))) {

                $upload_data = $this->upload->data();
                $data = array(
                    'id_siswa' => $this->session->userdata('id'),
                    'nisn' => $this->input->post('nisn'),
                    'asal_sklh' => $this->input->post('asal_sekolah'),
                    'tempat_lahir' => $this->input->post('tempat') . ',',
                    'tanggal_lahir' => $this->input->post('tgl'),
                    'nama_ortu' => $this->input->post('ortu'),
                    'pekerjaan_ortu' => $this->input->post('pekerjaan'),
                    'file' => $upload_data['file_name']
                );
                $this->mSiswa->daftar($data);
                $this->session->set_flashdata('success', 'Data Berhasil Didaftarkan!');
                redirect('Siswa/cDaftar');
            }
        }
    }
    public function update($id)
    {
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('ortu', 'Nama Orang Tua', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'siswa' => $this->mSiswa->select_siswa()
            );
            $this->load->view('Siswa/Layout/head');
            $this->load->view('Siswa/Layout/aside');
            $this->load->view('Siswa/vPendaftaran', $data);
            $this->load->view('Siswa/Layout/footer');
        } else {
            $data = array(
                'nisn' => $this->input->post('nisn'),
                'asal_sklh' => $this->input->post('asal_sekolah'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tgl'),
                'nama_ortu' => $this->input->post('ortu')
            );
            $this->mSiswa->update($id, $data);
            $this->session->set_flashdata('success', 'Data Berhasil Dperbaharui!');
            redirect('Siswa/cDaftar');
        }
    }
}

/* End of file cDaftar.php */
