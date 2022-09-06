<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAuth extends CI_Model
{
    public function auth_siswa($username, $password)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where(array(
            'username_siswa' => $username,
            'password_siswa' => $password
        ));
        return $this->db->get()->row();
    }
    public function register($data)
    {
        $this->db->insert('siswa', $data);
    }


    public function auth_admin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array(
            'username_admin' => $username,
            'password_admin' => $password
        ));
        return $this->db->get()->row();
    }
}

/* End of file mAuth.php */
