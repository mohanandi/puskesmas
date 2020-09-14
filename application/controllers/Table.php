<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('table');
        $this->load->view('templates/puskesmas/foot');
    }
}
