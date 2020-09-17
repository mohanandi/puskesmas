<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mutu_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "indikator_mutu" => $this->input->post('peningkatan1', true),
            "audit_internal" => $this->input->post('peningkatan2', true),
            "rapat_tinjauan" => $this->input->post('peningkatan3', true),
            "melaksanakan_pps" => $this->input->post('peningkatan4', true),
            "pelaporan_insiden" => $this->input->post('peningkatan5', true),
            "input_by" => $this->session->userdata('kode')

        ];
        $this->db->insert('peningkatan_mutu', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('peningkatan_mutu', ['kode' => $kode])->row_array();
    }
    public function check_puskesmas($kab_kota)
    {
        $this->db->where('kab_kota', $kab_kota);
        $this->db->where('role_id', '3');
        return $this->db->get('user')->result_array();
    }

    public function ubahData()
    {
        $data = [
            "indikator_mutu" => $this->input->post('peningkatan1', true),
            "audit_internal" => $this->input->post('peningkatan2', true),
            "rapat_tinjauan" => $this->input->post('peningkatan3', true),
            "melaksanakan_pps" => $this->input->post('peningkatan4', true),
            "pelaporan_insiden" => $this->input->post('peningkatan5', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_puskesmas'));
        $this->db->update('peningkatan_mutu', $data);
    }
}
