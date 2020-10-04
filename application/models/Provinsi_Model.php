<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi_Model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "dipandu_jelas" => $this->input->post('penggerakkan1', true),
            "jadwal_jelas" => $this->input->post('penggerakkan2', true),
            "lintas_program" => $this->input->post('penggerakkan3', true),
            "dimonitor_kepala" => $this->input->post('penggerakkan4', true),
            "masukan_pelanggan" => $this->input->post('penggerakkan5', true),
            "pelayanan_pelanggan" => $this->input->post('penggerakkan6', true),
            "input_by" => $this->session->userdata('kode')

        ];
        $this->db->insert('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', $data);
    }
    public function check_puskesmas($kode)
    {
        return $this->db->get_where('user', ['kode' => $kode])->row_array();
    }
    public function data_kabupaten($kode)
    {
        return $this->db->get_where('user', ['kode' => $kode])->row_array();
    }
    public function check_kabupaten($provinsi)
    {
        $this->db->where('provinsi', $provinsi);
        $this->db->where('role_id', '2');
        return $this->db->get('user')->result_array();
    }

    public function ubahData()
    {
        $data = [
            "kode" => $this->input->post('kode_puskesmas'),
            "dipandu_jelas" => $this->input->post('penggerakkan1', true),
            "jadwal_jelas" => $this->input->post('penggerakkan2', true),
            "lintas_program" => $this->input->post('penggerakkan3', true),
            "dimonitor_kepala" => $this->input->post('penggerakkan4', true),
            "masukan_pelanggan" => $this->input->post('penggerakkan5', true),
            "pelayanan_pelanggan" => $this->input->post('penggerakkan6', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_puskesmas'));
        $this->db->update('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', $data);
    }

    public function check_penilaian_pembinaan($kode)
    {
        return $this->db->get_where('penilaian_pembinaan_terpadu', ['kode' => $kode])->row_array();
    }

    public function penilaian_pembinaan_tambah()
    {
        $data = [
            "kode" => $this->input->post('kode_kabupaten'),
            "cluster_binaan" => $this->input->post('pemantauan1', true),
            "sk_tim" => $this->input->post('pemantauan1a', true),
            "cluster_perwakilan" => $this->input->post('pemantauan1b', true),
            "pengenalan_peran" => $this->input->post('pemantauan2a', true),
            "nspk" => $this->input->post('pemantauan2b', true),
            "pengolahan_analisis" => $this->input->post('pemantauan2c', true),
            "trend_analysis" => $this->input->post('pemantauan3a', true),
            "lintas_sektor" => $this->input->post('pemantauan3b', true),
            "lintas_program" => $this->input->post('pemantauan3c', true),
            "tpt" => $this->input->post('pemantauan4a', true),
            "rincian_tpt" => $this->input->post('pemantauan4b', true),
            "simulasi_pembinaan" => $this->input->post('pemantauan5', true),
            "setiap_bulan" => $this->input->post('pemantauan6a', true),
            "internal" => $this->input->post('pemantauan6b', true),
            "1x_setahun" => $this->input->post('pemantauan6c', true),
            "monitoring_evaluasi" => $this->input->post('pemantauan6d', true),
            "tersusunnya_instrumen" => $this->input->post('pemantauan7a', true),
            "tersusunnya_laporan" => $this->input->post('pemantauan7b', true),
            "kesehatan_kabupaten" => $this->input->post('pemantauan7c', true),
            "akhir_tahun" => $this->input->post('pemantauan7d', true),
            "input_by" => $this->session->userdata('kode')

        ];
        $this->db->insert('penilaian_pembinaan_terpadu', $data);
    }

    public function ubah_penilaian_pembinaan()
    {
        $data = [
            "cluster_binaan" => $this->input->post('pemantauan1', true),
            "sk_tim" => $this->input->post('pemantauan1a', true),
            "cluster_perwakilan" => $this->input->post('pemantauan1b', true),
            "pengenalan_peran" => $this->input->post('pemantauan2a', true),
            "nspk" => $this->input->post('pemantauan2b', true),
            "pengolahan_analisis" => $this->input->post('pemantauan2c', true),
            "trend_analysis" => $this->input->post('pemantauan3a', true),
            "lintas_sektor" => $this->input->post('pemantauan3b', true),
            "lintas_program" => $this->input->post('pemantauan3c', true),
            "tpt" => $this->input->post('pemantauan4a', true),
            "rincian_tpt" => $this->input->post('pemantauan4b', true),
            "simulasi_pembinaan" => $this->input->post('pemantauan5', true),
            "setiap_bulan" => $this->input->post('pemantauan6a', true),
            "internal" => $this->input->post('pemantauan6b', true),
            "1x_setahun" => $this->input->post('pemantauan6c', true),
            "monitoring_evaluasi" => $this->input->post('pemantauan6d', true),
            "tersusunnya_instrumen" => $this->input->post('pemantauan7a', true),
            "tersusunnya_laporan" => $this->input->post('pemantauan7b', true),
            "kesehatan_kabupaten" => $this->input->post('pemantauan7c', true),
            "akhir_tahun" => $this->input->post('pemantauan7d', true),
            "input_by" => $this->session->userdata('kode')
        ];
        $this->db->where('kode', $this->input->post('kode_kabupaten'));
        $this->db->update('penilaian_pembinaan_terpadu', $data);
    }
}
