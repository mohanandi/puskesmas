<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengendalianInfeksi_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "cuci_tangan" => $this->input->post('lokasi1', true),
            "apd" => $this->input->post('lokasi2', true),
            "dekontaminasi" => $this->input->post('lokasi3', true),
            "kesehatan_lingkungan" => $this->input->post('lokasi4', true),
            "limbah_medis" => $this->input->post('lokasi5', true),
            "perlindungan_petugas" => $this->input->post('lokasi6', true),
            "pemisahan_pasien" => $this->input->post('lokasi7', true),
            "etika_batuk" => $this->input->post('lokasi8', true),
            "praktik_menyuntik" => $this->input->post('lokasi9', true),
            "kewaspadaan_kontak" => $this->input->post('lokasi10', true),
            "kewaspadaan_droplet" => $this->input->post('lokasi11', true),
            "air_borne" => $this->input->post('lokasi12')
        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
