<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Master_model');
		$this->load->Model('Combo_model');
	}

	public function index()
	{
		redirect(base_url());
	}


	public function kelompok_pelajaran()
	{
		$d['judul'] = "Data Kelompok Pelajaran";
		$d['kelompok_pelajaran'] = $this->Master_model->kelompok_pelajaran();
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/kelompok_pelajaran/kelompok_pelajaran');
		$this->load->view('admin/bottom');
	}


	public function kelompok_pelajaran_tambah()
	{
		$d['judul'] = "Data Kelompok Pelajaran";
		$d['judul2'] = "Tambah";
		$d['tipe'] = 'add';
		$d['id_kelompok_pelajaran'] = "";
		$d['jenis_kelompok_pelajaran'] = "";
		$d['nama_kelompok_pelajaran'] = "";
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/kelompok_pelajaran/kelompok_pelajaran_tambah');
		$this->load->view('admin/bottom');
	}


	public function kelompok_pelajaran_edit($id_kelompok_pelajaran)
	{
		$cek = $this->db->query("SELECT id_kelompok_pelajaran FROM akd_kelompok_pelajaran WHERE id_kelompok_pelajaran = '$id_kelompok_pelajaran'");
		if ($cek->num_rows() > 0) {
			$d['judul'] = "Data Kelompok Pelajaran";
			$d['judul2'] = "Ubah";
			$d['tipe'] = 'edit';
			$get = $this->Master_model->kelompok_pelajaran_edit($id_kelompok_pelajaran);
			$data = $get->row();
			$d['id_kelompok_pelajaran'] = $data->id_kelompok_pelajaran;
			$d['jenis_kelompok_pelajaran'] = $data->jenis_kelompok_pelajaran;
			$d['nama_kelompok_pelajaran'] = $data->nama_kelompok_pelajaran;
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('admin/kelompok_pelajaran/kelompok_pelajaran_tambah');
			$this->load->view('admin/bottom');
		} else {
			$this->load->view('admin/top');
			$this->load->view('admin/menu');
			$this->load->view('404');
			$this->load->view('admin/bottom');
		}
	}

	public function hapus($id_kelompok_pelajaran)
	{
		$this->Master_model->hapus_kelompok($id_kelompok_pelajaran);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('admin/Akademik/kelompok_pelajaran');
	}

	public function kelompok_pelajaran_save()
	{
		$tipe = $this->input->post("tipe");
		$in['id_kelompok_pelajaran'] = $this->input->post("id_kelompok_pelajaran");
		$in['jenis_kelompok_pelajaran'] = $this->input->post("jenis_kelompok_pelajaran");
		$in['nama_kelompok_pelajaran'] = $this->input->post("nama_kelompok_pelajaran");

		if ($tipe == "add") {
			$cek = $this->db->query("SELECT nama_kelompok_pelajaran FROM akd_kelompok_pelajaran WHERE nama_kelompok_pelajaran = '$in[nama_kelompok_pelajaran]' AND id_kelompok_pelajaran != '$where[id_kelompok_pelajaran]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input. Nama Kelompok Pelajaran Sudah Digunakan");
				redirect("admin/Akademik/kelompok_pelajaran_tambah");
			} else {
				$this->db->insert("akd_kelompok_pelajaran", $in);
				$this->session->set_flashdata("success", "Tambah Data Kelompok Pelajaran Berhasil");
				redirect("admin/Akademik/kelompok_pelajaran");
			}
		} elseif ($tipe = 'edit') {
			$where['id_kelompok_pelajaran'] = $this->input->post('id_kelompok_pelajaran');
			$cek = $this->db->query("SELECT nama_kelompok_pelajaran FROM akd_kelompok_pelajaran WHERE nama_kelompok_pelajaran = '$in[nama_kelompok_pelajaran]' AND id_kelompok_pelajaran != '$where[id_kelompok_pelajaran]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input. Nama Kelompok Pelajaran Sudah Digunakan");
				redirect("admin/Akademik/kelompok_pelajaran/kelompok_pelajaran_edit/" . $this->input->post("id_kelompok_pelajaran"));
			} else {
				$this->db->update("akd_kelompok_pelajaran", $in, $where);
				$this->session->set_flashdata("success", "Ubah Data Kelompok Pelajaran Berhasil");
				redirect("admin/Akademik/kelompok_pelajaran");
			}
		} else {
			redirect(base_url());
		}
	}
	public function akd_mapel()
	{
		$d['judul'] = "Data Mata Pelajaran";
		$d['akd_mapel'] = $this->Master_model->akd_mapel();
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/mapel/v_akd_mapel');
		$this->load->view('admin/bottom');
	}
	public function akd_mapel_tambah()
	{
		$d['judul'] = "Data Mata Pelajaran";
		$d['judul2'] = "Tambah";
		$d['tipe'] = 'add';
		$d['kode_mapel'] = "";
		$d['id_kelompok_pelajaran'] = "";
		$d['kode_jurusan'] = "";
		$d['nama_mapel'] = "";
		$d['kkm'] = "";
		$d['aktif_mapel'] = "";
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/mapel/v_tambah_akd_mapel');
		$this->load->view('admin/bottom');
	}
	public function akd_mapel_edit($kode_mapel)
	{
		$cek = $this->db->query("SELECT kode_mapel FROM akd_mapel WHERE kode_mapel = '$kode_mapel'");
		if ($cek->num_rows() > 0) {
			$d['judul'] = "Data Mata Pelajaran";
			$d['judul2'] = "Ubah";
			$d['tipe'] = 'edit';
			$get = $this->Master_model->akd_mapel_edit($kode_mapel);
			$data = $get->row();
			$d['kode_mapel'] = $data->kode_mapel;
			$d['id_kelompok_pelajaran'] = $data->id_kelompok_pelajaran;
			$d['kode_jurusan'] = $data->kode_jurusan;
			$d['nama_mapel'] = $data->nama_mapel;
			$d['kkm'] = $data->kkm;
			$d['aktif_mapel'] = $data->aktif_mapel;
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('admin/mapel/v_tambah_akd_mapel');
			$this->load->view('admin/bottom');
		} else {
			$this->load->view('admin/top');
			$this->load->view('admin/menu');
			$this->load->view('404');
			$this->load->view('admin/bottom');
		}
	}
	public function akd_mapel_hapus($kode_mapel)
	{
		$this->Master_model->akd_mapel_hapus($kode_mapel);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('admin/Akademik/akd_mapel');
	}
	public function akd_mapel_save()
	{
		$tipe = $this->input->post("tipe");
		$in['kode_mapel'] = $this->input->post("kode_mapel");
		$in['id_kelompok_pelajaran'] = $this->input->post("id_kelompok_pelajaran");
		$in['kode_jurusan'] = $this->input->post("kode_jurusan");
		$in['nama_mapel'] = $this->input->post("nama_mapel");
		$in['kkm'] = $this->input->post("kkm");
		$in['aktif_mapel'] = $this->input->post("aktif_mapel");
		if ($tipe == "add") {
			$cek = $this->db->query("SELECT nama_mapel FROM akd_mapel WHERE nama_mapel = '$in[nama_mapel]' AND kode_mapel != '$where[kode_mapel]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input. Nama Mata Pelajaran Sudah Digunakan");
				redirect("admin/Akademik/akd_mapel_tambah");
			} else {
				$this->db->insert("akd_mapel", $in);
				$this->session->set_flashdata("success", "Tambah Data Mata Pelajaran Berhasil");
				redirect("admin/Akademik/akd_mapel");
			}
		} elseif ($tipe = 'edit') {
			$where['kode_mapel'] = $this->input->post('kode_mapel');
			$cek = $this->db->query("SELECT nama_mapel FROM akd_mapel WHERE nama_mapel = '$in[nama_mapel]' AND kode_mapel != '$where[kode_mapel]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input. Nama Mata Pelajaran Sudah Digunakan");
				redirect("admin/Akademik/akd_mapel_edit/" . $this->input->post("kode_mapel"));
			} else {
				$this->db->update("akd_mapel", $in, $where);
				$this->session->set_flashdata("success", "Ubah Data Mata Pelajaran Berhasil");
				redirect("admin/Akademik/akd_mapel");
			}
		} else {
			redirect(base_url());
		}
	}
	public function akd_jadwal()
	{
		$d['judul'] = "Data Jadwal Pelajaran";
		$d['akd_jadwal'] = $this->Master_model->akd_jadwal();
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/jadwal/v_jadwal');
		$this->load->view('admin/bottom');
	}
	public function akd_jadwal_tambah()
	{
		$d['judul'] = "Data Jadwal Pelajaran";
		$d['judul2'] = "Tambah";
		$d['tipe'] = 'add';
		$d['kode_jadwal_pelajaran'] = "";
		$d['kode_guru'] = "";
		$d['kode_mapel'] = "";
		$d['kode_kelas'] = "";
		$d['id_tahun_ajaran'] = "";
		$d['kode_jurusan'] = "";
		$d['kode_ruangan'] = "";
		$d['jam_mulai'] = "";
		$d['jam_selesai'] = "";
		$d['hari'] = "";
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/jadwal/v_tambah_jadwal');
		$this->load->view('admin/bottom');
	}

	public function akd_jadwal_edit($kode_jadwal_pelajaran)
	{
		$cek = $this->db->query("SELECT kode_jadwal_pelajaran FROM akd_jadwal_pelajaran WHERE kode_jadwal_pelajaran = '$kode_jadwal_pelajaran'");
		if ($cek->num_rows() > 0) {
			$d['judul'] = "Data Kelompok Pelajaran";
			$d['judul2'] = "Ubah";
			$d['tipe'] = 'edit';
			$get = $this->Master_model->akd_jadwal_edit($kode_jadwal_pelajaran);
			$data = $get->row();
			$d['kode_jadwal_pelajaran'] = $data->kode_jadwal_pelajaran;
			$d['kode_guru'] = $data->kode_guru;
			$d['kode_mapel'] = $data->kode_mapel;
			$d['kode_kelas'] = $data->kode_kelas;
			$d['id_tahun_ajaran'] = $data->id_tahun_ajaran;
			$d['kode_jurusan'] = $data->kode_jurusan;
			$d['kode_ruangan'] = $data->kode_ruangan;
			$d['jam_mulai'] = $data->jam_mulai;
			$d['jam_selesai'] = $data->jam_selesai;
			$d['hari'] = $data->hari;
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('admin/jadwal/v_tambah_jadwal');
			$this->load->view('admin/bottom');
		} else {
			$this->load->view('admin/top');
			$this->load->view('admin/menu');
			$this->load->view('404');
			$this->load->view('admin/bottom');
		}
	}
	public function akd_jadwal_hapus($kode_jadwal_pelajaran)
	{
		$this->Master_model->akd_jadwal_hapus($kode_jadwal_pelajaran);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('admin/Akademik/akd_jadwal');
	}

	public function akd_jadwal_detail($kode_jadwal_pelajaran)
	{
		$d['judul'] = "Data Jadwal Pelajaran";
		$d['judul2'] = "Detail";
		$get = $this->Master_model->akd_jadwal_detail($kode_jadwal_pelajaran);
		if ($get->num_rows() == 0) {
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('404');
			$this->load->view('admin/bottom');
		} else {
			$data = $get->row();
			$d['kode_jadwal_pelajaran'] = $data->kode_jadwal_pelajaran;
			$d['kode_guru'] = $data->kode_guru;
			$d['kode_mapel'] = $data->kode_mapel;
			$d['kode_kelas'] = $data->kode_kelas;
			$d['id_tahun_ajaran'] = $data->id_tahun_ajaran;
			$d['kode_jurusan'] = $data->kode_jurusan;
			$d['kode_ruangan'] = $data->kode_ruangan;
			$d['jam_mulai'] = $data->jam_mulai;
			$d['jam_selesai'] = $data->jam_selesai;
			$d['hari'] = $data->hari;
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('admin/jadwal/v_detail_jadwal');
			$this->load->view('admin/bottom');
		}
	}
	public function akd_jadwal_save()
	{
		$tipe = $this->input->post("tipe");
		$in['kode_jadwal_pelajaran'] = $this->input->post("kode_jadwal_pelajaran");
		$in['kode_guru'] = $this->input->post("kode_guru");
		$in['kode_mapel'] = $this->input->post("kode_mapel");
		$in['kode_kelas'] = $this->input->post("kode_kelas");
		$in['id_tahun_ajaran'] = $this->input->post("id_tahun_ajaran");
		$in['kode_jurusan'] = $this->input->post("kode_jurusan");
		$in['kode_ruangan'] = $this->input->post("kode_ruangan");
		$in['jam_mulai'] = $this->input->post("jam_mulai");
		$in['jam_selesai'] = $this->input->post("jam_selesai");
		$in['hari'] = $this->input->post("hari");
		if ($tipe == "add") {
			$cek = $this->db->query("SELECT * FROM akd_jadwal_pelajaran WHERE hari = '$in[hari]' AND jam_mulai != '$where[jam_mulai]' AND kode_guru != '$where[kode_guru]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input. Jadwal Pelajaran Sudah Digunakan");
				redirect("admin/Akademik/akd_mjadwal_tambah");
			} else {
				$this->db->insert("akd_jadwal_pelajaran", $in);
				$this->session->set_flashdata("success", "Tambah Data Jadwal Pelajaran Berhasil");
				redirect("admin/Akademik/akd_jadwal");
			}
		} elseif ($tipe = 'edit') {
			$where['kode_jadwal_pelajaran'] = $this->input->post('kode_jadwal_pelajaran');
			$cek = $this->db->query("SELECT * FROM akd_jadwal_pelajaran WHERE hari = '$in[hari]' AND jam_mulai != '$where[jam_mulai]' AND kode_guru != '$where[kode_guru]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Update. Jam Pelajaran Sudah Digunakan");
				redirect("admin/Akademik/akd_mjadwal_tambah");
			} else {
				$this->db->update("akd_jadwal_pelajaran", $in);
				$this->session->set_flashdata("success", "Update Data Jadwal Pelajaran Berhasil");
				redirect("admin/Akademik/akd_jadwal");
			}
		} else {
			redirect(base_url());
		}
	}
}
