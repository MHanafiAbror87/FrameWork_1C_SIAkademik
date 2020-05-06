<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->Model('absensi_model');
		$this->load->Model('Combo_model');
	}


	public function index()
	{
		redirect(base_url());
	}

    public function akd_jadwal() {
		$d['judul'] = "Data Jadwal Pelajaran";
		$d['jadwal'] = $this->Master_model->akd_jadwal();
		$this->load->view('admin/top',$d);
		$this->load->view('admin/menu');
		$this->load->view('admin/data_absensi/rekap_absensi');
		$this->load->view('admin/bottom');	
    }
    
	public function rekap_absensi()
	{
		$d['judul'] = "Data Rekap Absensi";
		$d['rekap_absensi'] = $this->absensi_model->rekap_absensi();
		$this->load->view('admin/top', $d);
		$this->load->view('admin/menu');
		$this->load->view('admin/data_absensi/rekap_absensi');
		$this->load->view('admin/bottom');
	}

	
}
