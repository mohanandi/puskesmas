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
  
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 ;
}
function perencanaan_puskesmas($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['rpk_n'] == 1) {
        $nilai1 = 10;
    } else if ($data['rpk_n'] == 2) {
        $nilai1 = 5;
    } else if ($data['rpk_n'] == 3) {
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
        $nilai5 = 5;
    } else if ($data['ruk_mendatang'] == 3) {
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
    if ($data[' laporan_penanggung '] == 1) {
        $nilai12 = 10;
    } else if ($data[' laporan_penanggung '] == 2) {
        $nilai12 = 5;
    } else if ($data[' laporan_penanggung '] == 3) {
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
        $nilai15 = 5;
    } else if ($data['hasil_lokakarya'] == 3) {
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
        $nilai25 = 5;
    } else if ($data['ada_tindak'] == 3) {
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
        $nilai27 = 5;
    } else if ($data['dokumen_perencanaan'] == 3) {
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
        $nilai29 = 5;
    } else if ($data['usulan_pengadaan'] == 3) {
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
        $nilai3 = 5;
    } else if ($data['analisa_trend'] == 3) {
        $nilai3 = 0;
    }
   
    return $total = $nilai1 + $nilai2 + $nilai3;
}
function indikator_program($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['kia1'] == 1) {
        $nilai1 = 10;
    } else if ($data['kia1'] == 2) {
        $nilai1 = 5;
    } else if ($data['kia1'] == 3) {
        $nilai1 = 0;
    }
    if ($data['kia2'] == 1) {
        $nilai2 = 10;
    } else if ($data['kia2'] == 2) {
        $nilai2 = 5;
    } else if ($data['kia2'] == 3) {
        $nilai2 = 0;
    }

    if ($data['kia3'] == 1) {
        $nilai3 = 10;
    } else if ($data['kia3'] == 2) {
        $nilai3 = 5;
    } else if ($data['kia3'] == 3) {
        $nilai3 = 0;
    }
    if ($data['imunisasi1'] == 1) {
        $nilai4 = 10;
    } else if ($data['imunisasi1'] == 2) {
        $nilai4 = 5;
    } else if ($data['imunisasi1'] == 3) {
        $nilai4 = 0;
    }
    if ($data['gizi1'] == 1) {
        $nilai5 = 10;
    } else if ($data['gizi1'] == 2) {
        $nilai5 = 5;
    } else if ($data['gizi1'] == 3) {
        $nilai5 = 0;
    }

    if ($data[' pencegahan1'] == 1) {
        $nilai6 = 10;
    } else if ($data[' pencegahan1'] == 2) {
        $nilai6 = 5;
    } else if ($data[' pencegahan1'] == 3) {
        $nilai6 = 0;
    }
    if ($data['pencegahan2'] == 1) {
        $nilai7 = 10;
    } else if ($data['pencegahan2'] == 2) {
        $nilai7 = 5;
    } else if ($data['pencegahan2'] == 3) {
        $nilai7 = 0;
    }
    if ($data['pencegahan3'] == 1) {
        $nilai8 = 10;
    } else if ($data['pencegahan3'] == 2) {
        $nilai8 = 5;
    } else if ($data['pencegahan3'] == 3) {
        $nilai8 = 0;
    }
    if ($data['pencegahan4'] == 1) {
        $nilai9 = 10;
    } else if ($data['pencegahan4'] == 2) {
        $nilai9 = 5;
    } else if ($data['pencegahan4'] == 3) {
        $nilai9 = 0;
    }
    if ($data['pencegahan5'] == 1) {
        $nilai10 = 10;
    } else if ($data['pencegahan5'] == 2) {
        $nilai10 = 5;
    } else if ($data['pencegahan5'] == 3) {
        $nilai10 = 0;
    }
    if ($data['pencegahan6'] == 1) {
        $nilai11 = 10;
    } else if ($data['pencegahan6'] == 2) {
        $nilai11 = 5;
    } else if ($data['pencegahan6'] == 3) {
        $nilai11 = 0;
    }
    if ($data['pencegahan7'] == 1) {
        $nilai12 = 10;
    } else if ($data['pencegahan7'] == 2) {
        $nilai12 = 5;
    } else if ($data['pencegahan7'] == 3) {
        $nilai12 = 0;
    }
    if ($data['pencegahan8'] == 1) {
        $nilai13 = 10;
    } else if ($data['pencegahan8'] == 2) {
        $nilai13 = 5;
    } else if ($data['pencegahan8'] == 3) {
        $nilai13 = 0;
    }
    if ($data['pispk1'] == 1) {
        $nilai14 = 10;
    } else if ($data['pispk1'] == 2) {
        $nilai14 = 5;
    } else if ($data['pispk1'] == 3) {
        $nilai14 = 0;
    }
    if ($data['pispk2'] == 1) {
        $nilai15 = 10;
    } else if ($data['pispk2'] == 2) {
        $nilai15 = 5;
    } else if ($data['pispk2'] == 3) {
        $nilai15 = 0;
    }
    if ($data['pispk3'] == 1) {
        $nilai16 = 10;
    } else if ($data['pispk3'] == 2) {
        $nilai16 = 5;
    } else if ($data['pispk3'] == 3) {
        $nilai16 = 0;
    }
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15 + $nilai16;
}

