<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Pengguna_admin_model');
    }


    public function index()
    {
        redirect(base_url());
    }


    public function admin()
    {
        $d['judul'] = "Data Admin";
        $d['admin'] = $this->Pengguna_admin_model->admin();
        $this->load->view('admin/top', $d);
        $this->load->view('admin/menu');
        $this->load->view('admin/admin1/admin');
        $this->load->view('admin/bottom');
    }
}
