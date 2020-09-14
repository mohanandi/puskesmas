<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Umum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/data_umum');
        $this->load->view('templates/puskesmas/foot');
    }
}
