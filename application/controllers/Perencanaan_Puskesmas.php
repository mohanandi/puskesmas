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
        $data['judul'] = 'Perencanaan Puskesmas';
        $data['table'] = 'perencanaan_puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->PerencanaanPuskesmas_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }
    public function data()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/perencanaan_puskesmas');
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('perencanaan1_a', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_b1', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_b2', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_b3', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_c', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d1', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d2a', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d2b', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d2c', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d3', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d4', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d5', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d6', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d7', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d8', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d9', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan1_d10', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan2a', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan2b', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan2c', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3a', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3b', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_1', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_2', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_3', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_4', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_5', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_6', '', 'trim|required');
        $this->form_validation->set_rules('perencanaan3c_7', '', 'trim|required');

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
