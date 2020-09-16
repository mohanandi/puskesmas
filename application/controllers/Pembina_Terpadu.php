<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembina_Terpadu extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'PEMBINAAN TERPADU';
        $this->load->view('templates/puskesmas/head', $data);
        $this->load->view('puskesmas/pembina_terpadu');
        $this->load->view('templates/puskesmas/foot');
    }
}
