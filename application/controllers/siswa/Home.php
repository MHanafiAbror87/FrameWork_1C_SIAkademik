<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $d['judul'] = "Dashboard";

        $this->load->view('siswa/top', $d);
        $this->load->view('siswa/menu_siswa');
        $this->load->view('siswa/home');
        $this->load->view('siswa/bottom');
    }
}
