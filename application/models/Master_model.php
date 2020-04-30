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
    
	public function hapusdata($kode_jurusan){
		$this->db->where('kode_jurusan', $kode_jurusan);
		$this->db->delete('mst_jurusan');
	}

    public function kelas() {
		$q = $this->db->query("SELECT * FROM mst_kelas ORDER BY kode_kelas DESC");
		return $q;
    }
    
    public function kelas_edit($id) {
		$q = $this->db->query("SELECT * FROM mst_kelas WHERE kode_kelas = '$id'");
		return $q;
    }

    public function hapus_kelas($kode_kelas){
		$this->db->where('kode_kelas', $kode_kelas);
		$this->db->delete('mst_kelas');
	}
	
	public function ruangan() {
		$q = $this->db->query("SELECT * FROM mst_ruangan ORDER BY kode_ruangan DESC");
		return $q;
	}
	
	public function ruangan_edit($id) {
		$q = $this->db->query("SELECT * FROM mst_ruangan WHERE kode_ruangan = '$id'");
		return $q;
    }

    public function hapus_ruangan($kode_ruangan){
		$this->db->where('kode_ruangan', $kode_ruangan);
		$this->db->delete('mst_ruangan');
	}


}