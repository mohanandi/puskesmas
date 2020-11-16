<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemantauan_pembinaan_hasil extends CI_Controller
{
 public function index()
 {
  $this->load->view('templates/kab_kota/head');
  $this->load->view('kab_kota/pemantauan_pembinaan_hasil');
  $this->load->view('templates/kab_kota/foot');
 }
}
