<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('kode')) {
        redirect('auth');
    } else {
        // $role_id = $ci->session->userdata('role_id');
        // $menu = $ci->uri->segment(1);

        // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        // $menu_id = $queryMenu['id'];

        // $userAccess = $ci->db->get_where('user_access_menu', [
        //     'role_id' => $role_id,
        //     'menu_id' => $menu_id
        // ]);

        // if ($userAccess->num_rows() < 1) {
        //     redirect('auth/blocked');
        // }
    }
}


function puskesmas($kab_kota)
{
    $ci = get_instance();

    $ci->db->where('kab_kota', $kab_kota);
    $ci->db->where('role_id', '3');
    return $ci->db->get('user')->result_array();
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function is_terisi($data, $name)
{
    $ci = get_instance();
    $database = $data;
    if ($data) :
        if ($name) :
            echo '<option value="' . $name . '">' . $name . '</option>';
        else :
            echo "<option value='$database'> $database </option>";
        endif;
    else :
        if ($name) :
            echo '<option value="' . $name . '">' . $name . '</option>';
        else :
            echo "<option selected>Pilih ...</option>";
        endif;
    endif;
}

function pemenuhan_sd($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['standar_bangunan'] == 1) {
        $nilai1 = 10;
    } else if ($data['standar_bangunan'] == 2) {
        $nilai1 = 5;
    } else if ($data['standar_bangunan'] == 3) {
        $nilai1 = 0;
    }
    if ($data['standar_prasarana'] == 1) {
        $nilai2 = 10;
    } else if ($data['standar_prasarana'] == 2) {
        $nilai2 = 5;
    } else if ($data['standar_prasarana'] == 3) {
        $nilai2 = 0;
    }

    if ($data['standar_peralatan'] == 1) {
        $nilai3 = 10;
    } else if ($data['standar_peralatan'] == 2) {
        $nilai3 = 5;
    } else if ($data['standar_peralatan'] == 3) {
        $nilai3 = 0;
    }
    if ($data['sedia_obat'] == 1) {
        $nilai4 = 10;
    } else if ($data['sedia_obat'] == 2) {
        $nilai4 = 5;
    } else if ($data['sedia_obat'] == 3) {
        $nilai4 = 0;
    }
    if ($data['pengendali_obat'] == 1) {
        $nilai5 = 10;
    } else if ($data['pengendali_obat'] == 2) {
        $nilai5 = 5;
    } else if ($data['pengendali_obat'] == 3) {
        $nilai5 = 0;
    }

    if ($data['pemenuhan_sdm'] == 1) {
        $nilai6 = 10;
    } else if ($data['pemenuhan_sdm'] == 2) {
        $nilai6 = 5;
    } else if ($data['pemenuhan_sdm'] == 3) {
        $nilai6 = 0;
    }
    if ($data['sisrute'] == 1) {
        $nilai7 = 10;
    } else if ($data['sisrute'] == 2) {
        $nilai7 = 5;
    } else if ($data['sisrute'] == 3) {
        $nilai7 = 0;
    }
    if ($data['informasi_puskesmas'] == 1) {
        $nilai8 = 10;
    } else if ($data['informasi_puskesmas'] == 2) {
        $nilai8 = 5;
    } else if ($data['informasi_puskesmas'] == 3) {
        $nilai8 = 0;
    }

    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8;
}
function perencanaan_puskesmas($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['rpk_n'] == 1) {
        $nilai1 = 10;
    } else if ($data['rpk_n'] == 2) {
        $nilai1 = 0;
    }
    if ($data['ruk'] == 1) {
        $nilai2 = 10;
    } else if ($data['ruk'] == 2) {
        $nilai2 = 5;
    } else if ($data['ruk'] == 3) {
        $nilai2 = 0;
    }

    if ($data['rpk_rinci'] == 1) {
        $nilai3 = 10;
    } else if ($data['rpk_rinci'] == 2) {
        $nilai3 = 5;
    } else if ($data['rpk_rinci'] == 3) {
        $nilai3 = 0;
    }

    if ($data['draft_rka'] == 1) {
        $nilai4 = 10;
    } else if ($data['draft_rka'] == 2) {
        $nilai4 = 5;
    } else if ($data['draft_rka'] == 3) {
        $nilai4 = 0;
    }

    if ($data['ruk_mendatang'] == 1) {
        $nilai5 = 10;
    } else if ($data['ruk_mendatang'] == 2) {
        $nilai5 = 0;
    }

    if ($data['ada_hasil'] == 1) {
        $nilai6 = 10;
    } else if ($data['ada_hasil'] == 2) {
        $nilai6 = 5;
    } else if ($data['ada_hasil'] == 3) {
        $nilai6 = 0;
    }

    if ($data['umpan_balik'] == 1) {
        $nilai7 = 10;
    } else if ($data['umpan_balik'] == 2) {
        $nilai7 = 5;
    } else if ($data['umpan_balik'] == 3) {
        $nilai7 = 0;
    }

    if ($data['tabulasi_wawancara'] == 1) {
        $nilai8 = 10;
    } else if ($data['tabulasi_wawancara'] == 2) {
        $nilai8 = 5;
    } else if ($data['tabulasi_wawancara'] == 3) {
        $nilai8 = 0;
    }

    if ($data['hasil_smd'] == 1) {
        $nilai9 = 10;
    } else if ($data['hasil_smd'] == 2) {
        $nilai9 = 5;
    } else if ($data['hasil_smd'] == 3) {
        $nilai9 = 0;
    }

    if ($data['penyelarasan_mmd'] == 1) {
        $nilai10 = 10;
    } else if ($data['penyelarasan_mmd'] == 2) {
        $nilai10 = 5;
    } else if ($data['penyelarasan_mmd'] == 3) {
        $nilai10 = 0;
    }
    if ($data['berita_acara'] == 1) {
        $nilai11 = 10;
    } else if ($data['berita_acara'] == 2) {
        $nilai11 = 5;
    } else if ($data['berita_acara'] == 3) {
        $nilai11 = 0;
    }
    if ($data['laporan_penanggung'] == 1) {
        $nilai12 = 10;
    } else if ($data['laporan_penanggung'] == 2) {
        $nilai12 = 5;
    } else if ($data['laporan_penanggung'] == 3) {
        $nilai12 = 0;
    }
    if ($data['laporan_lokakarya'] == 1) {
        $nilai13 = 10;
    } else if ($data['laporan_lokakarya'] == 2) {
        $nilai13 = 5;
    } else if ($data['laporan_lokakarya'] == 3) {
        $nilai13 = 0;
    }
    if ($data['lokakarya_mini'] == 1) {
        $nilai14 = 10;
    } else if ($data['lokakarya_mini'] == 2) {
        $nilai14 = 5;
    } else if ($data['lokakarya_mini'] == 3) {
        $nilai14 = 0;
    }
    if ($data['hasil_lokakarya'] == 1) {
        $nilai15 = 10;
    } else if ($data['hasil_lokakarya'] == 2) {
        $nilai15 = 0;
    }
    if ($data['draft_ruk'] == 1) {
        $nilai16 = 10;
    } else if ($data['draft_ruk'] == 2) {
        $nilai16 = 5;
    } else if ($data['draft_ruk'] == 3) {
        $nilai16 = 0;
    }
    if ($data['ruk_dinkes'] == 1) {
        $nilai17 = 10;
    } else if ($data['ruk_dinkes'] == 2) {
        $nilai17 = 5;
    } else if ($data['ruk_dinkes'] == 3) {
        $nilai17 = 0;
    }
    if ($data['rankaian_menunjang'] == 1) {
        $nilai18 = 10;
    } else if ($data['rankaian_menunjang'] == 2) {
        $nilai18 = 5;
    } else if ($data['rankaian_menunjang'] == 3) {
        $nilai18 = 0;
    }
    if ($data['upaya_tercapai'] == 1) {
        $nilai19 = 10;
    } else if ($data['upaya_tercapai'] == 2) {
        $nilai19 = 5;
    } else if ($data['upaya_tercapai'] == 3) {
        $nilai19 = 0;
    }
    if ($data['pelaksanaan_ukp'] == 1) {
        $nilai20 = 10;
    } else if ($data['pelaksanaan_ukp'] == 2) {
        $nilai20 = 5;
    } else if ($data['pelaksanaan_ukp'] == 3) {
        $nilai20 = 0;
    }
    if ($data['formasi_abk'] == 1) {
        $nilai21 = 10;
    } else if ($data['formasi_abk'] == 2) {
        $nilai21 = 5;
    } else if ($data['formasi_abk'] == 3) {
        $nilai21 = 0;
    }
    if ($data['sdm_abk'] == 1) {
        $nilai22 = 10;
    } else if ($data['sdm_abk'] == 2) {
        $nilai22 = 5;
    } else if ($data['sdm_abk'] == 3) {
        $nilai22 = 0;
    }
    if ($data['tindak_lanjut'] == 1) {
        $nilai23 = 10;
    } else if ($data['tindak_lanjut'] == 2) {
        $nilai23 = 5;
    } else if ($data['tindak_lanjut'] == 3) {
        $nilai23 = 0;
    }
    if ($data['perencanaan_peralatan'] == 1) {
        $nilai24 = 10;
    } else if ($data['perencanaan_peralatan'] == 2) {
        $nilai24 = 5;
    } else if ($data['perencanaan_peralatan'] == 3) {
        $nilai24 = 0;
    }
    if ($data['ada_tindak'] == 1) {
        $nilai25 = 10;
    } else if ($data['ada_tindak'] == 2) {
        $nilai25 = 0;
    }

    if ($data['kondisi_sarana'] == 1) {
        $nilai26 = 10;
    } else if ($data['kondisi_sarana'] == 2) {
        $nilai26 = 5;
    } else if ($data['kondisi_sarana'] == 3) {
        $nilai26 = 0;
    }
    if ($data['dokumen_perencanaan'] == 1) {
        $nilai27 = 10;
    } else if ($data['dokumen_perencanaan'] == 2) {
        $nilai27 = 0;
    }

    if ($data['alokasi_kebutuhan'] == 1) {
        $nilai28 = 10;
    } else if ($data['alokasi_kebutuhan'] == 2) {
        $nilai28 = 5;
    } else if ($data['alokasi_kebutuhan'] == 3) {
        $nilai28 = 0;
    }
    if ($data['usulan_pengadaan'] == 1) {
        $nilai29 = 10;
    } else if ($data['usulan_pengadaan'] == 2) {
        $nilai29 = 0;
    }
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15 + $nilai16 + $nilai17 + $nilai18 + $nilai19 + $nilai20 + $nilai21 + $nilai22 + $nilai23 + $nilai24 + $nilai25 + $nilai26 + $nilai27 + $nilai28 + $nilai29;
}

function ppkp($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['dipandu_jelas'] == 1) {
        $nilai1 = 10;
    } else if ($data['dipandu_jelas'] == 2) {
        $nilai1 = 5;
    } else if ($data['dipandu_jelas'] == 3) {
        $nilai1 = 0;
    }
    if ($data['jadwal_jelas'] == 1) {
        $nilai2 = 10;
    } else if ($data['jadwal_jelas'] == 2) {
        $nilai2 = 5;
    } else if ($data['jadwal_jelas'] == 3) {
        $nilai2 = 0;
    }
    if ($data['lintas_program'] == 1) {
        $nilai3 = 10;
    } else if ($data['lintas_program'] == 2) {
        $nilai3 = 5;
    } else if ($data['lintas_program'] == 3) {
        $nilai3 = 0;
    }
    if ($data['dimonitor_kepala'] == 1) {
        $nilai4 = 10;
    } else if ($data['dimonitor_kepala'] == 2) {
        $nilai4 = 5;
    } else if ($data['dimonitor_kepala'] == 3) {
        $nilai4 = 0;
    }
    if ($data['masukan_pelanggan'] == 1) {
        $nilai5 = 10;
    } else if ($data['masukan_pelanggan'] == 2) {
        $nilai5 = 5;
    } else if ($data['masukan_pelanggan'] == 3) {
        $nilai5 = 0;
    }
    if ($data['pelayanan_pelanggan'] == 1) {
        $nilai6 = 10;
    } else if ($data['pelayanan_pelanggan'] == 2) {
        $nilai6 = 5;
    } else if ($data['pelayanan_pelanggan'] == 3) {
        $nilai6 = 0;
    }
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6;
}

function pppp($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['penilaian_kinerja'] == 1) {
        $nilai1 = 10;
    } else if ($data['penilaian_kinerja'] == 2) {
        $nilai1 = 5;
    } else if ($data['penilaian_kinerja'] == 3) {
        $nilai1 = 0;
    }
    if ($data['feedback'] == 1) {
        $nilai2 = 10;
    } else if ($data['feedback'] == 2) {
        $nilai2 = 5;
    } else if ($data['feedback'] == 3) {
        $nilai2 = 0;
    }
    return $total = $nilai1 + $nilai2;
}
function mutu($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['indikator_mutu'] == 1) {
        $nilai1 = 10;
    } else if ($data['indikator_mutu'] == 2) {
        $nilai1 = 5;
    } else if ($data['indikator_mutu'] == 3) {
        $nilai1 = 0;
    }
    if ($data['audit_internal'] == 1) {
        $nilai2 = 10;
    } else if ($data['audit_internal'] == 2) {
        $nilai2 = 5;
    } else if ($data['audit_internal'] == 3) {
        $nilai2 = 0;
    }

    if ($data['rapat_tinjauan'] == 1) {
        $nilai3 = 10;
    } else if ($data['rapat_tinjauan'] == 2) {
        $nilai3 = 5;
    } else if ($data['rapat_tinjauan'] == 3) {
        $nilai3 = 0;
    }
    if ($data['melaksanakan_pps'] == 1) {
        $nilai4 = 10;
    } else if ($data['melaksanakan_pps'] == 2) {
        $nilai4 = 5;
    } else if ($data['melaksanakan_pps'] == 3) {
        $nilai4 = 0;
    }
    if ($data['pelaporan_insiden'] == 1) {
        $nilai5 = 10;
    } else if ($data['pelaporan_insiden'] == 2) {
        $nilai5 = 5;
    } else if ($data['pelaporan_insiden'] == 3) {
        $nilai5 = 0;
    }
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;
}
function pengendalian_infeksi($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['cuci_tangan'] == 1) {
        $nilai1 = 10;
    } else if ($data['cuci_tangan'] == 2) {
        $nilai1 = 5;
    } else if ($data['cuci_tangan'] == 3) {
        $nilai1 = 0;
    }
    if ($data['apd'] == 1) {
        $nilai2 = 10;
    } else if ($data['apd'] == 2) {
        $nilai2 = 5;
    } else if ($data['apd'] == 3) {
        $nilai2 = 0;
    }

    if ($data['dekontaminasi'] == 1) {
        $nilai3 = 10;
    } else if ($data['dekontaminasi'] == 2) {
        $nilai3 = 5;
    } else if ($data['dekontaminasi'] == 3) {
        $nilai3 = 0;
    }
    if ($data['kesehatan_lingkungan'] == 1) {
        $nilai4 = 10;
    } else if ($data['kesehatan_lingkungan'] == 2) {
        $nilai4 = 5;
    } else if ($data['kesehatan_lingkungan'] == 3) {
        $nilai4 = 0;
    }
    if ($data['limbah_medis'] == 1) {
        $nilai5 = 10;
    } else if ($data['limbah_medis'] == 2) {
        $nilai5 = 5;
    } else if ($data['limbah_medis'] == 3) {
        $nilai5 = 0;
    }

    if ($data['perlindungan_petugas'] == 1) {
        $nilai6 = 10;
    } else if ($data['perlindungan_petugas'] == 2) {
        $nilai6 = 5;
    } else if ($data['perlindungan_petugas'] == 3) {
        $nilai6 = 0;
    }
    if ($data['pemisahan_pasien'] == 1) {
        $nilai7 = 10;
    } else if ($data['pemisahan_pasien'] == 2) {
        $nilai7 = 5;
    } else if ($data['pemisahan_pasien'] == 3) {
        $nilai7 = 0;
    }
    if ($data['etika_batuk'] == 1) {
        $nilai8 = 10;
    } else if ($data['etika_batuk'] == 2) {
        $nilai8 = 5;
    } else if ($data['etika_batuk'] == 3) {
        $nilai8 = 0;
    }
    if ($data['praktik_menyuntik'] == 1) {
        $nilai9 = 10;
    } else if ($data['praktik_menyuntik'] == 2) {
        $nilai9 = 5;
    } else if ($data['praktik_menyuntik'] == 3) {
        $nilai9 = 0;
    }
    if ($data['kewaspadaan_kontak'] == 1) {
        $nilai10 = 10;
    } else if ($data['kewaspadaan_kontak'] == 2) {
        $nilai10 = 5;
    } else if ($data['kewaspadaan_kontak'] == 3) {
        $nilai10 = 0;
    }
    if ($data['kewaspadaan_droplet'] == 1) {
        $nilai11 = 10;
    } else if ($data['kewaspadaan_droplet'] == 2) {
        $nilai11 = 5;
    } else if ($data['kewaspadaan_droplet'] == 3) {
        $nilai11 = 0;
    }
    if ($data['air_borne'] == 1) {
        $nilai12 = 10;
    } else if ($data['air_borne'] == 2) {
        $nilai12 = 5;
    } else if ($data['air_borne'] == 3) {
        $nilai12 = 0;
    }
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12;
}
function kewaspadaan_dini($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['skdr'] == 1) {
        $nilai1 = 10;
    } else if ($data['skdr'] == 2) {
        $nilai1 = 5;
    } else if ($data['skdr'] == 3) {
        $nilai1 = 0;
    }
    if ($data['laporan_skdr'] == 1) {
        $nilai2 = 10;
    } else if ($data['laporan_skdr'] == 2) {
        $nilai2 = 5;
    } else if ($data['laporan_skdr'] == 3) {
        $nilai2 = 0;
    }

    if ($data['analisa_trend'] == 1) {
        $nilai3 = 10;
    } else if ($data['analisa_trend'] == 2) {
        $nilai3 = 0;
    }

    return $total = $nilai1 + $nilai2 + $nilai3;
}
function indikator_program($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['kia1a'] == 1) {
        $nilai1a = 25;
    } else if ($data['kia1a'] == 2) {
        $nilai1a = 0;
    }
    if ($data['kia1b'] == 1) {
        $nilai1b = 25;
    } else if ($data['kia1b'] == 2) {
        $nilai1b = 0;
    }
    if ($data['kia1c'] == 1) {
        $nilai1c = 50;
    } else if ($data['kia1c'] == 2) {
        $nilai1c = 0;
    }
    $nilai1 = $nilai1a + $nilai1b + $nilai1c;
    if ($nilai1 > 80) {
        $total1 = 10;
    } else if (($nilai1 > 60) and ($nilai1 < 79)) {
        $total1 = 5;
    } else if ($nilai1 < 60) {
        $total1 = 0;
    }

    if ($data['kia2a'] == 1) {
        $nilai2a = 25;
    } else if ($data['kia2a'] == 2) {
        $nilai2a = 0;
    }
    if ($data['kia2b'] == 1) {
        $nilai2b = 25;
    } else if ($data['kia2b'] == 2) {
        $nilai2b = 0;
    }
    if ($data['kia2c'] == 1) {
        $nilai2c = 50;
    } else if ($data['kia2c'] == 2) {
        $nilai2c = 0;
    }
    $nilai2 = $nilai2a + $nilai2b + $nilai2c;
    if ($nilai2 > 80) {
        $total2 = 10;
    } else if (($nilai2 > 60) and ($nilai2 < 79)) {
        $total2 = 5;
    } else if ($nilai2 < 60) {
        $total2 = 0;
    }

    if ($data['kia3a'] == 1) {
        $nilai3a = 25;
    } else if ($data['kia3a'] == 2) {
        $nilai3a = 0;
    }
    if ($data['kia3b'] == 1) {
        $nilai3b = 25;
    } else if ($data['kia3b'] == 2) {
        $nilai3b = 0;
    }
    if ($data['kia3c'] == 1) {
        $nilai3c = 50;
    } else if ($data['kia3c'] == 2) {
        $nilai3c = 0;
    }
    $nilai3 = $nilai3a + $nilai3b + $nilai3c;
    if ($nilai3 > 80) {
        $total3 = 10;
    } else if (($nilai3 > 60) and ($nilai3 < 79)) {
        $total3 = 5;
    } else if ($nilai3 < 60) {
        $total3 = 0;
    }

    if ($data['imunisasi1a'] == 1) {
        $nilai4a = 25;
    } else if ($data['imunisasi1a'] == 2) {
        $nilai4a = 0;
    }
    if ($data['imunisasi1b'] == 1) {
        $nilai4b = 25;
    } else if ($data['imunisasi1b'] == 2) {
        $nilai4b = 0;
    }
    if ($data['imunisasi1c'] == 1) {
        $nilai4c = 50;
    } else if ($data['imunisasi1c'] == 2) {
        $nilai4c = 0;
    }
    $nilai4 = $nilai4a + $nilai4b + $nilai4c;
    if ($nilai4 > 80) {
        $total4 = 10;
    } else if (($nilai4 > 60) and ($nilai4 < 79)) {
        $total4 = 5;
    } else if ($nilai4 < 60) {
        $total4 = 0;
    }

    if ($data['gizi1a'] == 1) {
        $nilai5a = 25;
    } else if ($data['gizi1a'] == 2) {
        $nilai5a = 0;
    }
    if ($data['gizi1b'] == 1) {
        $nilai5b = 25;
    } else if ($data['gizi1b'] == 2) {
        $nilai5b = 0;
    }
    if ($data['gizi1c'] == 1) {
        $nilai5c = 50;
    } else if ($data['gizi1c'] == 2) {
        $nilai5c = 0;
    }
    $nilai5 = $nilai5a + $nilai5b + $nilai5c;
    if ($nilai5 > 80) {
        $total5 = 10;
    } else if (($nilai5 > 60) and ($nilai5 < 79)) {
        $total5 = 5;
    } else if ($nilai5 < 60) {
        $total5 = 0;
    }

    if ($data['pencegahan1a'] == 1) {
        $nilai6a = 25;
    } else if ($data['pencegahan1a'] == 2) {
        $nilai6a = 0;
    }
    if ($data['pencegahan1b'] == 1) {
        $nilai6b = 25;
    } else if ($data['pencegahan1b'] == 2) {
        $nilai6b = 0;
    }
    if ($data['pencegahan1c'] == 1) {
        $nilai6c = 50;
    } else if ($data['pencegahan1c'] == 2) {
        $nilai6c = 0;
    }
    $nilai6 = $nilai6a + $nilai6b + $nilai6c;
    if ($nilai6 > 80) {
        $total6 = 10;
    } else if (($nilai6 > 60) and ($nilai6 < 79)) {
        $total6 = 5;
    } else if ($nilai6 < 60) {
        $total6 = 0;
    }

    if ($data['pencegahan2a'] == 1) {
        $nilai7a = 25;
    } else if ($data['pencegahan2a'] == 2) {
        $nilai7a = 0;
    }
    if ($data['pencegahan2b'] == 1) {
        $nilai7b = 25;
    } else if ($data['pencegahan2b'] == 2) {
        $nilai7b = 0;
    }
    if ($data['pencegahan2c'] == 1) {
        $nilai7c = 50;
    } else if ($data['pencegahan2c'] == 2) {
        $nilai7c = 0;
    }
    $nilai7 = $nilai7a + $nilai7b + $nilai7c;
    if ($nilai7 > 80) {
        $total7 = 10;
    } else if (($nilai7 > 60) and ($nilai7 < 79)) {
        $total7 = 5;
    } else if ($nilai7 < 60) {
        $total7 = 0;
    }

    if ($data['pencegahan3a'] == 1) {
        $nilai8a = 25;
    } else if ($data['pencegahan3a'] == 2) {
        $nilai8a = 0;
    }
    if ($data['pencegahan3b'] == 1) {
        $nilai8b = 25;
    } else if ($data['pencegahan3b'] == 2) {
        $nilai8b = 0;
    }
    if ($data['pencegahan3c'] == 1) {
        $nilai8c = 50;
    } else if ($data['pencegahan3c'] == 2) {
        $nilai8c = 0;
    }
    $nilai8 = $nilai8a + $nilai8b + $nilai8c;
    if ($nilai8 > 80) {
        $total8 = 10;
    } else if (($nilai8 > 60) and ($nilai8 < 79)) {
        $total8 = 5;
    } else if ($nilai8 < 60) {
        $total8 = 0;
    }

    if ($data['pencegahan4a'] == 1) {
        $nilai9a = 25;
    } else if ($data['pencegahan4a'] == 2) {
        $nilai9a = 0;
    }
    if ($data['pencegahan4b'] == 1) {
        $nilai9b = 25;
    } else if ($data['pencegahan4b'] == 2) {
        $nilai9b = 0;
    }
    if ($data['pencegahan4c'] == 1) {
        $nilai9c = 50;
    } else if ($data['pencegahan4c'] == 2) {
        $nilai9c = 0;
    }
    $nilai9 = $nilai9a + $nilai9b + $nilai9c;
    if ($nilai9 > 80) {
        $total9 = 10;
    } else if (($nilai9 > 60) and ($nilai9 < 79)) {
        $total9 = 5;
    } else if ($nilai9 < 60) {
        $total9 = 0;
    }

    if ($data['pencegahan5a'] == 1) {
        $nilai10a = 25;
    } else if ($data['pencegahan5a'] == 2) {
        $nilai10a = 0;
    }
    if ($data['pencegahan5b'] == 1) {
        $nilai10b = 25;
    } else if ($data['pencegahan5b'] == 2) {
        $nilai10b = 0;
    }
    if ($data['pencegahan5c'] == 1) {
        $nilai10c = 50;
    } else if ($data['pencegahan5c'] == 2) {
        $nilai10c = 0;
    }
    $nilai10 = $nilai10a + $nilai10b + $nilai10c;
    if ($nilai10 > 80) {
        $total10 = 10;
    } else if (($nilai10 > 60) and ($nilai10 < 79)) {
        $total10 = 5;
    } else if ($nilai10 < 60) {
        $total10 = 0;
    }

    if ($data['pencegahan6a'] == 1) {
        $nilai11a = 25;
    } else if ($data['pencegahan6a'] == 2) {
        $nilai11a = 0;
    }
    if ($data['pencegahan6b'] == 1) {
        $nilai11b = 25;
    } else if ($data['pencegahan6b'] == 2) {
        $nilai11b = 0;
    }
    if ($data['pencegahan6c'] == 1) {
        $nilai11c = 50;
    } else if ($data['pencegahan6c'] == 2) {
        $nilai11c = 0;
    }
    $nilai11 = $nilai11a + $nilai11b + $nilai11c;
    if ($nilai11 > 80) {
        $total11 = 10;
    } else if (($nilai11 > 60) and ($nilai11 < 79)) {
        $total11 = 5;
    } else if ($nilai11 < 60) {
        $total11 = 0;
    }

    if ($data['pencegahan7a'] == 1) {
        $nilai12a = 25;
    } else if ($data['pencegahan7a'] == 2) {
        $nilai12a = 0;
    }
    if ($data['pencegahan7b'] == 1) {
        $nilai12b = 25;
    } else if ($data['pencegahan7b'] == 2) {
        $nilai12b = 0;
    }
    if ($data['pencegahan7c'] == 1) {
        $nilai12c = 50;
    } else if ($data['pencegahan7c'] == 2) {
        $nilai12c = 0;
    }
    $nilai12 = $nilai12a + $nilai12b + $nilai12c;
    if ($nilai12 > 80) {
        $total12 = 10;
    } else if (($nilai12 > 60) and ($nilai12 < 79)) {
        $total12 = 5;
    } else if ($nilai12 < 60) {
        $total12 = 0;
    }

    if ($data['pencegahan8a'] == 1) {
        $nilai13a = 25;
    } else if ($data['pencegahan8a'] == 2) {
        $nilai13a = 0;
    }
    if ($data['pencegahan8b'] == 1) {
        $nilai13b = 25;
    } else if ($data['pencegahan8b'] == 2) {
        $nilai13b = 0;
    }
    if ($data['pencegahan8c'] == 1) {
        $nilai13c = 50;
    } else if ($data['pencegahan8c'] == 2) {
        $nilai13c = 0;
    }
    $nilai13 = $nilai13a + $nilai13b + $nilai13c;
    if ($nilai13 > 80) {
        $total13 = 10;
    } else if (($nilai13 > 60) and ($nilai13 < 79)) {
        $total13 = 5;
    } else if ($nilai13 < 60) {
        $total13 = 0;
    }

    if ($data['pispk1a'] == 1) {
        $nilai14a = 25;
    } else if ($data['pispk1a'] == 2) {
        $nilai14a = 0;
    }
    if ($data['pispk1b'] == 1) {
        $nilai14b = 25;
    } else if ($data['pispk1b'] == 2) {
        $nilai14b = 0;
    }
    if ($data['pispk1c'] == 1) {
        $nilai14c = 50;
    } else if ($data['pispk1c'] == 2) {
        $nilai14c = 0;
    }
    $nilai14 = $nilai14a + $nilai14b + $nilai14c;
    if ($nilai14 > 80) {
        $total14 = 10;
    } else if (($nilai14 > 60) and ($nilai14 < 79)) {
        $total14 = 5;
    } else if ($nilai14 < 60) {
        $total14 = 0;
    }

    if ($data['pispk2a'] == 1) {
        $nilai15a = 25;
    } else if ($data['pispk2a'] == 2) {
        $nilai15a = 0;
    }
    if ($data['pispk2b'] == 1) {
        $nilai15b = 25;
    } else if ($data['pispk2b'] == 2) {
        $nilai15b = 0;
    }
    if ($data['pispk2c'] == 1) {
        $nilai15c = 50;
    } else if ($data['pispk2c'] == 2) {
        $nilai15c = 0;
    }
    $nilai15 = $nilai15a + $nilai15b + $nilai15c;
    if ($nilai15 > 80) {
        $total15 = 10;
    } else if (($nilai15 > 60) and ($nilai15 < 79)) {
        $total15 = 5;
    } else if ($nilai15 < 60) {
        $total15 = 0;
    }

    if ($data['pispk3a'] == 1) {
        $nilai16a = 25;
    } else if ($data['pispk3a'] == 2) {
        $nilai16a = 0;
    }
    if ($data['pispk3b'] == 1) {
        $nilai16b = 25;
    } else if ($data['pispk3b'] == 2) {
        $nilai16b = 0;
    }
    if ($data['pispk3c'] == 1) {
        $nilai16c = 50;
    } else if ($data['pispk3c'] == 2) {
        $nilai16c = 0;
    }
    $nilai16 = $nilai16a + $nilai16b + $nilai16c;
    if ($nilai16 > 80) {
        $total16 = 10;
    } else if (($nilai16 > 60) and ($nilai16 < 79)) {
        $total16 = 5;
    } else if ($nilai16 < 60) {
        $total16 = 0;
    }

    return $total = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13 + $total14 + $total15 + $total16;
}
