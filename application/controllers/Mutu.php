<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mutu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mutu_Model');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/mutu');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('peningkatan1', '', 'trim|required');
        $this->form_validation->set_rules('peningkatan2', '', 'trim|required');
        $this->form_validation->set_rules('peningkatan3', '', 'trim|required');
        $this->form_validation->set_rules('peningkatan4', '', 'trim|required');
        $this->form_validation->set_rules('peningkatan5', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->Mutu_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->Mutu_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}
