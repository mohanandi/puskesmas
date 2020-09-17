<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarPuskesmas_Model extends CI_Model
{
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
    public function check_puskesmas($kab_kota)
    {
        $this->db->where('kab_kota', $kab_kota);
        $this->db->where('role_id', '3');
        return $this->db->get('user')->result_array();
    }

    public function check_data_puskesmas($kode)
    {
        $this->db->get_where('check_data_puskesmas', ['kode' => $kode])->row_array();
    }
}
