<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upaya_Inovasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/upaya_inovasi');
        $this->load->view('templates/kab_kota/foot');
    }
}
