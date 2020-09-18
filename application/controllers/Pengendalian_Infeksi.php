<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengendalian_Infeksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengendalianInfeksi_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Pencegahan dan Pengendalian Infeksi dan Kesehatan Lingkungan';
        $data['table'] = 'pencegahan_dan_pengendalian_infeksi';
        $data['link'] = 'Pengendalian_Infeksi';
        $data['fungsi'] = 'pengendalian_infeksi';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->PengendalianInfeksi_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }

    public function data($kode)
    {
        $data['judul'] = 'Peningkatan Mutu Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PengendalianInfeksi_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/pengendalian_infeksi', $data);
        } else {
            $this->load->view('kab_kota/pengendalian_infeksi_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan4a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan5a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan6a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan7a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan8a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan9a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan3b', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->PengendalianInfeksi_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pengendalian_Infeksi');
        }
    }
    public function ubah($kode)
    {

        $data['judul'] = 'Edit Peningkatan Mutu Puskesmas';
        $data['data'] = $this->PengendalianInfeksi_Model->check($kode);
        $data['kode_puskesmas'] = $kode;

        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pencegahan1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan4a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan5a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan6a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan7a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan8a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan9a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pencegahan3b', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            var_dump($this->input->post());
        } else {
            $this->PengendalianInfeksi_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Mutu');
        }
    }
}
