<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prasarana_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PrasaranaPuskesmas_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->PrasaranaPuskesmas_Model->check();
        if ($data['data'] == NULL) {
            $this->load->view('templates/puskesmas/head');
            $this->load->view('puskesmas/prasarana_puskesmas', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->load->view('templates/puskesmas/head');
            $this->load->view('puskesmas/prasarana_puskesmas_hasil', $data);
            $this->load->view('templates/puskesmas/foot');
        }
    }
    public function tambah()
    {
        $this->form_validation->set_rules('prasarana1_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana1_11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana2_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana2_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana2_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana2_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_5', '', 'trim|required');
        $this->form_validation->set_rules('prasarana3_6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana3_14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana4_1', '', 'trim|required');
        $this->form_validation->set_rules('prasarana4_2', '', 'trim|required');
        $this->form_validation->set_rules('prasarana4_3', '', 'trim|required');
        $this->form_validation->set_rules('prasarana4_4', '', 'trim|required');
        $this->form_validation->set_rules('prasarana4_5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana4_6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana4_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana4_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_c', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_d', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_e', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_f', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_g', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_h', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana5_i', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana6_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana6_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana6_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana7_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana8_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana8_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana8_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana8_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana9_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana9_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana10_a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana10_b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana11_a1', '', 'trim|required');
        $this->form_validation->set_rules('prasarana11_a2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana11_b1', '', 'trim|required');
        $this->form_validation->set_rules('prasarana11_b2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana11_c1', '', 'trim|required');
        $this->form_validation->set_rules('prasarana11_c2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana11_d', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana11_e', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('prasarana11_f', '', 'trim|in_list[Ya,Tidak]');



        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->PrasaranaPuskesmas_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Prasarana_Puskesmas');
        }
    }
}
