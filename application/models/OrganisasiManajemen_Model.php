<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrganisasiManajemen_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "niop" => $this->input->post('organisasi1', true),
            "tgl_izin" => strtotime($this->input->post('organisasi2', true)),
            "kategori" => $this->input->post('organisasi3', true),
            "status" => $this->input->post('organisasi4', true),
            "pplh" => $this->input->post('organisasi5', true)
        ];
        $this->db->insert('organisasi_manajemen', $data);
    }
    public function check()
    {
        return $this->db->get_where('organisasi_manajemen', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
