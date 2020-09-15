<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi_Manajemen extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organisasi_manajemen');
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('organisasi1', '', 'required');
        $this->form_validation->set_rules('organisasi2', '', 'required');
        $this->form_validation->set_rules('organisasi3', '', 'required');
        $this->form_validation->set_rules('organisasi4', '', 'required');
        $this->form_validation->set_rules('organisasi5', '', 'required');
        $this->form_validation->set_rules('organisasi6', '', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function ubah()
    {
        $data['data'] = $this->IdentitasPuskesmas_Model->check();
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/organoisasi_manajemen', $data);
        $this->load->view('templates/puskesmas/foot');
    }
}
