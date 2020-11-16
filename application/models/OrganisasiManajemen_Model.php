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
            "kategorinon" => $this->input->post('organisasi3a', true),
            "status" => $this->input->post('organisasi4', true),
            "pplh" => $this->input->post('organisasi5', true),
            "tgl_input" => time()
        ];
        $this->db->insert('organisasi_manajemen', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('organisasi_manajemen', ['kode' => $kode])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "niop" => $this->input->post('organisasi1', true),
            "tgl_izin" => strtotime($this->input->post('organisasi2', true)),
            "kategori" => $this->input->post('organisasi3', true),
            "kategorinon" => $this->input->post('organisasi3a', true),
            "status" => $this->input->post('organisasi4', true),
            "pplh" => $this->input->post('organisasi5', true)
        ];

        $this->db->where('kode', $this->session->userdata('kode'));
        $this->db->update('organisasi_manajemen', $data);
    }
}
