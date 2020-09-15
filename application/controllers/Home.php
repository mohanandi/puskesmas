<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
        if ($this->session->userdata['role_id'] == 3) {
            $this->load->view('puskesmas/home', $data);
        } else if ($this->session->userdata['role_id'] == 2) {
            $this->load->view('kab_kota/home', $data);
        } else if ($this->session->userdata['role_id'] == 1) {
            $this->load->view('provinsi/home', $data);
        } else {
            $this->load->view('pusat/home', $data);
        }
    }
}
