<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndikatorProgram_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "kia1a" => $this->input->post('cakupan_a1a', true),
            "kia1b" => $this->input->post('cakupan_a1b', true),
            "kia1c" => $this->input->post('cakupan_a1c', true),
            "kia2a" => $this->input->post('cakupan_a2a', true),
            "kia2b" => $this->input->post('cakupan_a2b', true),
            "kia2c" => $this->input->post('cakupan_a2c', true),
            "kia3a" => $this->input->post('cakupan_a3a', true),
            "kia3b" => $this->input->post('cakupan_a3b', true),
            "kia3c" => $this->input->post('cakupan_a3c', true),
            "imunisasi1a" => $this->input->post('cakupan_b1a', true),
            "imunisasi1b" => $this->input->post('cakupan_b1b', true),
            "imunisasi1c" => $this->input->post('cakupan_b1c', true),
            "gizi1a" => $this->input->post('cakupan_c1a', true),
            "gizi1b" => $this->input->post('cakupan_c1b', true),
            "gizi1c" => $this->input->post('cakupan_c1c', true),
            "pencegahan1a" => $this->input->post('cakupan_d1a', true),
            "pencegahan1b" => $this->input->post('cakupan_d1b', true),
            "pencegahan1c" => $this->input->post('cakupan_d1c', true),
            "pencegahan2a" => $this->input->post('cakupan_d2a', true),
            "pencegahan2b" => $this->input->post('cakupan_d2b', true),
            "pencegahan2c" => $this->input->post('cakupan_d2c', true),
            "pencegahan3a" => $this->input->post('cakupan_d3a', true),
            "pencegahan3b" => $this->input->post('cakupan_d3b', true),
            "pencegahan3c" => $this->input->post('cakupan_d3c', true),
            "pencegahan4a" => $this->input->post('cakupan_d4a', true),
            "pencegahan4b" => $this->input->post('cakupan_d4b', true),
            "pencegahan4c" => $this->input->post('cakupan_d4c', true),
            "pencegahan5a" => $this->input->post('cakupan_d5a', true),
            "pencegahan5b" => $this->input->post('cakupan_d5b', true),
            "pencegahan5c" => $this->input->post('cakupan_d5c', true),
            "pencegahan6a" => $this->input->post('cakupan_d6a', true),
            "pencegahan6b" => $this->input->post('cakupan_d6b', true),
            "pencegahan6c" => $this->input->post('cakupan_d6c', true),
            "pencegahan7a" => $this->input->post('cakupan_d7a', true),
            "pencegahan7b" => $this->input->post('cakupan_d7b', true),
            "pencegahan7c" => $this->input->post('cakupan_d7c', true),
            "pencegahan8a" => $this->input->post('cakupan_d8a', true),
            "pencegahan8b" => $this->input->post('cakupan_d8b', true),
            "pencegahan8c" => $this->input->post('cakupan_d8c', true),
            "pispk1a" => $this->input->post('cakupan_e1a', true),
            "pispk1b" => $this->input->post('cakupan_e1b', true),
            "pispk1c" => $this->input->post('cakupan_e1c', true),
            "pispk2a" => $this->input->post('cakupan_e2a', true),
            "pispk2b" => $this->input->post('cakupan_e2b', true),
            "pispk2c" => $this->input->post('cakupan_e2c', true),
            "pispk3a" => $this->input->post('cakupan_e3a', true),
            "pispk3b" => $this->input->post('cakupan_e3b', true),
            "pispk3c" => $this->input->post('cakupan_e3c', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->insert('cakupan_indikator_program', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('cakupan_indikator_program', ['kode' => $kode])->row_array();
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
            "kia1a" => $this->input->post('cakupan_a1a', true),
            "kia1b" => $this->input->post('cakupan_a1b', true),
            "kia1c" => $this->input->post('cakupan_a1c', true),
            "kia2a" => $this->input->post('cakupan_a2a', true),
            "kia2b" => $this->input->post('cakupan_a2b', true),
            "kia2c" => $this->input->post('cakupan_a2c', true),
            "kia3a" => $this->input->post('cakupan_a3a', true),
            "kia3b" => $this->input->post('cakupan_a3b', true),
            "kia3c" => $this->input->post('cakupan_a3c', true),
            "imunisasi1a" => $this->input->post('cakupan_b1a', true),
            "imunisasi1b" => $this->input->post('cakupan_b1b', true),
            "imunisasi1c" => $this->input->post('cakupan_b1c', true),
            "gizi1a" => $this->input->post('cakupan_c1a', true),
            "gizi1b" => $this->input->post('cakupan_c1b', true),
            "gizi1c" => $this->input->post('cakupan_c1c', true),
            "pencegahan1a" => $this->input->post('cakupan_d1a', true),
            "pencegahan1b" => $this->input->post('cakupan_d1b', true),
            "pencegahan1c" => $this->input->post('cakupan_d1c', true),
            "pencegahan2a" => $this->input->post('cakupan_d2a', true),
            "pencegahan2b" => $this->input->post('cakupan_d2b', true),
            "pencegahan2c" => $this->input->post('cakupan_d2c', true),
            "pencegahan3a" => $this->input->post('cakupan_d3a', true),
            "pencegahan3b" => $this->input->post('cakupan_d3b', true),
            "pencegahan3c" => $this->input->post('cakupan_d3c', true),
            "pencegahan4a" => $this->input->post('cakupan_d4a', true),
            "pencegahan4b" => $this->input->post('cakupan_d4b', true),
            "pencegahan4c" => $this->input->post('cakupan_d4c', true),
            "pencegahan5a" => $this->input->post('cakupan_d5a', true),
            "pencegahan5b" => $this->input->post('cakupan_d5b', true),
            "pencegahan5c" => $this->input->post('cakupan_d5c', true),
            "pencegahan6a" => $this->input->post('cakupan_d6a', true),
            "pencegahan6b" => $this->input->post('cakupan_d6b', true),
            "pencegahan6c" => $this->input->post('cakupan_d6c', true),
            "pencegahan7a" => $this->input->post('cakupan_d7a', true),
            "pencegahan7b" => $this->input->post('cakupan_d7b', true),
            "pencegahan7c" => $this->input->post('cakupan_d7c', true),
            "pencegahan8a" => $this->input->post('cakupan_d8a', true),
            "pencegahan8b" => $this->input->post('cakupan_d8b', true),
            "pencegahan8c" => $this->input->post('cakupan_d8c', true),
            "pispk1a" => $this->input->post('cakupan_e1a', true),
            "pispk1b" => $this->input->post('cakupan_e1b', true),
            "pispk1c" => $this->input->post('cakupan_e1c', true),
            "pispk2a" => $this->input->post('cakupan_e2a', true),
            "pispk2b" => $this->input->post('cakupan_e2b', true),
            "pispk2c" => $this->input->post('cakupan_e2c', true),
            "pispk3a" => $this->input->post('cakupan_e3a', true),
            "pispk3b" => $this->input->post('cakupan_e3b', true),
            "pispk3c" => $this->input->post('cakupan_e3c', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_puskesmas'));
        $this->db->update('cakupan_indikator_program', $data);
    }
}
