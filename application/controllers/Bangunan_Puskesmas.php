<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bangunan_Puskesmas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/data_umum');
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('lokasi1', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi2', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi3', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi4', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi5', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi6', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi7', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi8', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi9', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi10', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi11', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi12', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi13', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi14', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi15', '', 'trim|in_list[1,2]');
        $this->form_validation->set_rules('lokasi16', '', 'trim|in_list[1,2]');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            var_dump($this->input->post());
        }
    }
}
