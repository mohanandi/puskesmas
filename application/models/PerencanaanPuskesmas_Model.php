<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerencanaanPuskesmas_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "puskesmas_tanah" => $this->input->post('lokasi1', true),
            "slf" => $this->input->post('lokasi2', true),
            "puskesmas_lereng" => $this->input->post('lokasi3', true),
            "puskesmas_longsor" => $this->input->post('lokasi4', true),
            "puskesmas_pondasi" => $this->input->post('lokasi5', true),
            "puskesmas_aktif" => $this->input->post('lokasi6', true),
            "puskesmas_tsunami" => $this->input->post('lokasi7', true),
            "puskesmas_banjir" => $this->input->post('lokasi8', true),
            "puskesmas_topan" => $this->input->post('lokasi9', true),
            "puskesmas_badai" => $this->input->post('lokasi10', true),
            "puskesmas_masyarakat" => $this->input->post('lokasi11', true),
            "puskesmas_transportasi" => $this->input->post('lokasi12'),
            "puskesmas_bersih" => $this->input->post('lokasi13', true),
            "fasilitas_bersih" => $this->input->post('lokasi14', true),
            "tersedia_bersih" => $this->input->post('lokasi15', true),
            "sutet" => $this->input->post('lokasi16', true)
        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
