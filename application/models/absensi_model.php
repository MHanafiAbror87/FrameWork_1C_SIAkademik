<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class absensi_model extends CI_Model
{


    public function presensi_model($id_tahun_ajaran)
    {
        $nisn = $this->uri->segment(5);
        $q = $this->db->query("SELECT a.* , d.nama_mapel FROM  absensi_siswa a 
	JOIN pgn_siswa c ON a.kode_siswa=c.kode_siswa
    JOIN akd_jadwal_pelajaran b ON a.kode_jadwal_pelajaran=b.kode_jadwal_pelajaran 
    JOIN akd_mapel d ON d.kode_mapel=b.kode_mapel 
	  where c.nisn='$nisn'
		AND b.id_tahun_ajaran='$id_tahun_ajaran'");
        return $q;
    }

    public function total_pertemuan()
    {
        $kode_jadwal_pelajaran = $this->uri->segment(5);
        $q = $this->db->query("SELECT Count(*) FROM `absensi_siswa` where kode_jadwal_pelajaran='$kode_jadwal_pelajaran' GROUP BY tanggal");
        return $q;
    }

    public function hasil_rekap()
    {
        $q = $this->db->query("SELECT a.*, b.nisn,b.nama_siswa,b.jenis_kelamin, c.kode_kelas , c.nama_kelas , f.nama_mapel FROM absensi_siswa a JOIN pgn_siswa b ON a.kode_siswa=b.kode_siswa join mst_kelas c on b.kode_kelas=c.kode_kelas join akd_jadwal_pelajaran d on c.kode_kelas=d.kode_kelas join akd_mapel f on d.kode_mapel=f.kode_mapel ");
        return $q;
    }
    public function input_absen()
    {
        $q = $this->db->query("SELECT a.*, b.nisn,b.nama_siswa,b.jenis_kelamin, c.kode_kelas , c.nama_kelas , f.nama_mapel, g.nama_kehadiran FROM absensi_siswa a JOIN pgn_siswa b ON a.kode_siswa=b.kode_siswa join mst_kelas c on b.kode_kelas=c.kode_kelas join akd_jadwal_pelajaran d on c.kode_kelas=d.kode_kelas join akd_mapel f on d.kode_mapel=f.kode_mapel JOIN bobot_kehadiran g ON a.kode_bobot=g.kode_bobot ");
        return $q;
    }

    public function jadwal()
    {
        $q = $this->db->query("SELECT * FROM akd_jadwal_pelajaran ORDER BY kode_jadwal_pelajaran DESC");
        return $q;
    }
    public function bobot()
    {
        $q = $this->db->query("SELECT * FROM bobot_kehadiran ");
        return $q;
    }
}
