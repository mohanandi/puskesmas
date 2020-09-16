<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SDM_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "kepala" => $this->input->post('sdm1', true),
            "dokter1" => $this->input->post('sdmdokter1', true),
            "dokter2" => $this->input->post('sdmdokter2', true),
            "dokter3" => $this->input->post('sdmdokter3', true),
            "dokter4" => $this->input->post('sdmdokter4', true),
            "dokter5" => $this->input->post('sdmdokter5', true),
            "dokter6" => $this->input->post('sdmdokter6', true),
            "dlp1" => $this->input->post('sdmdlp1', true),
            "dlp2" => $this->input->post('sdmdlp2', true),
            "dlp3" => $this->input->post('sdmdlp3', true),
            "dlp4" => $this->input->post('sdmdlp4', true),
            "dlp5" => $this->input->post('sdmdlp5'),
            "dlp6" => $this->input->post('sdmdlp6', true),
            "gigi1" => $this->input->post('sdmgigi1', true),
            "gigi2" => $this->input->post('sdmgigi2', true),
            "gigi3" => $this->input->post('sdmgigi3', true),
            "gigi4" => $this->input->post('sdmgigi4', true),
            "gigi5" => $this->input->post('sdmgigi5', true),
            "gigi6" => $this->input->post('sdmgigi6', true),
            "perawat1" => $this->input->post('sdmperawat1', true),
            "perawat2" => $this->input->post('sdmperawat2', true),
            "perawat3" => $this->input->post('sdmperawat3', true),
            "perawat4" => $this->input->post('sdmperawat4', true),
            "perawat5" => $this->input->post('sdmperawat5', true),
            "perawat6" => $this->input->post('sdmperawat6', true),
            "bidan1" => $this->input->post('sdmbidan1', true),
            "bidan2" => $this->input->post('sdmbidan2', true),
            "bidan3" => $this->input->post('sdmbidan3', true),
            "bidan4" => $this->input->post('sdmbidan4', true),
            "bidan5" => $this->input->post('sdmbidan5', true),
            "bidan6" => $this->input->post('sdmbidan6', true),
            "promosi1" => $this->input->post('sdmpromosi1', true),
            "promosi2" => $this->input->post('sdmpromosi2', true),
            "promosi3" => $this->input->post('sdmpromosi3', true),
            "promosi4" => $this->input->post('sdmpromosi4', true),
            "promosi5" => $this->input->post('sdmpromosi5', true),
            "promosi6" => $this->input->post('sdmpromosi6', true),
            "sanitasi1" => $this->input->post('sdmsanitasi1', true),
            "sanitasi2" => $this->input->post('sdmsanitasi2', true),
            "sanitasi3" => $this->input->post('sdmsanitasi3', true),
            "sanitasi4" => $this->input->post('sdmsanitasi4', true),
            "sanitasi5" => $this->input->post('sdmsanitasi5', true),
            "sanitasi6" => $this->input->post('sdmsanitasi6', true),
            "apoteker1" => $this->input->post('sdmapoteker1', true),
            "apoteker2" => $this->input->post('sdmapoteker2', true),
            "apoteker3" => $this->input->post('sdmapoteker3', true),
            "apoteker4" => $this->input->post('sdmapoteker4', true),
            "apoteker5" => $this->input->post('sdmapoteker5', true),
            "apoteker6" => $this->input->post('sdmapoteker6', true),
            "kefarmasian1" => $this->input->post('sdmkefarmasian1', true),
            "kefarmasian2" => $this->input->post('sdmkefarmasian2', true),
            "kefarmasian3" => $this->input->post('sdmkefarmasian3', true),
            "kefarmasian4" => $this->input->post('sdmkefarmasian4', true),
            "kefarmasian5" => $this->input->post('sdmkefarmasian5', true),
            "kefarmasian6" => $this->input->post('sdmkefarmasian6', true),
            "ahli1" => $this->input->post('sdmahli1', true),
            "ahli2" => $this->input->post('sdmahli2', true),
            "ahli3" => $this->input->post('sdmahli3', true),
            "ahli4" => $this->input->post('sdmahli4', true),
            "ahli5" => $this->input->post('sdmahli5', true),
            "ahli6" => $this->input->post('sdmahli6', true),
            "kesehatan1" => $this->input->post('sdmkesehatan1', true),
            "kesehatan2" => $this->input->post('sdmkesehatan2', true),
            "kesehatan3" => $this->input->post('sdmkesehatan3', true),
            "kesehatan4" => $this->input->post('sdmkesehatan4', true),
            "kesehatan5" => $this->input->post('sdmkesehatan5', true),
            "kesehatan6" => $this->input->post('sdmkesehatan6', true),
            "keuangan1" => $this->input->post('sdmkeuangan1', true),
            "keuangan2" => $this->input->post('sdmkeuangan2', true),
            "keuangan3" => $this->input->post('sdmkeuangan3', true),
            "keuangan4" => $this->input->post('sdmkeuangan4', true),
            "keuangan5" => $this->input->post('sdmkeuangan5', true),
            "keuangan6" => $this->input->post('sdmkeuangan6', true),
            "tatausaha1" => $this->input->post('sdmtatausaha1', true),
            "tatausaha1" => $this->input->post('sdmtatausaha2', true),
            "tatausaha3" => $this->input->post('sdmtatausaha3', true),
            "tatausaha4" => $this->input->post('sdmtatausaha4', true),
            "tatausaha5" => $this->input->post('sdmtatausaha5', true),
            "tatausaha6" => $this->input->post('sdmtatausaha6', true),
            "pekarya1" => $this->input->post('sdmpekarya1', true),
            "pekarya2" => $this->input->post('sdmpekarya2', true),
            "pekarya3" => $this->input->post('sdmpekarya3', true),
            "pekarya4" => $this->input->post('sdmpekarya4', true),
            "pekarya5" => $this->input->post('sdmpekarya5', true),
            "pekarya6" => $this->input->post('sdmpekarya6', true),
            "tradisional1" => $this->input->post('sdmtradisional1', true),
            "tradisional2" => $this->input->post('sdmtradisional2', true),
            "tradisional3" => $this->input->post('sdmtradisional3', true),
            "tradisional4" => $this->input->post('sdmtradisional4', true),
            "tradisional5" => $this->input->post('sdmtradisional5', true),
            "tradisional6" => $this->input->post('sdmtradisional6', true),
            "titik1" => $this->input->post('sdmtitik1', true),
            "titik2" => $this->input->post('sdmtitik2', true),
            "titik3" => $this->input->post('sdmtitik3', true),
            "titik4" => $this->input->post('sdmtitik4', true),
            "titik5" => $this->input->post('sdmtitik5', true),
            "titik6" => $this->input->post('sdmtitik6', true),
            "titik7" => $this->input->post('sdmtitik7', true)
        ];
        $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('sumber_daya_manusia', ['kode' => $this->session->userdata('kode')])->row_array();
    }
}
