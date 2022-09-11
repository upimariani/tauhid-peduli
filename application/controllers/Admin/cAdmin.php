<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAdmin');
    }

    public function index()
    {
        $data = array(
            'admin' => $this->mAdmin->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/vAdmin', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {
        $data = array(
            'nama_admin' => $this->input->post('nama'),
            'alamat_admin' => $this->input->post('alamat'),
            'no_hp_admin' => $this->input->post('no_hp'),
            'username_admin' => $this->input->post('username'),
            'password_admin' => $this->input->post('password'),
            'level' => $this->input->post('level')
        );
        $this->mAdmin->insert($data);
        $this->session->set_flashdata('success', 'Data Admin Berhasil Ditambahkan!');
        redirect('Admin/cAdmin');
    }
    public function update($id)
    {
        $data = array(
            'nama_admin' => $this->input->post('nama'),
            'alamat_admin' => $this->input->post('alamat'),
            'no_hp_admin' => $this->input->post('no_hp'),
            'username_admin' => $this->input->post('username'),
            'password_admin' => $this->input->post('password'),
            'level' => $this->input->post('level')
        );
        $this->mAdmin->update($id, $data);
        $this->session->set_flashdata('success', 'Data Admin Berhasil Diperbaharui!');
        redirect('Admin/cAdmin');
    }
    public function delete($id)
    {
        $this->mAdmin->delete($id);
        $this->session->set_flashdata('success', 'Data Admin Berhasil Dihapus!');
        redirect('Admin/cAdmin');
    }
}

/* End of file cAdmin.php */
