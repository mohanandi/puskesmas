<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndikatorProgram_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "kia1" => $this->input->post('cakupan1a', true),
            "kia2" => $this->input->post('cakupan2a', true),
            "kia3" => $this->input->post('cakupan3a', true),
            "imunisasi1" => $this->input->post('cakupan1b', true),
            "gizi1" => $this->input->post('cakupan1c', true),
            "pencegahan1" => $this->input->post('cakupan1d', true),
            "pencegahan2" => $this->input->post('cakupan2d', true),
            "pencegahan3" => $this->input->post('cakupan3d', true),
            "pencegahan4" => $this->input->post('cakupan4d', true),
            "pencegahan5" => $this->input->post('cakupan5d', true),
            "pencegahan6" => $this->input->post('cakupan6d', true),
            "pencegahan7" => $this->input->post('cakupan7d', true),
            "pencegahan8" => $this->input->post('cakupan8d', true),
            "pispk1" => $this->input->post('cakupan1e', true),
            "pispk2" => $this->input->post('cakupan2e', true),
            "pispk3" => $this->input->post('cakupan3e', true)
        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
