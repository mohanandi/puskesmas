<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PeralatanPuskesmas_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "nama" => $this->input->post('nama', true),
            "no_reg" => $this->input->post('no_reg', true),
            "tgl_pendirian" => strtotime($this->input->post('tgl_diri', true)),
            "alamat" => $this->input->post('alamat', true),
            "kecamatan" => $this->input->post('kecamatan', true),
            "kab_kota" => $this->input->post('kab_kota', true),
            "provinsi" => $this->input->post('provinsi', true),
            "no_telp" => $this->input->post('no_telp', true),
            "no_telp_gadar" => $this->input->post('telp_gadar', true),
            "no_faksimile" => $this->input->post('faks', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->insert('identitas_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('identitas_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
