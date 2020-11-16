<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Provinsi_Model');
        is_logged_in();
    }

    public function data($puskesmas)
    {
        $data['puskesmas'] = $this->Provinsi_Model->check_puskesmas($puskesmas);
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['subjudul'] = $data['puskesmas']['nama'];
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $data['judul'] = "Instrumen Monitoring dan Evaluasi Pembinaan ke Puskesmas";
        $this->load->view('templates/provinsi/head', $data);
        $this->load->view('provinsi/daftar_puskesmas', $data);
        $this->load->view('templates/provinsi/foot');
    }
    public function index()
    {
        redirect('Home');
    }

    public function daftar_puskesmas()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['subjudul'] = "Daftar Dinas Kabupaten/Kota dan Puskesmas Provinsi " . $data['user']['nama'];
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $data['judul'] = "Instrumen Monitoring dan Evaluasi Pembinaan ke Puskesmas";
        $this->load->view('templates/provinsi/head', $data);
        $this->load->view('provinsi/daftar_puskesmas_landing');
        $this->load->view('templates/provinsi/foot');
    }

    public function hasil_daftar_puskesmas()
    {
        $this->load->view('templates/provinsi/head');
        $this->load->view('provinsi/hasil_daftar_puskesmas');
        $this->load->view('templates/provinsi/foot');
    }

    public function nilai_kabupaten($kode)
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['subjudul'] = "Pemantauan Proses Pembinaan Terpadu Puskesmas yang Dilakukan Dinkes Kabupaten/Kota";
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $data['judul'] = "Instrumen Monitoring dan Evaluasi Pembinaan ke Puskesmas";
        $data['data_kabupaten'] = $this->Provinsi_Model->data_kabupaten(urldecode($kode));
        $this->load->view('templates/provinsi/head', $data);
        $this->load->view('provinsi/nilai_kabupaten', $data);
        $this->load->view('templates/provinsi/foot');
    }

    public function penilaian_kabupaten($kode)
    {
        $data['judul'] = "Instrumen Monitoring dan Evaluasi Pembinaan ke Puskesmas";
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $data['kabupaten_pilih'] = $this->Provinsi_Model->data_kabupaten(urldecode($kode));
        $data['subjudul'] = "Pemantauan Proses Pembinaan Terpadu Puskesmas yang Dilakukan Dinkes Kabupaten/Kota " . $data['kabupaten_pilih']['nama'];
        $data['data'] = $this->Provinsi_Model->check_penilaian_pembinaan(urldecode($kode));
        $data['kode_kabupaten'] = urldecode($kode);
        $this->load->view('templates/provinsi/head', $data);
        if ($data['data'] == NULL) {
            $this->load->view('provinsi/penilaian_kabupaten', $data);
        } else {
            $this->load->view('provinsi/penilaian_kabupaten_hasil', $data);
        }
        $this->load->view('templates/provinsi/foot');
    }

    public function tambah_penilaian_pembinaan()
    {
        $this->form_validation->set_rules('kode_kabupaten', '', 'trim|required');
        $this->form_validation->set_rules('pemantauan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan2c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan3c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan4a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan4b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7d', '', 'trim|in_list[1,2,3]');


        if ($this->form_validation->run() == false) {
            $this->penilaian_kabupaten($this->input->post('kode_kabupaten'));
        } else {
            $this->Provinsi_Model->penilaian_pembinaan_tambah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->nilai_kabupaten($this->input->post('kode_kabupaten'));
        }
    }

    public function penilaian_kabupaten_ubah($kode)
    {
        $data['judul'] = "Instrumen Monitoring dan Evaluasi Pembinaan ke Puskesmas";
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $data['data'] = $this->Provinsi_Model->check_penilaian_pembinaan(urldecode($kode));
        $data['kabupaten_pilih'] = $this->Provinsi_Model->data_kabupaten(urldecode($kode));
        $data['subjudul'] = "Pemantauan Proses Pembinaan Terpadu Puskesmas yang Dilakukan Dinkes Kabupaten/Kota " . $data['kabupaten_pilih']['nama'];
        $data['kode_kabupaten'] = urldecode($kode);

        $this->form_validation->set_rules('kode_kabupaten', '', 'trim|required');
        $this->form_validation->set_rules('pemantauan1', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan1a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan1b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan2a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan2b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan2c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan3a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan3b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan3c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan4a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan4b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan5', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan6d', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7a', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7b', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7c', '', 'trim|in_list[1,2,3]');
        $this->form_validation->set_rules('pemantauan7d', '', 'trim|in_list[1,2,3]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/provinsi/head', $data);
            $this->load->view('provinsi/penilaian_kabupaten', $data);
            $this->load->view('templates/provinsi/foot');
        } else {
            $this->Provinsi_Model->ubah_penilaian_pembinaan();
            $this->session->set_flashdata('flash', 'Diubah');
            $kode = $this->input->post('kode_kabupaten');
            redirect("Provinsi/nilai_kabupaten/$kode");
        }
    }

    public function daftar_puskesmas_landing()
    {
        $this->load->view('templates/provinsi/head');
        $this->load->view('provinsi/daftar_puskesmas_landing');
        $this->load->view('templates/provinsi/foot');
    }
}
