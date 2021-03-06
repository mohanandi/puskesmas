<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pppp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pppp_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'PENGAWASAN, PENGENDALIAN DAN PENILAIAN KINERJA PUSKESMAS';
        $data['table'] = 'pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas';
        $data['link'] = 'Pppp';
        $data['fungsi'] = 'pppp';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->Pppp_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head', $data);
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }

    public function data($kode)
    {
        $data['judul'] = 'Penggerakan dan Pelaksanaan Kegiatan Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->Pppp_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/pppp', $data);
        } else {
            $this->load->view('kab_kota/pppp_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pengawasan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pengawasan2', '', 'trim|in_list[1,2,3]');


        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->Pppp_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pppp');
        }
    }
    public function ubah($kode)
    {
        $data['judul'] = 'Edit PENGAWASAN, PENGENDALIAN DAN PENILAIAN KINERJA PUSKESMAS';
        $data['data'] = $this->Pppp_Model->check($kode);
        $data['kode_puskesmas'] = $kode;

        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pengawasan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pengawasan2', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/pppp', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->Pppp_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Pppp');
        }
    }
}
