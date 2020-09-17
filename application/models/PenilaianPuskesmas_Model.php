<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenilaianPuskesmas_Model extends CI_Model
{
 public function tambahData()
 {
  $data = [
   "kode" => $this->session->userdata('kode'),
   "self" => $this->input->post('penilaian1', true),
   "n2_pelayanan" => $this->input->post('penilaian2', true),
   "n2_manajemen" => $this->input->post('penilaian3', true),
   "n1_pelayanan" => $this->input->post('penilaian4', true),
   "n1_manajemen" => $this->input->post('penilaian5', true),
   "uji_petik" => $this->input->post('penilaian6', true),
   "inovasi" => $this->input->post('penilaian7', true),
   "rumusan" => $this->input->post('penilaian8', true),
   "tahun_akreditasi" => $this->input->post('penilaian9', true),
   "status_akreditas" => $this->input->post('penilaian10', true),
   "tahun_iks" => $this->input->post('penilaian11', true),
   "status_iks" => $this->input->post('penilaian12', true),

  ];
  $this->db->insert('penilaian_puskesmas', $data);
 }
 public function check()
 {
  return $this->db->get_where('penilaian_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
 }

 public function ubahData()
 {
  $data = [
   "kode" => $this->session->userdata('kode'),
   "self" => $this->input->post('penilaian1', true),
   "n2_pelayanan" => $this->input->post('penilaian2', true),
   "n2_manajemen" => $this->input->post('penilaian3', true),
   "n1_pelayanan" => $this->input->post('penilaian4', true),
   "n1_manajemen" => $this->input->post('penilaian5', true),
   "uji_petik" => $this->input->post('penilaian6', true),
   "inovasi" => $this->input->post('penilaian7', true),
   "rumusan" => $this->input->post('penilaian8', true),
   "tahun_akreditasi" => $this->input->post('penilaian9', true),
   "status_akreditas" => $this->input->post('penilaian10', true),
   "tahun_iks" => $this->input->post('penilaian11', true),
   "status_iks" => $this->input->post('penilaian12', true),
  ];

  $this->db->where('kode', $this->session->userdata('kode'));
  $this->db->update('penilaian_puskesmas', $data);
 }
}
