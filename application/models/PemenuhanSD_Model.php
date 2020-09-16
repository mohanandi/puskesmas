<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PemenuhanSD_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "standar_bangunan" => $this->input->post('pemenuhan1', true),
            "standar_prasarana" => $this->input->post('pemenuhan2', true),
            "standar_peralatan" => $this->input->post('pemenuhan3', true),
            "sedia_obat" => $this->input->post('pemenuhan4', true),
            "pengendali_obat" => $this->input->post('pemenuhan5', true),
            "pemenuhan_sdm" => $this->input->post('pemenuhan6', true),
            "sisrute" => $this->input->post('pemenuhan7', true),
            "informasi_puskesmas" => $this->input->post('pemenuhan8', true)

        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
