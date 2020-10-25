<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembina_Terpadu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PembinaTerpadu_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Tim Pembinaan Terpadu';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PembinaTerpadu_Model->check();
        $this->load->view('templates/puskesmas/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('puskesmas/pembina_terpadu', $data);
        } else {
            $this->load->view('puskesmas/pembina_terpadu_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('pembina1', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina1', '', 'trim|required');
        $this->form_validation->set_rules('pembina2', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina2', '', 'trim|required');
        $this->form_validation->set_rules('pembina3', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina3', '', 'trim|required');
        $this->form_validation->set_rules('pembina4', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina4', '', 'trim|required');
        $this->form_validation->set_rules('pembina5', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina5', '', 'trim|required');
        $this->form_validation->set_rules('tgl_pembinaan', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PembinaTerpadu_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pembina_Terpadu');
        }
    }

    public function ubah()
    {
        $data['judul'] = 'Edit Tim Pembinaan Terpadu';
        $data['data'] = $this->PembinaTerpadu_Model->check();

        $this->form_validation->set_rules('pembina1', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina1', '', 'trim|required');
        $this->form_validation->set_rules('pembina2', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina2', '', 'trim|required');
        $this->form_validation->set_rules('pembina3', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina3', '', 'trim|required');
        $this->form_validation->set_rules('pembina4', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina4', '', 'trim|required');
        $this->form_validation->set_rules('pembina5', '', 'trim|required');
        $this->form_validation->set_rules('no_pembina5', '', 'trim|required');
        $this->form_validation->set_rules('tgl_pembinaan', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/puskesmas/head', $data);
            $this->load->view('puskesmas/pembina_terpadu', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->PembinaTerpadu_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Pembina_Terpadu');
        }
    }
}
