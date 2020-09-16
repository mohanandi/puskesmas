<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mutu_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "indikator_mutu" => $this->input->post('peningkatan1', true),
            "audit_internal" => $this->input->post('peningkatan2', true),
            "rapat_tinjauan" => $this->input->post('peningkatan3', true),
            "melaksanakan_pps" => $this->input->post('peningkatan4', true),
            "pelaporan_insiden" => $this->input->post('peningkatan5', true)

        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
