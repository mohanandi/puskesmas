<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kab_Kota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        $this->load->view('kab_kota/home', $data);
    }
}
