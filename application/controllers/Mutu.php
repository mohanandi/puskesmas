<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mutu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mutu_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Peningkatan Mutu Puskesmas';
        $data['table'] = 'peningkatan_mutu';
        $data['link'] = 'Mutu';
        $data['fungsi'] = 'mutu';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->Mutu_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head', $data);
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }

    public function data($kode)
    {
        $data['judul'] = 'Peningkatan Mutu Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->Mutu_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/mutu', $data);
        } else {
            $this->load->view('kab_kota/mutu_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('peningkatan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan5', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->Mutu_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Mutu');
        }
    }
    public function ubah($kode)
    {
        $data['judul'] = 'Edit Peningkatan Mutu Puskesmas';
        $data['data'] = $this->Mutu_Model->check($kode);
        $data['kode_puskesmas'] = $kode;

        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('peningkatan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('peningkatan5', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/mutu', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->Mutu_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Mutu');
        }
    }
}
