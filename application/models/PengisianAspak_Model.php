<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengisianAspak_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "aspak" => $this->input->post('aspak1', true),
            "aspak_pmk" => $this->input->post('aspak2', true),
            "tgl_input" => time()
        ];
        $this->db->insert('pengisian_aspak', $data);
    }
    public function check()
    {
        return $this->db->get_where('pengisian_aspak', ['kode' => $this->session->userdata('kode')])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "aspak" => $this->input->post('aspak1', true),
            "aspak_pmk" => $this->input->post('aspak2', true)
        ];

        $this->db->where('kode', $this->session->userdata('kode'));
        $this->db->update('pengisian_aspak', $data);
    }
}
