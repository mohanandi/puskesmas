<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('kode', 'Kode', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == False) {
            $data['title'] = "LOGIN";
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $kode = $this->input->post('kode');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['kode' => $kode])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'kode' => $user['kode'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 3) {
                    redirect('home');
                } else if ($user['role_id'] == 2) {
                    redirect('home');
                } else if ($user['role_id'] == 1) {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kode is not registered!</div>');
            redirect('auth');
        }
    }
}
