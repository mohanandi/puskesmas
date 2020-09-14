<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Puskesmas extends CI_Controller
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
   
	public function identitas_puskesmas_hasil()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/identitas_puskesmas_hasil');
        $this->load->view('templates/puskesmas/foot');
    }

	public function pembina_terpadu_hasil()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/pembina_terpadu_hasil');
        $this->load->view('templates/puskesmas/foot');
    }

	public function data_umum_hasil()
    {
        $this->load->view('templates/puskesmas/head');
        $this->load->view('puskesmas/data_umum_hasil');
        $this->load->view('templates/puskesmas/foot');
    }
}
