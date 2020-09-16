<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembinaTerpadu_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "pembina1" => $this->input->post('pembina1', true),
            "no_pembina1" => $this->input->post('no_pembina1', true),
            "pembina2" => $this->input->post('pembina2', true),
            "no_pembina2" => $this->input->post('no_pembina2', true),
            "pembina3" => $this->input->post('pembina3', true),
            "no_pembina3" => $this->input->post('no_pembina3', true),
            "tgl_pembinaan" => strtotime($this->input->post('tgl_pembinaan', true))
        ];
        $this->db->insert('tim_pembina_terpadu', $data);
    }
    public function check()
    {
        return $this->db->get_where('tim_pembina_terpadu', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}