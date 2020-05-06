<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nilai_model extends CI_Model {


	public function cetak_uts($kode_kelas) {
		$q = $this->db->query("SELECT * FROM pgn_siswa c join pgn_siswa a on c.kode_siswa = a.kode_siswa join mst_kelas b on c.kode_kelas = b.kode_kelas  where b.kode_kelas = $kode_kelas ORDER BY c.nama_siswa ASC");
		return $q;
	}
	
}