<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perencanaan_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PerencanaanPuskesmas_Model');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/perencanaan_puskesmas');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('organisasi1', '', 'required');
        $this->form_validation->set_rules('organisasi2', '', 'required');
        $this->form_validation->set_rules('organisasi3', '', 'required');
        $this->form_validation->set_rules('organisasi4', '', 'required');
        $this->form_validation->set_rules('organisasi5', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PerencanaanPuskesmas_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->PerencanaanPuskesmas_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}