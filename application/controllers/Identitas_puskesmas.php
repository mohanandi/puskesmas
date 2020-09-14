<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identitas_Puskesmas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/form_table/head');
        $this->load->view('puskesmas/identitas_puskesmas');
        $this->load->view('templates/form_table/foot');
    }
}
