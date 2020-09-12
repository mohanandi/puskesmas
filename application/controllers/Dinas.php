<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dinas extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('templates/form_table/head');
        $this->load->view('dinas');
        $this->load->view('templates/form_table/foot');
    }

    public function dinas2()
    {
        $this->load->view('templates/form_table/head');
        $this->load->view('dinas2');
        $this->load->view('templates/form_table/foot');
    }
    public function dinas3()
    {
        $this->load->view('templates/form_table/head');
        $this->load->view('dinas3');
        $this->load->view('templates/form_table/foot');
    }
}
