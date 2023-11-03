<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    public function get_siswa()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }

    public function simpan_siswa($data)
    {
        //insert data
        return $this->db->insert("absen", $data);
    }

    public function edit_siswa($id_siswa)
    {
        //edity data
        $query = $this->db->where("id", $id_siswa)->get("absen");
        return $query->row();
    }

    public function update_siswa($data, $id_siswa)
    {
        //update siswa
        return $this->db->update("absen", $data, $id_siswa);
    }

    public function hapus_kendaraan($id)
    {
           return $this->db->delete("absen", $id);
    }

    public function jamkeluar($data, $id)
    {
        //update siswa
        return $this->db->update("absen", $data, $id);
    }

}

?>