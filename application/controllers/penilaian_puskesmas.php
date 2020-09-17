<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penilaian_Puskesmas extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('PenilaianPuskesmas_Model');
  is_logged_in();
 }

 public function index()
 {
  $data['judul'] = 'penilaian Puskesmas';
  $data['user'] = $this->db->get_where('user', ['kode' => $this->session->userdata('kode')])->row_array();
  $data['data'] = $this->PenilaianPuskesmas_Model->check();
  $this->load->view('templates/puskesmas/head', $data);
  if ($data['data'] == NULL) {
   $this->load->view('puskesmas/penilaian_puskesmas', $data);
  } else {
   $this->load->view('puskesmas/penilaian_puskesmas_hasil', $data);
  }
  $this->load->view('templates/puskesmas/foot');
 }

 public function tambah()
 {
  $this->form_validation->set_rules('penilaian1', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian2', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian3', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian4', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian5', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian6', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian7', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian8', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian9', '', 'trim|required');
  $this->form_validation->set_rules('penilaian10', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian11', '', 'trim|required');
  $this->form_validation->set_rules('penilaian12', '', 'trim|in_list[Ya,Tidak]');


  if ($this->form_validation->run() == false) {
   $this->index();
  } else {
   $this->PenilaianPuskesmas_Model->tambahData();
   $this->session->set_flashdata('flash', 'Ditambahkan');
   redirect('penilaian_Puskesmas');
  }
 }
 public function ubah()
 {
  $data['judul'] = 'Edit penilaian Puskesmas';
  $data['data'] = $this->PenilaianPuskesmas_Model->check();

  $this->form_validation->set_rules('penilaian1', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian2', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian3', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian4', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian5', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian6', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian7', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian8', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian9', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian10', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian11', '', 'trim|in_list[Ya,Tidak]');
  $this->form_validation->set_rules('penilaian12', '', 'trim|in_list[Ya,Tidak]');


  if ($this->form_validation->run() == false) {
   $this->load->view('templates/puskesmas/head', $data);
   $this->load->view('puskesmas/penilaian_puskesmas', $data);
   $this->load->view('templates/puskesmas/foot');
  } else {
   $this->PenilaianPuskesmas_Model->ubahData();
   $this->session->set_flashdata('flash', 'Diubah');
   redirect('penilaian_puskesmas');
  }
 }
}
