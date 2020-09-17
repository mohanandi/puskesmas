<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bangunan_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BangunanPuskesmas_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Bangunan Puskesmas';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->BangunanPuskesmas_Model->check();
        $this->load->view('templates/puskesmas/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('puskesmas/bangunan_puskesmas', $data);
        } else {
            $this->load->view('puskesmas/bangunan_puskesmas_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('bangunan1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan16', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan17', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan18', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan19', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan20', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan21', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan22', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan23', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan24', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan25', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan26', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan27', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan28', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan29', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan30', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan31', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan32', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan33', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan34', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan35', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan36', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan37', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan38', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan39', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan40', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41c', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41d', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9c', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9d', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9e', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9f', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_13a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_13b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_6a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_14', '', 'trim|required');
        $this->form_validation->set_rules('bangunan43_15', '', 'trim|in_list[Ya,Tidak]');
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $this->BangunanPuskesmas_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Bangunan_Puskesmas');
        }
    }

    public function ubah()
    {
        $data['judul'] = 'Edit Bangunan Puskesmas';
        $data['data'] = $this->BangunanPuskesmas_Model->check();

        $this->form_validation->set_rules('bangunan1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan16', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan17', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan18', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan19', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan20', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan21', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan22', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan23', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan24', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan25', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan26', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan27', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan28', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan29', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan30', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan31', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan32', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan33', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan34', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan35', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan36', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan37', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan38', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan39', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan40', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41c', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan41d', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9c', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9d', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9e', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_9f', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_13a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_13b', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_14', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan42_15', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_6a', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_7', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_8', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_9', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_10', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_11', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_12', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_13', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('bangunan43_14', '', 'trim|required');
        $this->form_validation->set_rules('bangunan43_15', '', 'trim|in_list[Ya,Tidak]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/puskesmas/head', $data);
            $this->load->view('puskesmas/bangunan_puskesmas', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->BangunanPuskesmas_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Bangunan_Puskesmas');
        }
    }
}
