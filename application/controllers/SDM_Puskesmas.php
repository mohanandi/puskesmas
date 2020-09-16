<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SDM_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SDM_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'SDM PUSKESMAS';
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['data'] = $this->SDM_Model->check();
        $this->load->view('templates/puskesmas/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('puskesmas/sdm', $data);
        } else {
            $this->load->view('puskesmas/sdm_hasil', $data);
        }
        $this->load->view('templates/puskesmas/foot');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('sdmdokter1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdokter2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdokter3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdokter4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdokter5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdokter6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdlp1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdlp2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdlp3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdlp4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdlp5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmdlp6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmgigi1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmgigi2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmgigi3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmgigi4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmgigi5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmgigi6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmperawat1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmperawat2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmperawat3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmperawat4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmperawat5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmperawat6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmbidan1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmbidan2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmbidan3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmbidan4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmbidan5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmbidan6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpromosi1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpromosi2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpromosi3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpromosi4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpromosi5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpromosi6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmsanitasi1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmsanitasi2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmsanitasi3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmsanitasi4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmsanitasi5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmsanitasi6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmnutrisionis1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmnutrisionis2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmnutrisionis3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmnutrisionis4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmnutrisionis5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmnutrisionis6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmapoteker1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmapoteker2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmapoteker3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmapoteker4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmapoteker5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmapoteker6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkefarmasian1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkefarmasian2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkefarmasian3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkefarmasian4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkefarmasian5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkefarmasian6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmahli1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmahli2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmahli3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmahli4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmahli5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmahli6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkesehatan1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkesehatan2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkesehatan3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkesehatan4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkesehatan5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkesehatan6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkeuangan1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkeuangan2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkeuangan3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkeuangan4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkeuangan5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmkeuangan6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtatausaha1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtatausaha2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtatausaha3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtatausaha4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtatausaha5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtatausaha6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpekarya1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpekarya2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpekarya3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpekarya4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpekarya5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmpekarya6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtradisional1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtradisional2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtradisional3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtradisional4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtradisional5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtradisional6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik1', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik2', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik3', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik4', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik5', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik6', '', 'trim|in_list[Ya,Tidak]');
        $this->form_validation->set_rules('sdmtitik7', '', 'trim|in_list[Ya,Tidak]');


        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            var_dump($this->input->post());
        }
    }
}
