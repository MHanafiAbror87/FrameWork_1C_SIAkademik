<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{


	public function guru()
	{
		$q = $this->db->query("SELECT * FROM pgn_guru");
		return $q;
	}


	public function guru_detail($nip)
	{
		$q = $this->db->query("SELECT * FROM pgn_guru WHERE nip = '$nip'");
		return $q;
	}

	public function guru_edit($kode_guru)
	{
		$q = $this->db->query("SELECT * FROM pgn_guru WHERE kode_guru = '$kode_guru'");
		return $q;
	}
	public function hapusdata($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->delete('pgn_guru');
	}
}
