<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewaspadaan_Dini extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KewaspadaanDini_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menular Potensial KLB/Wabah';
        $data['table'] = 'pelaksanaan_sistem_kewaspadaan_dini';
        $data['link'] = 'Kewaspadaan_Dini';
        $data['fungsi'] = 'kewaspadaan_dini';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->KewaspadaanDini_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head', $data);
        $this->load->view('kab_kota/table', $data);
        $this->load->view('templates/kab_kota/foot');
    }

    public function data($kode)
    {
        $data['judul'] = 'Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menular Potensial KLB/Wabah';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->KewaspadaanDini_Model->check($kode);
        $data['kode_puskesmas'] = $kode;
        $this->load->view('templates/kab_kota/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('kab_kota/kewaspadaan_dini', $data);
        } else {
            $this->load->view('kab_kota/kewaspadaan_dini_hasil', $data);
        }
        $this->load->view('templates/kab_kota/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pelaksanaan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pelaksanaan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pelaksanaan3', '', 'trim|in_list[1,2,3]');


        if ($this->form_validation->run() == false) {
            $this->data($this->input->post('kode_puskesmas'));
        } else {
            $this->KewaspadaanDini_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Kewaspadaan_Dini');
        }
    }
    public function ubah($kode)
    {
        $data['judul'] = 'Edit Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menular Potensial KLB/Wabah';
        $data['data'] = $this->KewaspadaanDini_Model->check($kode);
        $data['kode_puskesmas'] = $kode;

        $this->form_validation->set_rules('kode_puskesmas', '', 'trim|required');
        $this->form_validation->set_rules('pelaksanaan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pelaksanaan2', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pelaksanaan3', '', 'trim|in_list[1,2,3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/kab_kota/head', $data);
            $this->load->view('kab_kota/kewaspadaan_dini', $data);
            $this->load->view('templates/kab_kota/foot');
        } else {
            $this->KewaspadaanDini_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Kewaspadaan_Dini');
        }
    }
}
