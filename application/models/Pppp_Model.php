<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pppp_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "penilaian_kinerja" => $this->input->post('pengawasan1', true),
            "feedback" => $this->input->post('pengawasan2', true)

        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
