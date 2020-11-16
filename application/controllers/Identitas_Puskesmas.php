<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identitas_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('IdentitasPuskesmas_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Identitas Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->IdentitasPuskesmas_Model->check($this->session->userdata('kode'));
        $this->load->view('templates/puskesmas/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('puskesmas/identitas_puskesmas', $data);
        } else {
            $this->load->view('puskesmas/identitas_puskesmas_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_reg', 'No Registrasi', 'required');
        $this->form_validation->set_rules('tgl_diri', 'Tanggal Pendirian', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('kab_kota', 'Kabupaten', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telepon Puskesmas dan No Telepon Whatsapp', 'required');
        $this->form_validation->set_rules('telp_gadar', 'No. Telepon Ruang Gadar', 'required');
        $this->form_validation->set_rules('faks', 'No. Faksimile', 'required');
        $this->form_validation->set_rules('email', 'Alamat email', 'required|valid_email');
        $this->form_validation->set_rules('website', 'Alamat website', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->IdentitasPuskesmas_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Identitas_Puskesmas');
        }
    }

    public function ubah()
    {
        $data['judul'] = 'Ubah Identitas Puskesmas';
        $data['data'] = $this->IdentitasPuskesmas_Model->check($this->session->userdata('kode'));

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_reg', 'No Registrasi', 'required');
        $this->form_validation->set_rules('tgl_diri', 'Tanggal Pendirian', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('kab_kota', 'Kabupaten', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telepon Puskesmas dan No Telepon Whatsapp', 'required');
        $this->form_validation->set_rules('telp_gadar', 'No. Telepon Ruang Gadar', 'required');
        $this->form_validation->set_rules('faks', 'No. Faksimile', 'required');
        $this->form_validation->set_rules('email', 'Alamat email', 'required|valid_email');
        $this->form_validation->set_rules('website', 'Alamat website', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/puskesmas/head', $data);
            $this->load->view('puskesmas/identitas_puskesmas', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->IdentitasPuskesmas_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Identitas_Puskesmas');
        }
    }
}
