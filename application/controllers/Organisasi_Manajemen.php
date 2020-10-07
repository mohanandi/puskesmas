<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi_Manajemen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OrganisasiManajemen_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Organisasi Manajemen';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->OrganisasiManajemen_Model->check();
        $this->load->view('templates/puskesmas/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('puskesmas/organisasi_manajemen', $data);
        } else {
            $this->load->view('puskesmas/organisasi_manajemen_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('organisasi1', '', 'required');
        $this->form_validation->set_rules('organisasi2', '', 'required');
        $this->form_validation->set_rules('organisasi3', '', 'required');
        $this->form_validation->set_rules('organisasi3a', '', 'required');
        $this->form_validation->set_rules('organisasi4', '', 'required');
        $this->form_validation->set_rules('organisasi5', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->OrganisasiManajemen_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Organisasi_Manajemen');
        }
    }
    public function ubah()
    {
        $data['judul'] = 'Edit Organisasi Manajemen';
        $data['data'] = $this->OrganisasiManajemen_Model->check();

        $this->form_validation->set_rules('organisasi1', '', 'required');
        $this->form_validation->set_rules('organisasi2', '', 'required');
        $this->form_validation->set_rules('organisasi3', '', 'required');
        $this->form_validation->set_rules('organisasi3a', '', 'required');
        $this->form_validation->set_rules('organisasi4', '', 'required');
        $this->form_validation->set_rules('organisasi5', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/puskesmas/head', $data);
            $this->load->view('puskesmas/organisasi_manajemen', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->OrganisasiManajemen_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Organisasi_Manajemen');
        }
    }
}
