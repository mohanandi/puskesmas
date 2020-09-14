<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('templates/form_table/head');
        $this->load->view('form3');
        $this->load->view('templates/form_table/foot');
    }
    public function username_check($str)
    {
        if ($str == 'test') {
            $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
