<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PemenuhanSD_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas', true),
            "standar_bangunan" => $this->input->post('pemenuhan1', true),
            "standar_prasarana" => $this->input->post('pemenuhan2', true),
            "standar_peralatan" => $this->input->post('pemenuhan3', true),
            "sedia_obat" => $this->input->post('pemenuhan4', true),
            "pengendali_obat" => $this->input->post('pemenuhan5', true),
            "pemenuhan_sdm" => $this->input->post('pemenuhan6', true),
            "sisrute" => $this->input->post('pemenuhan7', true),
            "informasi_puskesmas" => $this->input->post('pemenuhan8', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->insert('pemenuhan_sdm_puskesmas', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('pemenuhan_sdm_puskesmas', ['kode' => $kode])->row_array();
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
            "standar_bangunan" => $this->input->post('pemenuhan1', true),
            "standar_prasarana" => $this->input->post('pemenuhan2', true),
            "standar_peralatan" => $this->input->post('pemenuhan3', true),
            "sedia_obat" => $this->input->post('pemenuhan4', true),
            "pengendali_obat" => $this->input->post('pemenuhan5', true),
            "pemenuhan_sdm" => $this->input->post('pemenuhan6', true),
            "sisrute" => $this->input->post('pemenuhan7', true),
            "informasi_puskesmas" => $this->input->post('pemenuhan8', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_puskesmas'));
        $this->db->update('pemenuhan_sdm_puskesmas', $data);
    }
}
