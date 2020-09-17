<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerencanaanPuskesmas_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "rpk_n" => $this->input->post('perencanaan1_a', true),
            "ruk" => $this->input->post('perencanaan1_b1', true),
            "rpk_rinci" => $this->input->post('perencanaan1_b2', true),
            "draft_rka" => $this->input->post('perencanaan1_b3', true),
            "ruk_mendatang" => $this->input->post('perencanaan1_c', true),
            "ada_hasil" => $this->input->post('perencanaan1_d1', true),
            "umpan_balik" => $this->input->post('perencanaan1_d2a', true),
            "tabulasi_wawancara" => $this->input->post('perencanaan1_d2b', true),
            "hasil_smd" => $this->input->post('perencanaan1_d2c', true),
            "penyelarasan_mmd" => $this->input->post('perencanaan1_d3', true),
            "berita_acara" => $this->input->post('perencanaan1_d4', true),
            "laporan_penanggung" => $this->input->post('perencanaan1_d5'),
            "laporan_lokakarya" => $this->input->post('perencanaan1_d6', true),
            "lokakarya_mini" => $this->input->post('perencanaan1_d7', true),
            "hasil_lokakarya" => $this->input->post('perencanaan1_d8', true),
            "draft_ruk" => $this->input->post('perencanaan1_d9', true),
            "ruk_dinkes" => $this->input->post('perencanaan1_d10', true),
            "rankaian_menunjang" => $this->input->post('perencanaan2a', true),
            "upaya_tercapai" => $this->input->post('perencanaan2b', true),
            "pelaksanaan_ukp" => $this->input->post('perencanaan2c', true),
            "formasi_abk" => $this->input->post('perencanaan3a', true),
            "sdm_abk" => $this->input->post('perencanaan3b', true),
            "tindak_lanjut" => $this->input->post('perencanaan3c_1', true),
            "perencanaan_peralatan" => $this->input->post('perencanaan3c_2', true),
            "ada_tindak" => $this->input->post('perencanaan3c_3', true),
            "kondisi_sarana" => $this->input->post('perencanaan3c_4', true),
            "dokumen_perencanaan" => $this->input->post('perencanaan3c_5', true),
            "alokasi_kebutuhan" => $this->input->post('perencanaan3c_6', true),
            "usulan_pengadaan" => $this->input->post('perencanaan3c_7', true),
            "input_by" => $this->session->userdata('kode'),

        ];
        var_dump($data);
        echo "<br><br>";
        var_dump($this->input->post());
        // $this->db->insert('lokasi_puskesmas', $data);
    }
    public function check($kode)
    {
        return $this->db->get_where('lokasi_puskesmas', ['kode' => $kode])->row_array();
    }
    public function check_puskesmas($kab_kota)
    {
        $this->db->where('kab_kota', $kab_kota);
        $this->db->where('role_id', '3');
        return $this->db->get('user')->result_array();
    }
}
