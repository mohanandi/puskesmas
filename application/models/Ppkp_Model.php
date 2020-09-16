<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppkp_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "dipandu_jelas" => $this->input->post('penggerakkan1', true),
            "jadwal_jelas" => $this->input->post('penggerakkan2', true),
            "lintas_program" => $this->input->post('penggerakkan3', true),
            "dimonitor_kepala" => $this->input->post('penggerakkan4', true),
            "masukan_pelanggan" => $this->input->post('penggerakkan5', true),
            "pelayanan_pelanggan" => $this->input->post('penggerakkan6', true)

        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
