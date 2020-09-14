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
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas2()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas2');
        $this->load->view('templates/kab_kota/foot');
    }
    public function dinas3()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas3');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas4()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas4');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas5()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas5');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas6()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas6');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas7()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas7');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas8()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas8');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas9()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas9');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas10()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas10');
        $this->load->view('templates/kab_kota/foot');
    }

    public function dinas11()
    {
        $this->load->view('templates/kab_kota/head');
        $this->load->view('kab_kota/dinas11');
        $this->load->view('templates/kab_kota/foot');
    }
}
