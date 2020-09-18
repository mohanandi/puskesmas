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
        $data['judul'] = 'SDM Puskesmas';
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
        $this->form_validation->set_rules('sdm1', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter1', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter2', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter3', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter4', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter5', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter6', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp1', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp2', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp3', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp4', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp5', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp6', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi1', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi2', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi3', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi4', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi5', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi6', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat1', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat2', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat3', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat4', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat5', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat6', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan1', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan2', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan3', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan4', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan5', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan6', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi1', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi2', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi3', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi4', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi5', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi6', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi1', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi2', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi3', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi4', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi5', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi6', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis1', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis2', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis3', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis4', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis5', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis6', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker1', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker2', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker3', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker4', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker5', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker6', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian1', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian2', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian3', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian4', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian5', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian6', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli1', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli2', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli3', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli4', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli5', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli6', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan1', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan2', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan3', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan4', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan5', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan6', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan1', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan2', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan3', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan4', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan5', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha1', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha2', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha3', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha4', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha5', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha6', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya1', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya2', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya3', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya4', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya5', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional1', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional2', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional3', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional4', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional5', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik1', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik2', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik3', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik4', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik5', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik7', '', 'trim|required');
        if ($this->form_validation->run() == false) {
            // $this->index();
            var_dump($this->input->post());
        } else {
            $this->SDM_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('SDM_Puskesmas');
        }
    }

    public function ubah()
    {
        $data['judul'] = 'Edit SDM Puskesmas';
        $data['data'] = $this->SDM_Model->check();

        $this->form_validation->set_rules('sdm1', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter1', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter2', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter3', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter4', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter5', '', 'trim|required');
        $this->form_validation->set_rules('sdmdokter6', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp1', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp2', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp3', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp4', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp5', '', 'trim|required');
        $this->form_validation->set_rules('sdmdlp6', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi1', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi2', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi3', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi4', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi5', '', 'trim|required');
        $this->form_validation->set_rules('sdmgigi6', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat1', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat2', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat3', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat4', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat5', '', 'trim|required');
        $this->form_validation->set_rules('sdmperawat6', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan1', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan2', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan3', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan4', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan5', '', 'trim|required');
        $this->form_validation->set_rules('sdmbidan6', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi1', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi2', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi3', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi4', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi5', '', 'trim|required');
        $this->form_validation->set_rules('sdmpromosi6', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi1', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi2', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi3', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi4', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi5', '', 'trim|required');
        $this->form_validation->set_rules('sdmsanitasi6', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis1', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis2', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis3', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis4', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis5', '', 'trim|required');
        $this->form_validation->set_rules('sdmnutrisionis6', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker1', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker2', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker3', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker4', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker5', '', 'trim|required');
        $this->form_validation->set_rules('sdmapoteker6', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian1', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian2', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian3', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian4', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian5', '', 'trim|required');
        $this->form_validation->set_rules('sdmkefarmasian6', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli1', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli2', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli3', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli4', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli5', '', 'trim|required');
        $this->form_validation->set_rules('sdmahli6', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan1', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan2', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan3', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan4', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan5', '', 'trim|required');
        $this->form_validation->set_rules('sdmkesehatan6', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan1', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan2', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan3', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan4', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan5', '', 'trim|required');
        $this->form_validation->set_rules('sdmkeuangan6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha1', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha2', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha3', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha4', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha5', '', 'trim|required');
        $this->form_validation->set_rules('sdmtatausaha6', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya1', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya2', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya3', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya4', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya5', '', 'trim|required');
        $this->form_validation->set_rules('sdmpekarya6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional1', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional2', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional3', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional4', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional5', '', 'trim|required');
        $this->form_validation->set_rules('sdmtradisional6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik1', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik2', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik3', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik4', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik5', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik6', '', 'trim|required');
        $this->form_validation->set_rules('sdmtitik7', '', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/puskesmas/head', $data);
            $this->load->view('puskesmas/sdm', $data);
            $this->load->view('templates/puskesmas/foot');
        } else {
            $this->SDM_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('SDM_Puskesmas');
        }
    }
}
