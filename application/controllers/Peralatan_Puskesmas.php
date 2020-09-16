<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peralatan_Puskesmas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PeralatanPuskesmas_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PeralatanPuskesmas_Model->check();
        if ($data['data'] == NULL) {
            $this->load->view('templates/puskesmas/head');
            $this->load->view('puskesmas/peralatan_puskesmas', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->load->view('templates/puskesmas/head');
            $this->load->view('puskesmas/peralatan_puskesmas_hasil', $data);
            $this->load->view('templates/puskesmas/foot');
        }
    }

    public function tambah()
    {
        $this->form_validation->set_rules('peralatan1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan16', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan17', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan18', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan19', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan20', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan21', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan22', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan23', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan24', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan25', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan26', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan27', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan28', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan29', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan30', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan31', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan32', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan33', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan34', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('peralatan35', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PeralatanPuskesmas_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Peralatan_Puskesmas');
        }
    }
}
