<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengendalian_Infeksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengendalianInfeksi_Model');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/pengendalian_infeksi');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('pencegahan1a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan2a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan3a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan4a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan5a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan6a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan7a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan8a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan9a', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan1b', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan2b', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan3b', '', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PengendalianInfeksi_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->PengendalianInfeksi_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}
