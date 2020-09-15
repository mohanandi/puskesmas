<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi_Manajemen extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/data_umum');
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_reg', 'No Registrasi', 'required');
        $this->form_validation->set_rules('tgl_diri', 'Tanggal Pendirian', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telepon Puskesmas dan No Telepon Whatsapp', 'required');
        $this->form_validation->set_rules('telp_gadar', 'No. Telepon Ruang Gadar', 'required');
        $this->form_validation->set_rules('telp_gadar', 'No. Faksimile', 'required');
        $this->form_validation->set_rules('email', 'Alamat email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
}