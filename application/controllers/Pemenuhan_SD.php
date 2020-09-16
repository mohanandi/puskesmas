<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemenuhan_SD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PemenuhanSD_Model');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/pemenuhan_sd');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {

        $this->form_validation->set_rules('pemenuhan1', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan2', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan3', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan4', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan5', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan6', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan7', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan8', '', 'trim|required');



        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PemenuhanSD_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->PemenuhanSD_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}
