<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akd_mapel extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->Model('Master_model');
			$this->load->Model('Combo_model');
	}

	public function index() {
		redirect(base_url());
	}


public function mapel() {
		$d['judul'] = "Data Mata Pelajaran";
		$d['mapel'] = $this->m_akd_mapel();
		$this->load->view('admin/top',$d);
		$this->load->view('admin/menu');
		$this->load->view('admin/mapel/v_akd_mapel');
		$this->load->view('admin/bottom');	
	}


	public function mapel_tambah() {
		$d['judul'] = "Data Mata Pelajaran";
		$d['judul2'] = "Tambah";
        $d['tipe'] = 'add';
        $d['kode_mapel'] = "";
        $d['id_kelompok_pelajaran'] = "";
        $d['kode_jurusan'] = "";
        $d['nama_mapel'] = "";
        $d['kkm'] = "";
		$d['aktif_mapel'] = "";
		$this->load->view('admin/top',$d);
		$this->load->view('admin/menu');
		$this->load->view('admin/mapel/v_tambah_akd_mapel');
		$this->load->view('admin/bottom');
		
	}


	public function mapel_edit($id_mapel) {
		$cek = $this->db->query("SELECT kode_mapel FROM akd_kmapel WHERE kode_mapel = '$kode_mapel'");
		if($cek->num_rows() > 0) { 
			$d['judul'] = "Data Kelompok Pelajaran";
			$d['judul2'] = "Ubah";
			$d['tipe'] = 'edit';
			$get = $this->m_akd_mapel->mapel_edit($id_mapel);
			$data = $get->row();
            $d['id_mapel'] = $data->id_mapel;
            $d['id_kelompok_pelajaran'] = $data->id_kelompok_pelajaran;
            $d['kode_jurusan'] = $data->kode_jurusan;
            $d['nama_mapel'] = $data->nama_mapel;
            $d['kkm'] = $data->kkm;
            $d['aktif_mapel'] = $data->aktif_mapel;
			$this->load->view('admin/top',$d);
			$this->load->view('admin/menu');
			$this->load->view('admin/mapel/v_akd_tambah_mapel');
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
		$this->m_akd_mapel->hapus_mapel($kode_mapel);
		$this->session->set_flashdata('flash','dihapus');
		redirect('admin/akd_mapel/mapel');
	}

	public function mapel_save() {
			$tipe = $this->input->post("tipe");	
			$in['kode_mapel'] = $this->input->post("kode_mapel");
			$in['id_kelompok_pelajaran'] = $this->input->post("id_kelompok_pelajaran");
			$in['kode_jurusan'] = $this->input->post("kode_jurusan");
			$in['nama_mapel'] = $this->input->post("nama_mapel");
			$in['kkm'] = $this->input->post("kkm");
			$in['aktif_mapel'] = $this->input->post("aktif_mapel");
			if($tipe == "add") {
				$cek = $this->db->query("SELECT nama_mapel FROM akd_mapel WHERE nama_mapel = '$in[nama_mapel]' AND kode_mapel != '$where[kode_mapel]'");
				if($cek->num_rows() > 0) { 
					$this->session->set_flashdata("error","Gagal Input. Nama Mata Pelajaran Sudah Digunakan");
					redirect("admin/akd_mapel/mapel_tambah");	
				} else { 	
					$this->db->insert("akd_mapel",$in);
					$this->session->set_flashdata("success","Tambah Data Mata Pelajaran Berhasil");
					redirect("admin/akd_mapel/kmapel");	
				}
			} elseif($tipe = 'edit') {
				$where['kode_mapel'] = $this->input->post('kode_mapel');
				$cek = $this->db->query("SELECT nama_mapel FROM akd_mapel WHERE nama_mapel = '$in[name_mapel]' AND kode_mapel != '$where[kode_mapel]'");
				if($cek->num_rows() > 0) { 
					$this->session->set_flashdata("error","Gagal Input. Nama Mata Pelajaran Sudah Digunakan");
					redirect("admin/akd_mapel/mapel/mapel_edit/".$this->input->post("kode_mapel"));
				} else {
					$this->db->update("akd_mapel",$in,$where);
					$this->session->set_flashdata("success","Ubah Data Mata Pelajaran Berhasil");
					redirect("admin/akd_mapel/mapel");	
				}
				
			} else {
				redirect(base_url());
			}
    }
}