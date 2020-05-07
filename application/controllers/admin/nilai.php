<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends CI_Controller {


	public function __construct(){
		parent::__construct();
			$this->load->Model('Nilai_model');
			$this->load->Model('Combo_model');
	}


	public function index() {
		redirect(base_url());
	}


	public function cetak_uts($kode_kelas = "")
	{
		$d['judul'] = "Data Siswa";
		if (!empty($kode_kelas)) {
			$d['nilai_uts'] = $this->Nilai_model->cetak_uts($kode_kelas);
			$d['kode_kelas'] = $kode_kelas;
		} else {
			$d['nilai_uts'] = "";
			$d['kode_kelas'] = "";
		}
		$d['combo_kelas'] = $this->Combo_model->combo_kelas($kode_kelas);
		$this->load->view('admin/top',$d);
		$this->load->view('admin/menu');
		$this->load->view('laporan_nilai/cetak_uts');
		$this->load->view('admin/bottom');	
	}

	public function tampil_siswa()
	{
		$kode_kelas = $this->input->post("kode_kelas");
		redirect("admin/nilai/cetak_uts/" . $kode_kelas);
	}

   
    
}