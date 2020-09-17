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
        $this->form_validation->set_rules('cakupan1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan3d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan4d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan5d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan6d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan7d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan8d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1e', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2e', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan3e', '', 'trim|in_list[1,2,3]');

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
        $this->form_validation->set_rules('cakupan1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan3d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan4d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan5d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan6d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan7d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan8d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan1e', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan2e', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('cakupan3e', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/kewaspadaan_dini', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->IndikatorProgram_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Indikator_Program');
        }
    }
}
