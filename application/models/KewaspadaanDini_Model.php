<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KewaspadaanDini_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "skdr" => $this->input->post('pelaksanaan1', true),
            "laporan_skdr" => $this->input->post('pelaksanaan2', true),
            "analisa_trend" => $this->input->post('pelaksanaan3', true),
            "input_by" => $this->session->userdata('kode')

        ];
        $this->db->insert('pelaksanaan_sistem_kewaspadaan_dini', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('pelaksanaan_sistem_kewaspadaan_dini', ['kode' => $kode])->row_array();
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
            "skdr" => $this->input->post('pelaksanaan1', true),
            "laporan_skdr" => $this->input->post('pelaksanaan2', true),
            "analisa_trend" => $this->input->post('pelaksanaan3', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_puskesmas'));
        $this->db->update('pelaksanaan_sistem_kewaspadaan_dini', $data);
    }
}
