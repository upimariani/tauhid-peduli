<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAuthAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAuth');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Admin/vlogin');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login = $this->mAuth->auth_admin($username, $password);
            if ($login) {
                $username = $login->username;
                $id = $login->id_admin;


                $array = array(
                    'id' => $id
                );

                $this->session->set_userdata($array);
                if ($login->level == '1') {
                    redirect('Admin/cDashboard');
                } else if ($login->level == '2') {
                    redirect('PengujiAlQuran/cDashboard');
                } else {
                    redirect('PengujiWawancara/cDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah!!!');
                redirect('Admin/cAuthAdmin');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
        redirect('Admin/cAuthAdmin');
    }
}

/* End of file cAuthSiswa.php */
