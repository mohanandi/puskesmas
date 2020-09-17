<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemenuhan_SD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PemenuhanSD_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Pemenuhan Sumber Daya Puskesma';
        $data['table'] = 'pemenuhan_sdm_puskesmas';
        $data['link'] = 'Pemenuhan_SD';
        $data['fungsi'] = 'pemenuhan_sd';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->PemenuhanSD_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }
    public function data($kode)
    {
        $data['judul'] = 'Pemenuhan Sumber Daya Puskesma';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PemenuhanSD_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/pemenuhan_sd', $data);
        } else {
            $this->load->view('kab_kota/pemenuhan_sd_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan6', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan7', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan8', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->PemenuhanSD_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pemenuhan_SD');
        }
    }

    public function ubah($kode)
    {
        $data['judul'] = 'Edit Pemenuhan Sumber Daya Puskesmas';
        $data['data'] = $this->PemenuhanSD_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pemenuhan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan6', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan7', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemenuhan8', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/pemenuhan_sd', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->PemenuhanSD_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Pemenuhan_SD');
        }
    }
}
