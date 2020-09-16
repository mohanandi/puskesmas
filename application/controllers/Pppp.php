<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pppp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pppp_Model');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/pppp');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('pengawasan1', '', 'trim|required');
        $this->form_validation->set_rules('pengawasan2', '', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->Pppp_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->Pppp_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}
