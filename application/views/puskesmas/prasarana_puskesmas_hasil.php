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
        <select class="form-control" name="prasarana1.1" id="prasarana1.1" disabled>
          <option value="<?= $data['ventilasi_alami']; ?>" selected><?= $data['ventilasi_alami']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang farmasi yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1.2" id="prasarana1.2" disabled>
          <option value="<?= $data['ac_farmasi']; ?>" selected><?= $data['ac_farmasi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang tindakan yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1.3" id="prasarana1.3" disabled>
          <option value="<?= $data['ac_tindakan']; ?>" selected><?= $data['ac_tindakan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang persalinan yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1.4" id="prasarana1.4" disabled>
          <option value="<?= $data['ac_persalinan']; ?>" selected><?= $data['ac_persalinan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang laboratorium yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1.5" id="prasarana1.5" disabled>
          <option value="<?= $data['ac_lab']; ?>" selected><?= $data['ac_lab']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Di Laboratorium dan ruang pemeriksaan, penempatan kipas angin/AC membuat arah aliran udara bergerak dari petugas kesehatan ke arah pasien</label>
        <select class="form-control" name="prasarana1.6" id="prasarana1.6" disabled>
          <option value="<?= $data['lab_ac']; ?>" selected><?= $data['lab_ac']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ventilasi ruang tunggu dan pemeriksaan membuat nyaman dan aman pasien dan pekerja Puskesmas serta dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana1.7" id="prasarana1.7" disabled>
          <option value="<?= $data['ventilasi_tunggu']; ?>" selected><?= $data['ventilasi_tunggu']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Udara didalam Puskesmas tidak pengap/terasa nyaman</label>
        <select class="form-control" name="prasarana1.8" id="prasarana1.8" disabled>
          <option value="<?= $data['udara_puskesmas']; ?>" selected><?= $data['udara_puskesmas']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Udara di dalam Puskesmas tidak berbau</label>
        <select class="form-control" name="prasarana1.9" id="prasarana1.9" disabled>
          <option value="<?= $data['udara_berbau']; ?>" selected><?= $data['udara_berbau']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kelembapan berkisar 40-70% RH</label>
        <select class="form-control" name="prasarana1.10" id="prasarana1.10" disabled>
          <option value="<?= $data['kelembapan']; ?>" selected><?= $data['kelembapan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Laju ventilasi udara 0,15 – 0,50 meter/detik</label>
        <select class="form-control" name="prasarana1.11" id="prasarana1.11 " disabled>
          <option value="<?= $data['laju_ventilasi']; ?>" selected><?= $data['laju_ventilasi']; ?></option>
        </select>
      </div><br>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>2. SISTEM PENCAHAYAAN</strong></label><br>
        <label for="exampleFormControlInput1">Pencahayaan dalam ruangan Puskesmas terdistribusi merata</label>
        <select class="form-control" name="prasarana2.1" id="prasarana2.1" disabled>
          <option value="<?= $data['pencahayaan']; ?>" selected><?= $data['pencahayaan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang pemeriksaan umum, KIA, KB, Imunisasi, Gigi dan mulut, ASI, Farmasi, Rawat Inap, Ruang Kantor rmempunyai tingkat pencahayaan rata-rata 200 Lux</label>
        <select class="form-control" name="prasarana2.2" id="prasarana2.2" disabled>
          <option value="<?= $data['duaratus']; ?>" selected><?= $data['duaratus']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang Tindakan, Ruang Laboratorium, Ruang Gadar; rmempunyai tingkat pencahayaan rata-rata 300 Lux </label>
        <select class="form-control" name="prasarana2.3" id="prasarana2.3" disabled>
          <option value="<?= $data['tigaratus']; ?>" selected><?= $data['tigaratus']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang Tunggu, KM/WC, Laundry, Gudang Umum, Dapur & Pantry; rmempunyai tingkat pencahayaan rata-rata 100 Lux </label>
        <select class="form-control" name="prasarana2.4" id="prasarana2.4" disabled>
          <option value="<?= $data['seratus']; ?>" selected><?= $data['seratus']; ?></option>
        </select>
      </div><br>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>3. SISTEM SANITASI</strong></label><br>
        <label for="exampleFormControlInput1">Ketersediaan air untuk hygiene dan sanitasi di Puskesmas dalam keadaan baik dan bersih serta mengalir 24 jam</label>
        <select class="form-control" name="prasarana3.1" id="prasarana3.1" disabled>
          <option value="<?= $data['hygiene']; ?>" selected><?= $data['hygiene']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk pasien rawat jalan 15-20 liter/orang/hari</label>
        <select class="form-control" name="prasarana3.2" id="prasarana3.2" disabled>
          <option value="<?= $data['limabelas']; ?>" selected><?= $data['limabelas']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk pasien rawat inap 40-60 liter/orang/hari</label>
        <select class="form-control" name="prasarana3.3" id="prasarana3.3" disabled>
          <option value="<?= $data['empatpuluh']; ?>" selected><?= $data['empatpuluh']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk ruang bersalin 100 liter/orang/hari</label>
        <select class="form-control" name="prasarana3.4" id="prasarana3.4" disabled>
          <option value="<?= $data['hygiene_seratus']; ?>" selected><?= $data['hygiene_seratus']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sumber Air Bersih</label>
        <select class="form-control" name="prasarana3.5" id="prasarana3.5" disabled>
          <option value="<?= $data['sumber_air']; ?>" selected><?= $data['sumber_air']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saluran air limbah kedap air, bersih dari sampah dan dilengkapi penutup dengan bak kontrol untuk menjaga, kemiringan saluran minimal 1% </label>
        <select class="form-control" name="prasarana3.6" id="prasarana3.6" disabled>
          <option value="<?= $data['saluran_air']; ?>" selected><?= $data['saluran_air']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat IPAL Puskesmas</label>
        <select class="form-control" name="prasarana3.7" id="prasarana3.7" disabled>
          <option value="<?= $data['ipal']; ?>" selected><?= $data['ipal']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia tempat sampah minimal 2 buah per ruangan</label>
        <select class="form-control" name="prasarana3.8" id="prasarana3.8" disabled>
          <option value="<?= $data['sampah_dua']; ?>" selected><?= $data['sampah_dua']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas melakukan pemilahan sampah infeksius, benda tajam, dan sampah non infeksius</label>
        <select class="form-control" name="prasarana3.9" id="prasarana3.9" disabled>
          <option value="<?= $data['pemilihan']; ?>" selected><?= $data['pemilihan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat tempat penampungan sementara (TPS) limbah B3 Puskesmas dengan kapasitas yang cukup dalam kondisi baik, rapi dan bersih, dan berizin</label>
        <select class="form-control" name="prasarana3.10" id="prasarana3.10" disabled>
          <option value="<?= $data['tps']; ?>" selected><?= $data['tps']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia wastafel pada ruang persalinan, ruang pemeriksaan umum, ruang gigi dan mulut ruang farmasi, ruang laboratorium, toilet pengunjung, sputum booth dalam kondisi baik, rapi dan bersih.</label>
        <select class="form-control" name="prasarana3.11" id="prasarana3.11" disabled>
          <option value="<?= $data['westafel']; ?>" selected><?= $data['westafel']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tidak ada serbet/lap handuk/lap kain untuk mengeringkan tangan di dekat wastafel</label>
        <select class="form-control" name="prasarana3.12" id="prasarana3.12" disabled>
          <option value="<?= $data['serbet']; ?>" selected><?= $data['serbet']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia handrub di ruang rawat inap dan pasca persalinan, koridor Puskesmas, dan pintu keluar Puskesmas </label>
        <select class="form-control" name="prasarana3.13" id="prasarana3.13" disabled>
          <option value="<?= $data['handrub']; ?>" selected><?= $data['handrub']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia septic tank yang tersambung ke IPAL. Jika dengan resapan maka harus secara rutin dilakukan penyedotan</label>
        <select class="form-control" name="prasarana3.14" id="prasarana3.14" disabled>
          <option value="<?= $data['septik_tank']; ?>" selected><?= $data['septik_tank']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>4. SISTEM KELISTRIKAN</strong></label><br>
        <label for="exampleFormControlInput1">Sumber daya listrik utama Puskesmas</label>
        <select class="form-control" name="prasarana4.1" id="prasarana4.1" disabled>
          <option value="<?= $data['listrik_puskesmas']; ?>" selected><?= $data['listrik_puskesmas']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kekuatan Daya Listrik PLN</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['daya_listrik']; ?>" placeholder="VA belom disamping" name="prasarana4.2" id="prasarana4.2" value="" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sumber daya listrik cadangan/darurat</label>
        <select class="form-control" name="prasarana4.3" id="prasarana4.3" disabled>
          <option value="<?= $data['listrik_cadangan']; ?>" selected><?= $data['listrik_cadangan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kekuatan daya listrik cadangan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kekuatan_cadangan']; ?>" placeholder="VA belom disamping" name="prasarana4.4" id="prasarana4.4" value="" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Listrik tersedia 24 jam dalam sehari</label>
        <select class="form-control" name="prasarana4.5" id="prasarana4.5" disabled>
          <option value="<?= $data['listrik_sehari']; ?>" selected><?= $data['listrik_sehari']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan listrik mencukupi untuk kebutuhan pelayanan Puskesmas</label>
        <select class="form-control" name="prasarana4.6" id="prasarana4.6" disabled>
          <option value="<?= $data['listrik_mencukupi']; ?>" selected><?= $data['listrik_mencukupi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia sumber daya listrik cadangan/darurat minimal 75% dari daya listrik normal</label>
        <select class="form-control" name="prasarana4.7" id="prasarana4.7" disabled>
          <option value="<?= $data['listrik_minimal']; ?>" selected><?= $data['listrik_minimal']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Peletakan/penataan kabel listrik Puskesmas dalam kondisi yang aman, baik dan rapi</label>
        <select class="form-control" name="prasarana4.8" id="prasarana4.8" disabled>
          <option value="<?= $data['peletakan_kabel']; ?>" selected><?= $data['peletakan_kabel']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>5. SISTEM KOMUNIKASI</strong></label><br>
        <label for="exampleFormControlInput1">a. Tersedia saluran telefon kabel Puskesmas</label>
        <select class="form-control" name="prasarana5.a" id="prasarana5.a" disabled>
          <option value="<?= $data['saluran_tlp']; ?>" selected><?= $data['saluran_tlp']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Tersedia telefon seluler khusus Puskesmas</label>
        <select class="form-control" name="prasarana5.b" id="prasarana5.b" disabled>
          <option value="<?= $data['saluran_seluler']; ?>" selected><?= $data['saluran_seluler']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Tersedia telefon khusus di Unit Gadar</label>
        <select class="form-control" name="prasarana5.c" id="prasarana5.c" disabled>
          <option value="<?= $data['tlp_gadar']; ?>" selected><?= $data['tlp_gadar']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Tersedia jaringan internet berfungsi</label>
        <select class="form-control" name="prasarana5.d" id="prasarana5.d" disabled>
          <option value="<?= $data['internet']; ?>" selected><?= $data['internet']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Pemanggilan pasien terdengar dengan jelas di area ruang tunggu</label>
        <select class="form-control" name="prasarana5.e" id="prasarana5.e" disabled>
          <option value="<?= $data['pemanggilan_jelas']; ?>" selected><?= $data['pemanggilan_jelas']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Terdapat sistem antrian menggunakan nomor yang jelas</label>
        <select class="form-control" name="prasarana5.f" id="prasarana5.f" disabled>
          <option value="<?= $data['sistem_antrian']; ?>" selected><?= $data['sistem_antrian']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">g. Terdapat mesin nomor antrian bagi pasien yang mendaftar</label>
        <select class="form-control" name="prasarana5.g" id="prasarana5.g" disabled>
          <option value="<?= $data['mesin_nomor']; ?>" selected><?= $data['mesin_nomor']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">h. Terdapat monitor/TV yang menginformasikan nomor urut antrian pasien yang sedang di panggil</label>
        <select class="form-control" name="prasarana5.h" id="prasarana5.h" disabled>
          <option value="<?= $data['tv_urut']; ?>" selected><?= $data['tv_urut']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">i. Terdapat perkiraan waktu pelayanan untuk range nomor antrian tertentu</label>
        <select class="form-control" name="prasarana5.i" id="prasarana5.i" disabled>
          <option value="<?= $data['perkiraan_waktu']; ?>" selected><?= $data['perkiraan_waktu']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>6. SISTEM GAS MEDIS</strong></label><br>
        <label for="exampleFormControlInput1">Tabung gas medis Puskesmas di cat warna putih dan dalam kondisi baik dan bersih</label>
        <select class="form-control" name="prasarana6.1" id="prasarana6.1" disabled>
          <option value="<?= $data['gas_putih']; ?>" selected><?= $data['gas_putih']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saat digunakan tabung gas medis harus menggunakan pengaman seperti troli tabung atau dirantai dan dalam kondisi rapi</label>
        <select class="form-control" name="prasarana6.2" id="prasarana6.2" disabled>
          <option value="<?= $data['gas_aman']; ?>" selected><?= $data['gas_aman']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saat tabung tidak digunakan tabung harus menggunakan tutup pelindung/katup yang dipasang erat dan dirantai</label>
        <select class="form-control" name="prasarana6.3" id="prasarana6.3" disabled>
          <option value="<?= $data['gas_tutup']; ?>" selected><?= $data['gas_tutup']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>7. SISTEM PROTEKSI PETIR</strong></label><br>
        <label for="exampleFormControlInput1">Puskesmas mempunyai sistem proteksi petir terstandar</label>
        <select class="form-control" name="prasarana7.1" id="prasarana7.1" disabled>
          <option value="<?= $data['proteksi']; ?>" selected><?= $data['proteksi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>8. SISTEM PROTEKSI KEBAKARAN</strong></label><br>
        <label for="exampleFormControlInput1">Puskesmas mempunyai APAR (alat pemadam api ringan) dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana8.1" id="prasarana8.1" disabled>
          <option value="<?= $data['apar']; ?>" selected><?= $data['apar']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">APAR berkapsitas 2 Kg, terpasang minimal satu buah untuk setiap 15 m2 dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana8.2" id="prasarana8.2" disabled>
          <option value="<?= $data['apar_dua']; ?>" selected><?= $data['apar_dua']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">APAR diletakan pada dinding dengan ketinggian antara 15 - 120 cm dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana8.3" id="prasarana8.3" disabled>
          <option value="<?= $data['apar_dinding']; ?>" selected><?= $data['apar_dinding']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Di Ruang Genset tersedia APAR CO2</label>
        <select class="form-control" name="prasarana8.4" id="prasarana8.4" disabled>
          <option value="<?= $data['apar_co']; ?>" selected><?= $data['apar_co']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>9. SISTEM PENGENDALIAN KEBISINGAN</strong></label><br>
        <label for="exampleFormControlInput1">Intensitas kebisingan equivalen di luar bangunan puskesmas tidak lebih dari 55 dBA</label>
        <select class="form-control" name="prasarana9.1" id="prasarana9.1" disabled>
          <option value="<?= $data['kebisingan_luar']; ?>" selected><?= $data['kebisingan_luar']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Intensitas kebisingan equivalen di dalam bangunan puskesmas tidak lebih dari 45 dBA</label>
        <select class="form-control" name="prasarana9.2" id="prasarana9.2" disabled>
          <option value="<?= $data['kebisingan_dlm']; ?>" selected><?= $data['kebisingan_dlm']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>10. SISTEM TRANSPORTASI VERTIKAL DALAM PUSKESMAS</strong></label><br>
        <label for="exampleFormControlInput1">a. Bila Tangga, maka:</label><br>
        <label for="exampleFormControlInput1">Ukuran Tinggi Pijakan (15-17) cm, Kemiring-an<600, Lebar Pijakan≥120 cm; Tinggi Hand-rail ( 65 - 80 ) cm, dan Panjang Handrail> 30 cm dari batas tangga, ujung berbelok sesuai ketentuan </label>
        <select class="form-control" name="prasarana10.a" id="prasarana10.a" disabled>
          <option value="<?= $data['bila_tangga']; ?>" selected><?= $data['bila_tangga']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Bila Ram, Apakah itu:</label><br>
        <label for="exampleFormControlInput1">Landaian Menerus, Berbelok, Berbalik Arah, atau Kearah Pintu,maka: Sudut Kemiringan Pijakan (≤70 dan panjang mendatar Ram Mak-simal (9m), Lebar Pijakan Minimal 120 cm, Lebar Bordes minimal 180 cm (Bila di lantai atas untuk pelayanan), sesuai ketentuan</label>
        <select class="form-control" name="prasarana10.b" id="prasarana10.b" disabled>
          <option value="<?= $data['bila_ram']; ?>" selected><?= $data['bila_ram']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>11. PUSKESMAS KELILING DAN AMBULAN</strong></label><br>
        <label for="exampleFormControlInput1">a. Kendaraan Puskesmas Keliling (Roda 4/4WD/Perahu Bermotor / Lainnya); Jumlah:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['keliling_unit']; ?>" placeholder="..." name="prasarana11.a1" id="prasarana10.a1" value="" readonly>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <select class="form-control" name="prasarana11.a2" id="prasarana11.a2" disabled>
              <option value="<?= $data['kendaraan_ada']; ?>" selected><?= $data['kendaraan_ada']; ?></option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Kendaraan Ambulans(Roda 4 / 4WD / Perahu Bermotor / Lainnya:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['ambulan_unit']; ?>" placeholder="..." name="prasarana11.b1" id="prasarana11.b1" value="" readonly>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <select class="form-control" name="prasarana11.b2" id="prasarana11.b2" disabled>
              <option value="<?= $data['ambulan_ada']; ?>" selected><?= $data['ambulan_ada']; ?></option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Roda-2: Standar/Trail:</label>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="<?= $data['roda_unit']; ?>" placeholder="..." name="prasarana11.c1" id="prasarana11.c1" value="" readonly>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <select class="form-control" name="prasarana11.c2" id="prasarana11.c2" disabled>
              <option value="<?= $data['roda_ada']; ?>" selected><?= $data['roda_ada']; ?></option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Puskesmas keliling dalam kondisi baik, bersih dan berfungsi serta mempunyai perlengkapan/alat yang lengkap sebagai puskesmas keliling</label>
        <select class="form-control" name="prasarana11.d" id="prasarana11.d" disabled>
          <option value="<?= $data['puskesmas_keliling']; ?>" selected><?= $data['puskesmas_keliling']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Ambulan Puskesmas dalam kondisi baik, bersih dan berfungsi serta mempunyai alat kesehatan yang lengkap sebagai ambulan</label>
        <select class="form-control" name="prasarana11.e" id="prasarana11.e" disabled>
          <option value="<?= $data['ambulan_baik']; ?>" selected><?= $data['ambulan_baik']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Puskesmas mempunyai daftar rujukan RS yang jelas dan sesuai dengan kebutuhan pasien</label>
        <select class="form-control" name="prasarana11.f" id="prasarana11.f" disabled>
          <option value="<?= $data['rujukan']; ?>" selected><?= $data['rujukan']; ?></option>
        </select>
      </div>
    </form>
    <a class="btn float-right btn-danger" href="<?= base_url('Prasarana_Puskesmas/ubah'); ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
  </div>
</div>