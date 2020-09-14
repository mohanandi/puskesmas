<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identitas_Puskesmas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/identitas_puskesmas');
        $this->load->view('templates/puskesmas/foot');
    }

    public function tambah()
    {
        var_dump($this->input->post());
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('bangunan', 'Bangunan', 'required|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    }
}
