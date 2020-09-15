<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LokasiPuskesmas_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "puskesmas_tanah" => $this->input->post('lokasi1', true),
            "slf" => $this->input->post('lokasi2'),
            "puskesmas_lereng" => $this->input->post('lokasi3', true),
            "puskesmas_longsor" => $this->input->post('lokasi4'),
            "puskesmas_pondasi" => $this->input->post('lokasi5'),
            "puskesmas_aktif" => $this->input->post('lokasi6', true),
            "puskesmas_tsunami" => $this->input->post('lokasi7'),
            "puskesmas_banjir" => $this->input->post('lokasi8', true),
            "puskesmas_topan" => $this->input->post('lokasi9'),
            "puskesmas_badai" => $this->input->post('lokasi10'),
            "puskesmas_masyarakat" => $this->input->post('lokasi11', true),
            "puskesmas_transportasi" => $this->input->post('lokasi12'),
            "puskesmas_bersih" => $this->input->post('lokasi13', true),
            "fasilitas_bersih" => $this->input->post('lokasi14'),
            "tersedia_bersih" => $this->input->post('lokasi15'),
            "sutet" => $this->input->post('lokasi16'),
            

            "tgl_pendirian" => strtotime($this->input->post('tgl_diri', true)),
        ];
        $this->db->insert('identitas_puskesmas', $data);
    
}
