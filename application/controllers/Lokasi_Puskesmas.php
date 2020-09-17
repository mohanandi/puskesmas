<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LokasiPuskesmas_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Lokasi Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $check = $this->LokasiPuskesmas_Model->check();
        $this->load->view('templates/puskesmas/head', $data);
        if ($check == NULL) {
            $this->load->view('puskesmas/lokasi_puskesmas', $data);
        } else {
            $data['data'] = $this->LokasiPuskesmas_Model->check();
            $this->load->view('puskesmas/lokasi_puskesmas_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('lokasi1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi16', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->LokasiPuskesmas_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Lokasi_Puskesmas');
        }
    }
    public function ubah()
    {
        $data['judul'] = 'Edit Lokasi Puskesmas';
        $data['data'] = $this->LokasiPuskesmas_Model->check();

        $this->form_validation->set_rules('lokasi1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('lokasi16', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/puskesmas/head', $data);
            $this->load->view('puskesmas/lokasi_puskesmas', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->LokasiPuskesmas_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('lokasi_puskesmas');
        }
    }
}
