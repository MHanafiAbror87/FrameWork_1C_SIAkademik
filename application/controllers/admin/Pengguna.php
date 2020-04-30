<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Pengguna_model');
		$this->load->Model('Combo_model');
	}


	public function index()
	{
		redirect(base_url());
	}


	public function guru()
	{
		$d['judul'] = "Data Guru";
		$d['guru'] = $this->Pengguna_model->guru();
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/guru/guru');
		$this->load->view('admin/bottom');
	}

	public function guru_detail($nip)
	{
		$d['judul'] = "Data Guru";
		$d['judul2'] = "Detail";
		$get = $this->Pengguna_model->guru_detail($nip);
		if ($get->num_rows() == 0) {
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('404');
			$this->load->view('admin/bottom');
		} else {
			$data = $get->row();
			$d['nip'] = $data->nip;
			$d['nuptk'] = $data->nuptk;
			$d['nik'] = $data->nik;
			$d['nama_guru'] = $data->nama_guru;
			$d['password'] = $data->password;
			$d['jenis_kelamin'] = $data->jenis_kelamin;
			$d['tanggal_lahir'] = date("d-m-Y", strtotime($data->tanggal_lahir));
			$d['tempat_lahir'] = $data->tempat_lahir;
			$d['alamat_jalan'] = $data->alamat_jalan;
			$d['kelurahan'] = $data->kelurahan;
			$d['kecamatan'] = $data->kecamatan;
			$d['hp'] = $data->hp;
			$d['telepon'] = $data->telepon;
			$d['email'] = $data->email;
			$d['agama'] = $data->agama;
			$d['kewarganegaraan'] = $data->kewarganegaraan;
			$d['foto'] = $data->foto;
			$d['kode_guru'] = $data->kode_guru;
			$d['aktif_guru'] = $data->aktif_guru;
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('admin/guru/guru_detail');
			$this->load->view('admin/bottom');
		}
	}

	public function guru_tambah()
	{
		$d['judul'] = "Data Guru";
		$d['judul2'] = "Tambah";
		$d['tipe'] = 'add';
		$d['nip'] = "";
		$d['nuptk'] = "";
		$d['nik'] = "";
		$d['nama_guru'] = "";
		$d['password'] = "";
		$d['jenis_kelamin'] = "";
		$d['tanggal_lahir'] = "";
		$d['tempat_lahir'] = "";
		$d['alamat_jalan'] = "";
		$d['kelurahan'] = "";
		$d['kecamatan'] = "";
		$d['hp'] = "";
		$d['telepon'] = "";
		$d['email'] = "";
		$d['agama'] = "";
		$d['kewarganegaraan'] = "";
		$d['foto'] = "";
		$d['kode_guru'] = "";
		$d['aktif_guru'] = "";
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/guru/guru_tambah');
		$this->load->view('admin/bottom');
	}


	public function guru_edit($kode_guru)
	{
		$cek = $this->db->query("SELECT kode_guru FROM pgn_guru WHERE kode_guru = '$kode_guru'");
		if ($cek->num_rows() > 0) {
			$d['judul'] = "Data Guru";
			$d['judul2'] = "Ubah";
			$d['tipe'] = 'edit';
			$get = $this->Pengguna_model->guru_edit($kode_guru);
			$data = $get->row();
			$d['nip'] = $data->nip;
			$d['nuptk'] = $data->nuptk;
			$d['nik'] = $data->nik;
			$d['nama_guru'] = $data->nama_guru;
			$d['password'] = $data->password;
			$d['jenis_kelamin'] = $data->jenis_kelamin;
			if (!empty($data->tanggal_lahir) && $data->tanggal_lahir != '0000-00-00') {
				$d['tanggal_lahir'] = date("d-m-Y", strtotime($data->tanggal_lahir));
			} else {
				$d['tanggal_lahir'] = '';
			}
			$d['tempat_lahir'] = $data->tempat_lahir;
			$d['alamat_jalan'] = $data->alamat_jalan;
			$d['kelurahan'] = $data->kelurahan;
			$d['kecamatan'] = $data->kecamatan;
			$d['hp'] = $data->hp;
			$d['telepon'] = $data->telepon;
			$d['email'] = $data->email;
			$d['agama'] = $data->agama;
			$d['kewarganegaraan'] = $data->kewarganegaraan;
			$d['foto'] = $data->foto;
			$d['kode_guru'] = $data->kode_guru;
			$d['aktif_guru'] = $data->aktif_guru;
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('admin/guru/guru_tambah');
			$this->load->view('admin/bottom');
		} else {
			$this->load->view('admin/top', $d);
			$this->load->view('admin/menu');
			$this->load->view('404');
			$this->load->view('admin/bottom');
		}
	}

	public function guru_save()
	{
		$tipe = $this->input->post("tipe");
		$in['nip'] = $this->input->post("nip");
		$in['nuptk'] = $this->input->post("nuptk");
		$in['nik'] = $this->input->post("nik");
		$in['nama_guru'] = $this->input->post("nama_guru");
		$in['password'] = $this->input->post("password");
		$in['jenis_kelamin'] = $this->input->post("jenis_kelamin");
		$in['tanggal_lahir'] = date("Y-m-d", strtotime($this->input->post("tanggal_lahir")));
		$in['tempat_lahir'] = $this->input->post("tempat_lahir");
		$in['alamat_jalan'] = $this->input->post("alamat_jalan");
		$in['kelurahan'] = $this->input->post("kelurahan");
		$in['kecamatan'] = $this->input->post("kecamatan");
		$in['hp'] = $this->input->post("hp");
		$in['telepon'] = $this->input->post("telepon");
		$in['email'] = $this->input->post("email");
		$in['agama'] = $this->input->post("agama");
		$in['kewarganegaraan'] = $this->input->post("kewarganegaraan");
		$in['password'] = $this->input->post("nip");
		$in['kode_guru'] = $this->input->post("kode_guru");


		$config['upload_path'] = './upload/guru';
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name']	= TRUE;
		$config['remove_spaces']	= TRUE;
		$config['max_size']     = '0';
		$config['max_width']  	= '0';
		$config['max_height']  	= '0';

		$this->load->library('upload', $config);


		if ($tipe == "add") {
			$cek = $this->db->query("SELECT nip FROM pgn_guru WHERE nip = '$in[nip]'");

			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input. NIPTK Sudah Digunakan");
				redirect("admin/pengguna/guru_tambah/");
			} else {
				$this->db->insert("pgn_guru", $in);
				$this->session->set_flashdata("success", "Tambah Data Guru Berhasil");
				redirect("admin/pengguna/guru");
			}
		} elseif ($tipe = 'edit') {
			$where['kode_guru'] 	= $this->input->post('kode_guru');
			$cek = $this->db->query("SELECT kode_guru FROM pgn_guru WHERE kode_guru = '$in[kode_guru]' AND kode_guru != '$where[kode_guru]'");
			if ($cek->num_rows() > 0) {
				$this->session->set_flashdata("error", "Gagal Input.  Kode Guru Sudah Digunakan");
				redirect("admin/pengguna/guru_edit/" . $this->input->post("kode_guru"));
			} else {
				$in['aktif_guru'] = $this->input->post("aktif_guru");
				$this->db->update("pgn_guru", $in, $where);
				$this->session->set_flashdata("success", "Ubah Data Guru Berhasil");
				redirect("admin/pengguna/guru");
			}
		} else {
			redirect(base_url());
		}
	}

	public function guru_import()
	{
		$unggah['upload_path']   = './upload/';
		$unggah['allowed_types'] = 'xlsx';
		$unggah['file_name']     = 'guru_import';
		$unggah['overwrite']     = true;
		$unggah['max_size']      = 5120;

		$this->load->library('upload');

		$this->upload->initialize($unggah);
		if ($this->upload->do_upload('file_import')) {
			$file_excel = new unggahexcel('upload/guru_import.xlsx', null);

			if (count($file_excel->Sheets()) == 1) {
				$baris = 1;

				foreach ($file_excel as $kolom) {
					if ($baris >= 2) {
						$cek = $this->db->query("SELECT nip FROM pgn_guru WHERE nip = '$kolom[0]'");
						if ($cek->num_rows() == 0) {
							$in['nip'] = $kolom[0];
							$in['nama_guru'] = $kolom[1];
							$in['jenis_kelamin'] = $kolom[2];
							$in['id_jabatan'] = $kolom[3];
							$in['password'] = $kolom[0];
							$this->db->insert("pgn_guru", $in);
						}
					}
					$baris++;
				}

				$this->session->set_flashdata("success", "Berhasil Import Data Guru");
			} else {
				$this->session->set_flashdata("error", "Gagal Import Data");
			}
			unlink('./upload/guru_import.xlsx');
			redirect("pengguna/guru");
		} else {
			redirect(base_url());
		}
	}
	public function hapus($nip)
	{
		$this->Pengguna_model->hapusdata($nip);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('admin/pengguna/guru');
	}
}
