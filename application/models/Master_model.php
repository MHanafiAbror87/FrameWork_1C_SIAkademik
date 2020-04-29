<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model {


	public function jurusan() {
		$q = $this->db->query("SELECT * FROM mst_jurusan ORDER BY kode_jurusan DESC");
		return $q;
	}

    public function jurusan_detail($id)
	{
		$q = $this->db->query("SELECT * FROM mst_jurusan WHERE kode_jurusan = '$id'");
		return $q;
    }
    
	public function jurusan_edit($id) {
		$q = $this->db->query("SELECT * FROM mst_jurusan WHERE kode_jurusan = '$id'");
		return $q;
    }
    
    public function jurusan_hapus($id) {
		$q = $this->db->query("DELETE mst_jurusan WHERE kode_jurusan = '$id'");
		return $q;
    }

    public function kelas() {
		$q = $this->db->query("SELECT * FROM mst_kelas ORDER BY kode_kelas DESC");
		return $q;
    }
    
    public function kelas_edit($id) {
		$q = $this->db->query("SELECT * FROM mst_kelas WHERE kode_kelas = '$id'");
		return $q;
    }

    public function kelas_hapus($id) {
		$q = $this->db->query("DELETE mst_kelas WHERE kode_kelas = '$id'");
		return $q;
    }


}