<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bangunan_Puskesmas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/bangunan_puskesmas');
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('bangunan1', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan2', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan3', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan4', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan5', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan6', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan7', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan8', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan9', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan10', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan11', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan12', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan13', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan14', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan15', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan16', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan17', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan18', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan19', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan20', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan21', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan22', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan23', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan24', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan25', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan26', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan27', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan28', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan29', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan30', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan31', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan32', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan33', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan34', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan35', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan36', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan37', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan38', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan39', '', 'trim|in_list[Ya, Tidak]');
        $this->form_validation->set_rules('bangunan40', '', 'trim|in_list[Ya, Tidak]');
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            var_dump($this->input->post());
        }
    }
}
