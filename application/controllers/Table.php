<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('table');
        $this->load->view('templates/kab_kota/foot');
    }
}
