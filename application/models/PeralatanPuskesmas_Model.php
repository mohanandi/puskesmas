<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PeralatanPuskesmas_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "set_umum" => $this->input->post('peralatan1', true),
            "set_tindakan" => $this->input->post('peralatan2', true),
            "set_ibu" => $this->input->post('peralatan3', true),
            "set_anak" => $this->input->post('peralatan4', true),
            "set_kb" => $this->input->post('peralatan5', true),
            "set_imun" => $this->input->post('peralatan6', true),
            "set_obstetri" => $this->input->post('peralatan7', true),
            "set_akdr" => $this->input->post('peralatan8', true),
            "set_bayi" => $this->input->post('peralatan9', true),
            "set_maternal" => $this->input->post('peralatan10', true),
            "set_pasca" => $this->input->post('peralatan11', true),
            "set_khusus" => $this->input->post('peralatan12', true),
            "set_gigi" => $this->input->post('peralatan13', true),
            "set_kie" => $this->input->post('peralatan14', true),
            "set_asi" => $this->input->post('peralatan15', true),
            "set_lab" => $this->input->post('peralatan16', true),
            "set_farmasi" => $this->input->post('peralatan17', true),
            "set_inap" => $this->input->post('peralatan18', true),
            "set_steril" => $this->input->post('peralatan19', true),
            "set_alat" => $this->input->post('peralatan20', true),
            "set_kel" => $this->input->post('peralatan21', true),
            "kit_kkm" => $this->input->post('peralatan22', true),
            "kit_imun" => $this->input->post('peralatan23', true),
            "kit_uks" => $this->input->post('peralatan24', true),
            "kit_ukgs" => $this->input->post('peralatan25', true),
            "kit_bidan" => $this->input->post('peralatan26', true),
            "kit_posyandu" => $this->input->post('peralatan27', true),
            "kit_sanitarian" => $this->input->post('peralatan28', true),
            "kit_ptm" => $this->input->post('peralatan29', true),
            "kit_sdidtk" => $this->input->post('peralatan30', true),
            "puskesmas_hg" => $this->input->post('peralatan31', true),
            "kalibrasi" => $this->input->post('peralatan32', true),
            "ijin_edar" => $this->input->post('peralatan33', true),
            "pd_tempatnya" => $this->input->post('peralatan34', true),
            "dlm_negri" => $this->input->post('peralatan35', true),
            "tgl_input" => time()
        ];
        $this->db->insert('peralatan_puskesmas', $data);
    }
    public function check()
    {
        return $this->db->get_where('peralatan_puskesmas', ['kode' => $this->session->userdata('kode')])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "kode" => $this->session->userdata('kode'),
            "set_umum" => $this->input->post('peralatan1', true),
            "set_tindakan" => $this->input->post('peralatan2', true),
            "set_ibu" => $this->input->post('peralatan3', true),
            "set_anak" => $this->input->post('peralatan4', true),
            "set_kb" => $this->input->post('peralatan5', true),
            "set_imun" => $this->input->post('peralatan6', true),
            "set_obstetri" => $this->input->post('peralatan7', true),
            "set_akdr" => $this->input->post('peralatan8', true),
            "set_bayi" => $this->input->post('peralatan9', true),
            "set_maternal" => $this->input->post('peralatan10', true),
            "set_pasca" => $this->input->post('peralatan11', true),
            "set_khusus" => $this->input->post('peralatan12', true),
            "set_gigi" => $this->input->post('peralatan13', true),
            "set_kie" => $this->input->post('peralatan14', true),
            "set_asi" => $this->input->post('peralatan15', true),
            "set_lab" => $this->input->post('peralatan16', true),
            "set_farmasi" => $this->input->post('peralatan17', true),
            "set_inap" => $this->input->post('peralatan18', true),
            "set_steril" => $this->input->post('peralatan19', true),
            "set_alat" => $this->input->post('peralatan20', true),
            "set_kel" => $this->input->post('peralatan21', true),
            "kit_kkm" => $this->input->post('peralatan22', true),
            "kit_imun" => $this->input->post('peralatan23', true),
            "kit_uks" => $this->input->post('peralatan24', true),
            "kit_ukgs" => $this->input->post('peralatan25', true),
            "kit_bidan" => $this->input->post('peralatan26', true),
            "kit_posyandu" => $this->input->post('peralatan27', true),
            "kit_sanitarian" => $this->input->post('peralatan28', true),
            "kit_ptm" => $this->input->post('peralatan29', true),
            "kit_sdidtk" => $this->input->post('peralatan30', true),
            "puskesmas_hg" => $this->input->post('peralatan31', true),
            "kalibrasi" => $this->input->post('peralatan32', true),
            "ijin_edar" => $this->input->post('peralatan33', true),
            "pd_tempatnya" => $this->input->post('peralatan34', true),
            "dlm_negri" => $this->input->post('peralatan35', true)
        ];

        $this->db->where('kode', $this->session->userdata('kode'));
        $this->db->update('peralatan_puskesmas', $data);
    }
}
