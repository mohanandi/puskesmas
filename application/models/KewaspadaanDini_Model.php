<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KewaspadaanDini_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "skdr" => $this->input->post('pelaksanaan1', true),
            "laporan_skdr" => $this->input->post('pelaksanaan2', true),
            "analisa_trend" => $this->input->post('pelaksanaan3', true)

        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
