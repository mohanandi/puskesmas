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
    public function check($kode)
    {
        return $this->db->get_where('pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas', ['kode' => $kode])->row_array();
    }
    public function check_puskesmas($kab_kota)
    {
        $this->db->where('kab_kota', $kab_kota);
        $this->db->where('role_id', '3');
        return $this->db->get('user')->result_array();
    }
}
