<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppkp_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "dipandu_jelas" => $this->input->post('penggerakkan1', true),
            "jadwal_jelas" => $this->input->post('penggerakkan2', true),
            "lintas_program" => $this->input->post('penggerakkan3', true),
            "dimonitor_kepala" => $this->input->post('penggerakkan4', true),
            "masukan_pelanggan" => $this->input->post('penggerakkan5', true),
            "pelayanan_pelanggan" => $this->input->post('penggerakkan6', true),
            "input_by" => $this->session->userdata('kode')

        ];
        $this->db->insert('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', ['kode' => $kode])->row_array();
    }
    public function check_puskesmas($kab_kota)
    {
        $this->db->where('kab_kota', $kab_kota);
        $this->db->where('role_id', '3');
        return $this->db->get('user')->result_array();
    }
}
