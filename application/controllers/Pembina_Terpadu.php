<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembina_Terpadu extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/form_table/head');
        $this->load->view('puskesmas/pembina_terpadu');
        $this->load->view('templates/form_table/foot');
    }
}
