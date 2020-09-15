<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BangunanPuskesmas_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "nama" => $this->input->post('nama', true),
            "no_reg" => $this->input->post('no_reg', true),
            "tgl_pendirian" => strtotime($this->input->post('tgl_diri', true)),
        ];
        $this->db->insert('identitas_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('identitas_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
