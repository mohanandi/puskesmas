<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Prasarana Puskesmas</strong></h2>
      </div>
    </div>

    <form style=" padding:20px;">
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success" role="alert">
          Data Telah Berhasil
          <?= $this->session->flashdata('flash'); ?>
        </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>1. PENGHAWAAN (VENTILASI)</strong></label><br>
        <label for="exampleFormControlInput1">Bila menggunakan ventilasi alami pada ruangan, minimal 15 % dari luas lantai ruangan tersebut</label>
        <input type="text" class="form-control" value="<?= $data['ventilasi_alami']; ?>" placeholder="" name="prasarana1_1" id="prasarana1_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang farmasi yang terawat dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['ac_farmasi']; ?>" placeholder="" name="prasarana1_2" id="prasarana1_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang tindakan yang terawat dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['ac_tindakan']; ?>" placeholder="" name="prasarana1_3" id="prasarana1_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang persalinan yang terawat dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['ac_persalinan']; ?>" placeholder="" name="prasarana1_4" id="prasarana1_4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang laboratorium yang terawat dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['ac_lab']; ?>" placeholder="" name="prasarana1_5" id="prasarana1_5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Di Laboratorium dan ruang pemeriksaan, penempatan kipas angin/AC membuat arah aliran udara bergerak dari petugas kesehatan ke arah pasien</label>
        <input type="text" class="form-control" value="<?= $data['lab_ac']; ?>" placeholder="" name="prasarana1_6" id="prasarana1_6" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ventilasi ruang tunggu dan pemeriksaan membuat nyaman dan aman pasien dan pekerja Puskesmas serta dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['ventilasi_tunggu']; ?>" placeholder="" name="prasarana1_7" id="prasarana1_7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Udara didalam Puskesmas tidak pengap/terasa nyaman</label>
        <input type="text" class="form-control" value="<?= $data['udara_puskesmas']; ?>" placeholder="" name="prasarana1_8" id="prasarana1_8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Udara di dalam Puskesmas tidak berbau</label>
        <input type="text" class="form-control" value="<?= $data['udara_berbau']; ?>" placeholder="" name="prasarana1_9" id="prasarana1_9" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kelembapan berkisar 40-70% RH</label>
        <input type="text" class="form-control" value="<?= $data['kelembapan']; ?>" placeholder="" name="prasarana1_10" id="prasarana1_10" readonly>
        <select class="form-control" name="prasarana1_10" id="prasarana1.10" disabled>
          <option value="<?= $data['kelembapan']; ?>" selected><?= $data['kelembapan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Laju ventilasi udara 0,15 – 0,50 meter/detik</label>
        <input type="text" class="form-control" value="<?= $data['laju_ventilasi']; ?>" placeholder="" name="prasarana1_11" id="prasarana1_11" readonly>

      </div><br>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>2. SISTEM PENCAHAYAAN</strong></label><br>
        <label for="exampleFormControlInput1">Pencahayaan dalam ruangan Puskesmas terdistribusi merata</label>
        <input type="text" class="form-control" value="<?= $data['pencahayaan']; ?>" placeholder="" name="prasarana2_1" id="prasarana2_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang pemeriksaan umum, KIA, KB, Imunisasi, Gigi dan mulut, ASI, Farmasi, Rawat Inap, Ruang Kantor rmempunyai tingkat pencahayaan rata-rata 200 Lux</label>
        <input type="text" class="form-control" value="<?= $data['duaratus']; ?>" placeholder="" name="prasarana2_2" id="prasarana2_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang Tindakan, Ruang Laboratorium, Ruang Gadar; rmempunyai tingkat pencahayaan rata-rata 300 Lux </label>
        <input type="text" class="form-control" value="<?= $data['tigaratus']; ?>" placeholder="" name="prasarana2_3" id="prasarana2_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang Tunggu, KM/WC, Laundry, Gudang Umum, Dapur & Pantry; rmempunyai tingkat pencahayaan rata-rata 100 Lux </label>
        <input type="text" class="form-control" value="<?= $data['seratus']; ?>" placeholder="" name="prasarana2_4" id="prasarana2_4" readonly>

      </div><br>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>3. SISTEM SANITASI</strong></label><br>
        <label for="exampleFormControlInput1">Ketersediaan air untuk hygiene dan sanitasi di Puskesmas dalam keadaan baik dan bersih serta mengalir 24 jam</label>
        <input type="text" class="form-control" value="<?= $data['hygiene']; ?>" placeholder="" name="prasarana3_1" id="prasarana3_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk pasien rawat jalan 15-20 liter/orang/hari</label>
        <input type="text" class="form-control" value="<?= $data['limabelas']; ?>" placeholder="" name="prasarana3_2" id="prasarana3_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk pasien rawat inap 40-60 liter/orang/hari</label>
        <input type="text" class="form-control" value="<?= $data['empatpuluh']; ?>" placeholder="" name="prasarana3_3" id="prasarana3_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk ruang bersalin 100 liter/orang/hari</label>
        <input type="text" class="form-control" value="<?= $data['hygiene_seratus']; ?>" placeholder="" name="prasarana3_4" id="prasarana3_4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sumber Air Bersih</label>
        <input type="text" class="form-control" value="<?= $data['sumber_air']; ?>" placeholder="" name="prasarana3_5" id="prasarana3_5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saluran air limbah kedap air, bersih dari sampah dan dilengkapi penutup dengan bak kontrol untuk menjaga, kemiringan saluran minimal 1% </label>
        <input type="text" class="form-control" value="<?= $data['saluran_air']; ?>" placeholder="" name="prasarana3_6" id="prasarana3_6" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat IPAL Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['ipal']; ?>" placeholder="" name="prasarana3_7" id="prasarana3_7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia tempat sampah minimal 2 buah per ruangan</label>
        <input type="text" class="form-control" value="<?= $data['sampah_dua']; ?>" placeholder="" name="prasarana3_8" id="prasarana3_8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas melakukan pemilahan sampah infeksius, benda tajam, dan sampah non infeksius</label>
        <input type="text" class="form-control" value="<?= $data['pemilihan']; ?>" placeholder="" name="prasarana3_9" id="prasarana3_9" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat tempat penampungan sementara (TPS) limbah B3 Puskesmas dengan kapasitas yang cukup dalam kondisi baik, rapi dan bersih, dan berizin</label>
        <input type="text" class="form-control" value="<?= $data['tps']; ?>" placeholder="" name="prasarana3_10" id="prasarana3_10" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia wastafel pada ruang persalinan, ruang pemeriksaan umum, ruang gigi dan mulut ruang farmasi, ruang laboratorium, toilet pengunjung, sputum booth dalam kondisi baik, rapi dan bersih.</label>
        <input type="text" class="form-control" value="<?= $data['westafel']; ?>" placeholder="" name="prasarana3_11" id="prasarana3_11" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tidak ada serbet/lap handuk/lap kain untuk mengeringkan tangan di dekat wastafel</label>
        <input type="text" class="form-control" value="<?= $data['serbet']; ?>" placeholder="" name="prasarana3_12" id="prasarana3_12" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia handrub di ruang rawat inap dan pasca persalinan, koridor Puskesmas, dan pintu keluar Puskesmas </label>
        <input type="text" class="form-control" value="<?= $data['handrub']; ?>" placeholder="" name="prasarana3_13" id="prasarana3_13" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia septic tank yang tersambung ke IPAL. Jika dengan resapan maka harus secara rutin dilakukan penyedotan</label>
        <input type="text" class="form-control" value="<?= $data['septik_tank']; ?>" placeholder="" name="prasarana3_14" id="prasarana3_14" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>4. SISTEM KELISTRIKAN</strong></label><br>
        <label for="exampleFormControlInput1">Sumber daya listrik utama Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['listrik_puskesmas']; ?>" placeholder="" name="prasarana4_1" id="prasarana4_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kekuatan Daya Listrik PLN</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['daya_listrik']; ?>" placeholder="VA belom disamping" name="prasarana4.2" id="prasarana4.2" value="" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sumber daya listrik cadangan/darurat</label>
        <input type="text" class="form-control" value="<?= $data['listrik_cadangan']; ?>" placeholder="" name="prasarana4_3" id="prasarana4_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kekuatan daya listrik cadangan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kekuatan_cadangan']; ?>" placeholder="VA belom disamping" name="prasarana4.4" id="prasarana4.4" value="" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Listrik tersedia 24 jam dalam sehari</label>
        <input type="text" class="form-control" value="<?= $data['listrik_sehari']; ?>" placeholder="" name="prasarana4_5" id="prasarana4_5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan listrik mencukupi untuk kebutuhan pelayanan Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['listrik_mencukupi']; ?>" placeholder="" name="prasarana4_6" id="prasarana4_6" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia sumber daya listrik cadangan/darurat minimal 75% dari daya listrik normal</label>
        <input type="text" class="form-control" value="<?= $data['listrik_minimal']; ?>" placeholder="" name="prasarana4_7" id="prasarana4_7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Peletakan/penataan kabel listrik Puskesmas dalam kondisi yang aman, baik dan rapi</label>
        <input type="text" class="form-control" value="<?= $data['peletakan_kabel']; ?>" placeholder="" name="prasarana4_8" id="prasarana4_8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>5. SISTEM KOMUNIKASI</strong></label><br>
        <label for="exampleFormControlInput1">a. Tersedia saluran telefon kabel Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['saluran_tlp']; ?>" placeholder="" name="prasarana5_a" id="prasarana5_a" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Tersedia telefon seluler khusus Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['saluran_seluler']; ?>" placeholder="" name="prasarana5_b" id="prasarana5_b" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Tersedia telefon khusus di Unit Gadar</label>
        <input type="text" class="form-control" value="<?= $data['tlp_gadar']; ?>" placeholder="" name="prasarana5_c" id="prasarana5_c" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Tersedia jaringan internet berfungsi</label>
        <input type="text" class="form-control" value="<?= $data['internet']; ?>" placeholder="" name="prasarana5_d" id="prasarana5_d" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Pemanggilan pasien terdengar dengan jelas di area ruang tunggu</label>
        <input type="text" class="form-control" value="<?= $data['pemanggilan_jelas']; ?>" placeholder="" name="prasarana5_e" id="prasarana5_e" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Terdapat sistem antrian menggunakan nomor yang jelas</label>
        <input type="text" class="form-control" value="<?= $data['sistem_antrian']; ?>" placeholder="" name="prasarana5_f" id="prasarana5_f" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">g. Terdapat mesin nomor antrian bagi pasien yang mendaftar</label>
        <input type="text" class="form-control" value="<?= $data['mesin_nomor']; ?>" placeholder="" name="prasarana5_g" id="prasarana5_g" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">h. Terdapat monitor/TV yang menginformasikan nomor urut antrian pasien yang sedang di panggil</label>
        <input type="text" class="form-control" value="<?= $data['tv_urut']; ?>" placeholder="" name="prasarana5_h" id="prasarana5_h" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">i. Terdapat perkiraan waktu pelayanan untuk range nomor antrian tertentu</label>
        <input type="text" class="form-control" value="<?= $data['perkiraan_waktu']; ?>" placeholder="" name="prasarana5_i" id="prasarana5_i" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>6. SISTEM GAS MEDIS</strong></label><br>
        <label for="exampleFormControlInput1">Tabung gas medis Puskesmas di cat warna putih dan dalam kondisi baik dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['gas_putih']; ?>" placeholder="" name="prasarana6_1" id="prasarana6_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saat digunakan tabung gas medis harus menggunakan pengaman seperti troli tabung atau dirantai dan dalam kondisi rapi</label>
        <input type="text" class="form-control" value="<?= $data['gas_aman']; ?>" placeholder="" name="prasarana6_2" id="prasarana6_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saat tabung tidak digunakan tabung harus menggunakan tutup pelindung/katup yang dipasang erat dan dirantai</label>
        <input type="text" class="form-control" value="<?= $data['gas_tutup']; ?>" placeholder="" name="prasarana6_3" id="prasarana6_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>7. SISTEM PROTEKSI PETIR</strong></label><br>
        <label for="exampleFormControlInput1">Puskesmas mempunyai sistem proteksi petir terstandar</label>
        <input type="text" class="form-control" value="<?= $data['proteksi']; ?>" placeholder="" name="prasarana7_1" id="prasarana7_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>8. SISTEM PROTEKSI KEBAKARAN</strong></label><br>
        <label for="exampleFormControlInput1">Puskesmas mempunyai APAR (alat pemadam api ringan) dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['apar']; ?>" placeholder="" name="prasarana8_1" id="prasarana8_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">APAR berkapsitas 2 Kg, terpasang minimal satu buah untuk setiap 15 m2 dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['apar_dua']; ?>" placeholder="" name="prasarana8_2" id="prasarana8_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">APAR diletakan pada dinding dengan ketinggian antara 15 - 120 cm dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['apar_dinding']; ?>" placeholder="" name="prasarana8_3" id="prasarana8_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Di Ruang Genset tersedia APAR CO2</label>
        <input type="text" class="form-control" value="<?= $data['apar_co']; ?>" placeholder="" name="prasarana8_4" id="prasarana8_4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>9. SISTEM PENGENDALIAN KEBISINGAN</strong></label><br>
        <label for="exampleFormControlInput1">Intensitas kebisingan equivalen di luar bangunan puskesmas tidak lebih dari 55 dBA</label>
        <input type="text" class="form-control" value="<?= $data['kebisingan_luar']; ?>" placeholder="" name="prasarana9_1" id="prasarana9_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Intensitas kebisingan equivalen di dalam bangunan puskesmas tidak lebih dari 45 dBA</label>
        <input type="text" class="form-control" value="<?= $data['kebisingan_dlm']; ?>" placeholder="" name="prasarana9_2" id="prasarana9_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>10. SISTEM TRANSPORTASI VERTIKAL DALAM PUSKESMAS</strong></label><br>
        <label for="exampleFormControlInput1">a. Bila Tangga, maka:</label><br>
        <label for="exampleFormControlInput1">Ukuran Tinggi Pijakan (15-17) cm, Kemiring-an<600, Lebar Pijakan≥120 cm; Tinggi Hand-rail ( 65 - 80 ) cm, dan Panjang Handrail> 30 cm dari batas tangga, ujung berbelok sesuai ketentuan </label>
        <input type="text" class="form-control" value="<?= $data['bila_tangga']; ?>" placeholder="" name="prasarana10_a" id="prasarana10_a" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Bila Ram, Apakah itu:</label><br>
        <label for="exampleFormControlInput1">Landaian Menerus, Berbelok, Berbalik Arah, atau Kearah Pintu,maka: Sudut Kemiringan Pijakan (≤70 dan panjang mendatar Ram Mak-simal (9m), Lebar Pijakan Minimal 120 cm, Lebar Bordes minimal 180 cm (Bila di lantai atas untuk pelayanan), sesuai ketentuan</label>
        <input type="text" class="form-control" value="<?= $data['bila_ram']; ?>" placeholder="" name="prasarana10_b" id="prasarana10_b" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>11. PUSKESMAS KELILING DAN AMBULAN</strong></label><br>
        <label for="exampleFormControlInput1">a. Kendaraan Puskesmas Keliling (Roda 4/4WD/Perahu Bermotor / Lainnya); Jumlah:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['keliling_unit']; ?>" placeholder="..." name="prasarana11_a1" id="prasarana11_a1" value="" readonly>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['kendaraan_ada']; ?>" placeholder="" name="prasarana11_a2" id="prasarana11_a2" readonly>

          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Kendaraan Ambulans(Roda 4 / 4WD / Perahu Bermotor / Lainnya:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['ambulan_unit']; ?>" placeholder="..." name="prasarana11_b1" id="prasarana11_b1" value="" readonly>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['ambulan_ada']; ?>" placeholder="" name="prasarana11_b2" id="prasarana11_b2" readonly>

          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Roda-2: Standar/Trail:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['roda_unit']; ?>" placeholder="..." name="prasarana11_c1" id="prasarana11_c1" value="" readonly>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['roda_ada']; ?>" placeholder="" name="prasarana11_c2" id="prasarana11_c2" readonly>

          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Puskesmas keliling dalam kondisi baik, bersih dan berfungsi serta mempunyai perlengkapan/alat yang lengkap sebagai puskesmas keliling</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_keliling']; ?>" placeholder="" name="prasarana11_d" id="prasarana11_d" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Ambulan Puskesmas dalam kondisi baik, bersih dan berfungsi serta mempunyai alat kesehatan yang lengkap sebagai ambulan</label>
        <input type="text" class="form-control" value="<?= $data['ambulan_baik']; ?>" placeholder="" name="prasarana11_e" id="prasarana11_e" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Puskesmas mempunyai daftar rujukan RS yang jelas dan sesuai dengan kebutuhan pasien</label>
        <input type="text" class="form-control" value="<?= $data['rujukan']; ?>" placeholder="" name="prasarana11_f" id="prasarana11_f" readonly>

      </div>
    </form>
    <a class="btn float-right btn-danger" href="<?= base_url('Prasarana_Puskesmas/ubah'); ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
  </div>
</div>