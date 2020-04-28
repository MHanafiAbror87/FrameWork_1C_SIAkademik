<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index() {
			$d['judul'] = "Dashboard";
			$this->load->view('admin/top',$d);
			$this->load->view('admin/menu');
			$this->load->view('admin/home');
			$this->load->view('admin/bottom');
	}

	

}
