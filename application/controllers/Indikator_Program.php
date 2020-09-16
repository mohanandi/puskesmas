<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indikator_Program extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('IndikatorProgram_Model');
        is_logged_in();
    }
    public function index()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/indikator_program');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('cakupan1a', '', 'trim|required');
        $this->form_validation->set_rules('cakupan2a', '', 'trim|required');
        $this->form_validation->set_rules('cakupan3a', '', 'trim|required');
        $this->form_validation->set_rules('cakupan1b', '', 'trim|required');
        $this->form_validation->set_rules('cakupan2b', '', 'trim|required');
        $this->form_validation->set_rules('cakupan1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan1d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan2d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan3d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan4d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan5d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan6d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan7d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan8d', '', 'trim|required');
        $this->form_validation->set_rules('cakupan1e', '', 'trim|required');
        $this->form_validation->set_rules('cakupan2e', '', 'trim|required');
        $this->form_validation->set_rules('cakupan3e', '', 'trim|required');




        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->IndikatorProgram_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->IndikatorProgram_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}
