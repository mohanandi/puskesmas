<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppkp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ppkp_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Penggerakan dan Pelaksanaan Kegiatan Puskesmas';
        $data['table'] = 'penggerakan_dan_pelaksanaan_kegiatan_puskesmas';
        $data['link'] = 'Ppkp';
        $data['fungsi'] = 'Ppkp';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->Ppkp_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }
    public function data($kode)
    {
        $data['judul'] = 'Penggerakan dan Pelaksanaan Kegiatan Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->Ppkp_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/ppkp', $data);
        } else {
            $this->load->view('kab_kota/ppkp_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('penggerakkan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan6', '', 'trim|in_list[1,2,3]');


        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->Ppkp_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Ppkp');
        }
    }
    public function ubah($kode)
    {
        $data['judul'] = 'Edit Organisasi Manajemen';
        $data['data'] = $this->Ppkp_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('penggerakkan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan3', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan4', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('penggerakkan6', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/ppkp', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->Ppkp_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('ppkp');
        }
    }
}
