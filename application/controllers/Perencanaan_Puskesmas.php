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
        $data['link'] = 'Perencanaan_Puskesmas';
        $data['fungsi'] = 'perencanaan_puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->PerencanaanPuskesmas_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }
    public function data($kode)
    {
        $data['judul'] = 'Perencanaan Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PerencanaanPuskesmas_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/perencanaan_puskesmas', $data);
        } else {
            $this->load->view('kab_kota/perencanaan_puskesmas_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('perencanaan1_a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_b1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_b2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_b3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d2c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d6', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d7', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d8', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d9', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan1_d10', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan2c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_6', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('perencanaan3c_7', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->PerencanaanPuskesmas_Model->tambahData();
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            // redirect('Perencanaan_Puskesmas');
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
