<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengendalianInfeksi_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "cuci_tangan" => $this->input->post('pencegahan1a', true),
            "apd" => $this->input->post('pencegahan2a', true),
            "dekontaminasi" => $this->input->post('pencegahan3a', true),
            "kesehatan_lingkungan" => $this->input->post('pencegahan4a', true),
            "limbah_medis" => $this->input->post('pencegahan5a', true),
            "perlindungan_petugas" => $this->input->post('pencegahan6a', true),
            "pemisahan_pasien" => $this->input->post('pencegahan7a', true),
            "etika_batuk" => $this->input->post('pencegahan8a', true),
            "praktik_menyuntik" => $this->input->post('pencegahan9a', true),
            "kewaspadaan_kontak" => $this->input->post('pencegahan1b', true),
            "kewaspadaan_droplet" => $this->input->post('pencegahan2b', true),
            "air_borne" => $this->input->post('pencegahan3b'),
            "input_by" => $this->session->userdata('kode'),
            "tgl_input" => time()
        ];
        $this->db->insert('pencegahan_dan_pengendalian_infeksi', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('pencegahan_dan_pengendalian_infeksi', ['kode' => $kode])->row_array();
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
            "cuci_tangan" => $this->input->post('pencegahan1a', true),
            "apd" => $this->input->post('pencegahan2a', true),
            "dekontaminasi" => $this->input->post('pencegahan3a', true),
            "kesehatan_lingkungan" => $this->input->post('pencegahan4a', true),
            "limbah_medis" => $this->input->post('pencegahan5a', true),
            "perlindungan_petugas" => $this->input->post('pencegahan6a', true),
            "pemisahan_pasien" => $this->input->post('pencegahan7a', true),
            "etika_batuk" => $this->input->post('pencegahan8a', true),
            "praktik_menyuntik" => $this->input->post('pencegahan9a', true),
            "kewaspadaan_kontak" => $this->input->post('pencegahan1b', true),
            "kewaspadaan_droplet" => $this->input->post('pencegahan2b', true),
            "air_borne" => $this->input->post('pencegahan3b'),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_puskesmas'));
        $this->db->update('pencegahan_dan_pengendalian_infeksi', $data);
    }
}
