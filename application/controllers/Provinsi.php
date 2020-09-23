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
        $data['puskesmas'] = $puskesmas;
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $this->load->view('templates/provinsi/head', $data);
        $this->load->view('provinsi/daftar_puskesmas', $data);
        $this->load->view('templates/provinsi/foot');
    }
    public function index()
    {
        $this->load->view('provinsi/home');
    }

    public function daftar_puskesmas()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['kabupaten'] = $this->Provinsi_Model->check_kabupaten($data['user']['provinsi']);
        $this->load->view('templates/provinsi/head', $data);
        $this->load->view('provinsi/daftar_puskesmas', $data);
        $this->load->view('templates/provinsi/foot');
    }

    public function hasil_daftar_puskesmas()
    {
        $this->load->view('templates/provinsi/head');
        $this->load->view('provinsi/hasil_daftar_puskesmas');
        $this->load->view('templates/provinsi/foot');
    }
}
