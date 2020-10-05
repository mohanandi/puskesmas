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
        $data['judul'] = 'Cakupan Indikator Program';
        $data['table'] = 'cakupan_indikator_program';
        $data['link'] = 'Indikator_Program';
        $data['fungsi'] = 'indikator_program';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->IndikatorProgram_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }

    public function data($kode)
    {
        $data['judul'] = 'Cakupan Indikator Program';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->IndikatorProgram_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/indikator_program', $data);
        } else {
            $this->load->view('kab_kota/indikator_program_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_a1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_a2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a2c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_a3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a3c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_b1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_b1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_b1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_c1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_c1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_c1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d2c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d3c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d4a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d4b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d4c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d5a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d5b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d5c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d6a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d6b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d6c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d7a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d7b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d7c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d8a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d8b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d8c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_e1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_e2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e2c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_e3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e3c', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->IndikatorProgram_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Indikator_Program');
        }
    }
    public function ubah($kode)
    {
        $data['judul'] = 'Edit Cakupan Indikator Program';
        $data['data'] = $this->IndikatorProgram_Model->check($kode);
        $data['kode_puskesmas'] = $kode;

        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_a1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_a2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a2c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_a3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_a3c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_b1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_b1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_b1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_c1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_c1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_c1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d2c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d3c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d4a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d4b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d4c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d5a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d5b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d5c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d6a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d6b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d6c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d7a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d7b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d7c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_d8a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d8b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_d8c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_e1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e1c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_e2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e2c', '', 'trim|required');
        $this->form_validation->set_rules('cakupan_e3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan_e3c', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/indikator_program', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->IndikatorProgram_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Indikator_Program');
        }
    }
}
