<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna_admin_model extends CI_Model
{


    public function admin()
    {
        $q = $this->db->query("SELECT * FROM pgn_admin");
        return $q;
    }
    public function admin_detail($nama)
    {
        $q = $this->db->query("SELECT * FROM pgn_admin WHERE nama = '$nama'");
        return $q;
    }

    public function admin_edit($id)
    {
        $q = $this->db->query("SELECT * FROM pgn_admin WHERE id = '$id'");
        return $q;
    }
}
