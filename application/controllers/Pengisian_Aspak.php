<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengisian_Aspak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengisianAspak_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'PENGISIAN ASPAK';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PengisianAspak_Model->check();
        $this->load->view('templates/puskesmas/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('puskesmas/pengisian_aspak', $data);
        } else {
            $this->load->view('puskesmas/pengisian_aspak_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('aspak1', 'Nama', 'trim|required|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('aspak2', 'Nama', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PengisianAspak_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pengisian_Aspak');
        }
    }
}
