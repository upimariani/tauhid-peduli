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
    public function nilai_baca($id)
    {
        $data = array(
            'tes_baca' => $this->input->post('nilai_baca')
        );
        $this->mPenilaian->nilai($id, $data);
        $this->session->set_flashdata('success', 'Data Nilai Baca Al-Quran Berhasil Ditambahkan!');
        redirect('Admin/cPenilaian');
    }
    public function nilai_wawancara($id)
    {
        $data = array(
            'tes_wawancara' => $this->input->post('nilai_wawancara')
        );
        $this->mPenilaian->nilai($id, $data);
        $this->session->set_flashdata('success', 'Data Nilai Wawancara Berhasil Ditambahkan!');
        redirect('Admin/cPenilaian');
    }
    public function nilai_tes_tulis($id)
    {
        $data = array(
            'siswa_view' => $this->mPenilaian->siswa_view($id),
            'jawaban' => $this->mPenilaian->jawaban_siswa($id)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/vTesTulis', $data);
        $this->load->view('Admin/Layout/footer');
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
        redirect('Admin/cPenilaian');
    }
}

/* End of file cPenilaian.php */
