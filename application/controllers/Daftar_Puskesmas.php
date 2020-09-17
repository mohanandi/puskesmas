<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_Puskesmas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DaftarPuskesmas_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $data['puskesmas'] = $this->DaftarPuskesmas_Model->check_puskesmas($data['user']['kab_kota']);
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/daftar_puskesmas', $data);
        $this->load->view('templates/kab_kota/foot');
    }
}
