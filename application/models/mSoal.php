<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSoal extends CI_Model
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('soal');
        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('soal', $data);
    }
    public function update($id, $data)
    {
        $this->db->where('id_soal', $id);
        $this->db->update('soal', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_soal', $id);
        $this->db->delete('soal');
    }
}

/* End of file mSoal.php */
