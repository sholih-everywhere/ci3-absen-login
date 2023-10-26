<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    public function get_siswa()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('tbl_siswa1');
        $this->db->order_by('id_siswa', 'DESC');
        return $this->db->get();
    }

    public function simpan_siswa($data)
    {
        //insert data
        return $this->db->insert("tbl_siswa1", $data);
    }

    public function edit_siswa($id_siswa)
    {
        //edity data
        $query = $this->db->where("id_siswa", $id_siswa)->get("tbl_siswa1");
        return $query->row();
    }

    public function update_siswa($data, $id_siswa)
    {
        //update siswa
        return $this->db->update("tbl_siswa1", $data, $id_siswa);
    }

    public function hapus_siswa($id)
    {
        //hapus siswa
           return $this->db->delete("tbl_siswa1", $id);
    }

}