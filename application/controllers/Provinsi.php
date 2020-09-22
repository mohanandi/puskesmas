<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
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
        
        $this->load->view('provinsi/home');
        
    }

	public function daftar_puskesmas()
    {
        $this->load->view('templates/provinsi/head');
        $this->load->view('provinsi/daftar_puskesmas');
        $this->load->view('templates/provinsi/foot');
    }

	public function hasil_daftar_puskesmas()
    {
        $this->load->view('templates/provinsi/head');
        $this->load->view('provinsi/hasil_daftar_puskesmas');
        $this->load->view('templates/provinsi/foot');
    }

}
