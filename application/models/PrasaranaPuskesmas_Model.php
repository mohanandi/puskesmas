<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrasaranaPuskesmas_Model extends CI_Model
{
 public function tambahData()
 {
  $data = [
   "kode" => $this->session->userdata('kode'),
   "ventilasi_alami" => $this->input->post('prasarana1_1', true),
   "ac_farmasi" => $this->input->post('prasarana1_2', true),
   "ac_tindakan" => $this->input->post('prasarana1_3', true),
   "ac_persalinan" => $this->input->post('prasarana1_4', true),
   "ac_lab" => $this->input->post('prasarana1_5', true),
   "lab_ac" => $this->input->post('prasarana1_6', true),
   "ventilasi_tunggu" => $this->input->post('prasarana1_7', true),
   "udara_puskesmas" => $this->input->post('prasarana1_8', true),
   "udara_berbau" => $this->input->post('prasarana1_9', true),
   "kelembapan" => $this->input->post('prasarana1_10', true)
   "laju_ventilasi" => $this->input->post('prasarana1_11', true)
   "pencahayaan" => $this->input->post('prasarana2_1', true)
   "duaratus" => $this->input->post('prasarana2_2', true)
   "tigaratus" => $this->input->post('prasarana2_3', true)
   "seratus" => $this->input->post('prasarana2_4', true)
   "hygiene" => $this->input->post('prasarana3_1', true)
   "limabelas" => $this->input->post('prasarana3_2', true)
   "empatpuluh" => $this->input->post('prasarana3_3', true)
   "hygiene_seratus" => $this->input->post('prasarana3_4', true)
   "sumber_air" => $this->input->post('prasarana3_5', true)
   "saluran_air" => $this->input->post('prasarana3_6', true)
   "ipal" => $this->input->post('prasarana3_7', true)
   "sampah_dua" => $this->input->post('prasarana3_8', true)
   "pemilihan" => $this->input->post('prasarana3_9', true)
   "tps" => $this->input->post('prasarana3_10', true)
   "westafel" => $this->input->post('prasarana3_11', true)
   "serbet" => $this->input->post('prasarana3_12', true)
   "handrub" => $this->input->post('prasarana3_13', true)
   "septik_tank" => $this->input->post('prasarana3_14', true)
   "listrik_puskesmas" => $this->input->post('prasarana4_1', true)
   "daya_listrik" => $this->input->post('prasarana4_2', true)
   "listrik_cadangan" => $this->input->post('prasarana4_3', true)
   "kekuatan_cadangan" => $this->input->post('prasarana4_4', true)
   "listrik_sehari" => $this->input->post('prasarana4_5', true)
   "listrik_mencukupi" => $this->input->post('prasarana4_6', true)
   "listrik_minimal" => $this->input->post('prasarana4_7', true)
   "peletakan_kabel" => $this->input->post('prasarana4_8', true)
   "saluran_tlp" => $this->input->post('prasarana5_a', true)
   "saluran_seluler" => $this->input->post('prasarana5_b', true)
   "tlp_gadar" => $this->input->post('prasarana5_c', true)
   "internet" => $this->input->post('prasarana5_d', true)
   "pemanggilan_jelas" => $this->input->post('prasarana5_e', true)
   "sistem_antrian" => $this->input->post('prasarana5_f', true)
   "mesin_nomor" => $this->input->post('prasarana5_g', true)
   "tv_urut" => $this->input->post('prasarana5_h', true)
   "perkiraan_waktu" => $this->input->post('prasarana5_i', true)
   "gas_putih" => $this->input->post('prasarana6_1', true)
   "gas_aman" => $this->input->post('prasarana6_2', true)
   "gas_tutup" => $this->input->post('prasarana6_3', true)
   "proteksi" => $this->input->post('prasarana7_1', true)
   "apar" => $this->input->post('prasarana8_1', true)
   "apar_dua" => $this->input->post('prasarana8_2', true)
   "apar_dinding" => $this->input->post('prasarana8_3', true)
   "apar_co" => $this->input->post('prasarana8_4', true)
   "kebisingan_luar" => $this->input->post('prasarana9_1', true)
   "kebisingan_dlm" => $this->input->post('prasarana9_2', true)
   "bila_tangga" => $this->input->post('prasarana10_a', true)
   "bila_ram" => $this->input->post('prasarana10_b', true)
   "keliling_unit" => $this->input->post('prasarana11_a1', true)
   "kendaraan_ada" => $this->input->post('prasarana11_a2', true)
   "ambulan_unit" => $this->input->post('prasarana11_b1', true)
   "ambulan_ada" => $this->input->post('prasarana11_b2', true)
   "roda_unit" => $this->input->post('prasarana11_c1', true)
   "roda_ada" => $this->input->post('prasarana11_c2', true)
   "puskesmas_keliling" => $this->input->post('prasarana11_d', true)
   "ambulan_baik" => $this->input->post('prasarana11_e', true)
   "rujukan" => $this->input->post('prasarana11_f', true)

  ];
  $this->db->insert('prasarana_puskesmas', $data);
 }
}
