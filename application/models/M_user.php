<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_model {

    
    public function simpan_register($data) {

        return $this->db->insert("tbl_users", $data);

    }

    
    function cek_login($username, $password)
    {
        $this->db->select("*");
        $this->db->from("tbl_users");
        $this->db->where("username", $username);
        $query = $this->db->get();
        $user = $query->row();
        
        if (!empty($user)) {
            if (password_verify($password, $user->password)) {
                return $query->result();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}