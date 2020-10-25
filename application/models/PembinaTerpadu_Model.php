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
            "pembina4" => $this->input->post('pembina4', true),
            "no_pembina4" => $this->input->post('no_pembina4', true),
            "pembina5" => $this->input->post('pembina5', true),
            "no_pembina5" => $this->input->post('no_pembina5', true),
            "tgl_pembinaan" => strtotime($this->input->post('tgl_pembinaan', true))
        ];
        $this->db->insert('tim_pembina_terpadu', $data);
    }
    public function check()
    {
        return $this->db->get_where('tim_pembina_terpadu', ['kode' => $this->session->userdata('kode')])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "pembina1" => $this->input->post('pembina1', true),
            "no_pembina1" => $this->input->post('no_pembina1', true),
            "pembina2" => $this->input->post('pembina2', true),
            "no_pembina2" => $this->input->post('no_pembina2', true),
            "pembina3" => $this->input->post('pembina3', true),
            "no_pembina3" => $this->input->post('no_pembina3', true),
            "pembina4" => $this->input->post('pembina4', true),
            "no_pembina4" => $this->input->post('no_pembina4', true),
            "pembina5" => $this->input->post('pembina5', true),
            "no_pembina5" => $this->input->post('no_pembina5', true),
            "tgl_pembinaan" => strtotime($this->input->post('tgl_pembinaan', true))
        ];

        $this->db->where('kode', $this->session->userdata('kode'));
        $this->db->update('tim_pembina_terpadu', $data);
    }
}
