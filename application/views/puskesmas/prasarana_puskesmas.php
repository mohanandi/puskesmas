<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Prasarana Puskesmas</strong></h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Prasarana_Puskesmas/tambah');
      $button = 'Simpan';
    }
    ?>
    <form method="POST" action="<?= $link; ?>" style=" padding:20px;">

      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>1. PENGHAWAAN (VENTILASI)</strong></label><br>
        <label for="exampleFormControlInput1">Bila menggunakan ventilasi alami pada ruangan, minimal 15 % dari luas lantai ruangan tersebut</label>
        <select class="form-control" name="prasarana1_1" id="prasarana1_1">
          <?php is_terisi($data['ventilasi_alami'], set_value('prasarana1_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang farmasi yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1_2" id="prasarana1_2">
          <?php is_terisi($data['ac_farmasi'], set_value('prasarana1_2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang tindakan yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1_3" id="prasarana1_3">
          <?php is_terisi($data['ac_tindakan'], set_value('prasarana1_3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang persalinan yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1_4" id="prasarana1_4">
          <?php is_terisi($data['ac_persalinan'], set_value('prasarana1_4')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat pendingin ruangan/AC pada ruang laboratorium yang terawat dan bersih</label>
        <select class="form-control" name="prasarana1_5" id="prasarana1_5">
          <?php is_terisi($data['ac_lab'], set_value('prasarana1_5')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Di Laboratorium dan ruang pemeriksaan, penempatan kipas angin/AC membuat arah aliran udara bergerak dari petugas kesehatan ke arah pasien</label>
        <select class="form-control" name="prasarana1_6" id="prasarana1_6">
          <?php is_terisi($data['lab_ac'], set_value('prasarana1_6')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_6', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ventilasi ruang tunggu dan pemeriksaan membuat nyaman dan aman pasien dan pekerja Puskesmas serta dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana1_7" id="prasarana1_7">
          <?php is_terisi($data['ventilasi_tunggu'], set_value('prasarana1_7')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_7', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Udara didalam Puskesmas tidak pengap/terasa nyaman</label>
        <select class="form-control" name="prasarana1_8" id="prasarana1_8">
          <?php is_terisi($data['udara_puskesmas'], set_value('prasarana1_8')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_8', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Udara di dalam Puskesmas tidak berbau</label>
        <select class="form-control" name="prasarana1_9" id="prasarana1_9">
          <?php is_terisi($data['udara_berbau'], set_value('prasarana1_9')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_9', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kelembapan berkisar 40-70% RH</label>
        <select class="form-control" name="prasarana1_10" id="prasarana1_10">
          <?php is_terisi($data['kelembapan'], set_value('prasarana1_10')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_10', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Laju ventilasi udara 0,15 – 0,50 meter/detik</label>
        <select class="form-control" name="prasarana1_11" id="prasarana1_11">
          <?php is_terisi($data['laju_ventilasi'], set_value('prasarana1_11')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana1_11', '<small class="text-danger pl-3">', '</small>'); ?>
      </div><br>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>2. SISTEM PENCAHAYAAN</strong></label><br>
        <label for="exampleFormControlInput1">Pencahayaan dalam ruangan Puskesmas terdistribusi merata</label>
        <select class="form-control" name="prasarana2_1" id="prasarana2_1">
          <?php is_terisi($data['pencahayaan'], set_value('prasarana2_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana2_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang pemeriksaan umum, KIA, KB, Imunisasi, Gigi dan mulut, ASI, Farmasi, Rawat Inap, Ruang Kantor rmempunyai tingkat pencahayaan rata-rata 200 Lux</label>
        <select class="form-control" name="prasarana2_2" id="prasarana2_2">
          <?php is_terisi($data['duaratus'], set_value('prasarana2_2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana2_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang Tindakan, Ruang Laboratorium, Ruang Gadar; rmempunyai tingkat pencahayaan rata-rata 300 Lux </label>
        <select class="form-control" name="prasarana2_3" id="prasarana2_3">
          <?php is_terisi($data['tigaratus'], set_value('prasarana2_3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana2_3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ruang Tunggu, KM/WC, Laundry, Gudang Umum, Dapur & Pantry; rmempunyai tingkat pencahayaan rata-rata 100 Lux </label>
        <select class="form-control" name="prasarana2_4" id="prasarana2_4">
          <?php is_terisi($data['seratus'], set_value('prasarana2_4')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana2_4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div><br>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>3. SISTEM SANITASI</strong></label><br>
        <label for="exampleFormControlInput1">Ketersediaan air untuk hygiene dan sanitasi di Puskesmas dalam keadaan baik dan bersih serta mengalir 24 jam</label>
        <select class="form-control" name="prasarana3_1" id="prasarana3_1">
          <?php is_terisi($data['hygiene'], set_value('prasarana3_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk pasien rawat jalan 15-20 liter/orang/hari</label>
        <select class="form-control" name="prasarana3_2" id="prasarana3_2">
          <?php is_terisi($data['limabelas'], set_value('prasarana3_2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk pasien rawat inap 40-60 liter/orang/hari</label>
        <select class="form-control" name="prasarana3_3" id="prasarana3_3">
          <?php is_terisi($data['empatpuluh'], set_value('prasarana3_3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan air untuk keperluan hygiene dan sanitasi untuk ruang bersalin 100 liter/orang/hari</label>
        <select class="form-control" name="prasarana3_4" id="prasarana3_4">
          <?php is_terisi($data['hygiene_seratus'], set_value('prasarana3_4')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sumber Air Bersih</label>
        <select class="form-control" name="prasarana3_5" id="prasarana3_5">
          <?php if ($data['sumber_air']) : ?>
            <option value="<?= $data['sumber_air'] ?>"><?= $data['sumber_air'] ?></option>
          <?php else : ?>
            <option value="<?= set_value('prasarana3_5'); ?>"><?= set_value('prasarana3_5'); ?></option>
          <?php endif; ?>
          <option value="PDAM">PDAM</option>
          <option value="Sumur Pompa Listrik/SPT">Sumur Pompa Listrik/SPT</option>
          <option value="Sumur Gali">Sumur Gali</option>
          <option value="Tadah Hujan">Tadah Hujan</option>
          <option value="Air Permukaan">Air Permukaan</option>
          <option value="Lainnya">Lainnya</option>
        </select>
        <?= form_error('prasarana3_5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saluran air limbah kedap air, bersih dari sampah dan dilengkapi penutup dengan bak kontrol untuk menjaga, kemiringan saluran minimal 1% </label>
        <select class="form-control" name="prasarana3_6" id="prasarana3_6">
          <?php is_terisi($data['saluran_air'], set_value('prasarana3_6')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_6', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat IPAL Puskesmas</label>
        <select class="form-control" name="prasarana3_7" id="prasarana3_7">
          <?php is_terisi($data['ipal'], set_value('prasarana3_7')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_7', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia tempat sampah minimal 2 buah per ruangan</label>
        <select class="form-control" name="prasarana3_8" id="prasarana3_8">
          <?php is_terisi($data['sampah_dua'], set_value('prasarana3_8')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_8', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas melakukan pemilahan sampah infeksius, benda tajam, dan sampah non infeksius</label>
        <select class="form-control" name="prasarana3_9" id="prasarana3_9">
          <?php is_terisi($data['pemilihan'], set_value('prasarana3_9')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_9', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Terdapat tempat penampungan sementara (TPS) limbah B3 Puskesmas dengan kapasitas yang cukup dalam kondisi baik, rapi dan bersih, dan berizin</label>
        <select class="form-control" name="prasarana3_10" id="prasarana3_10">
          <?php is_terisi($data['tps'], set_value('prasarana3_10')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_10', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia wastafel pada ruang persalinan, ruang pemeriksaan umum, ruang gigi dan mulut ruang farmasi, ruang laboratorium, toilet pengunjung, sputum booth dalam kondisi baik, rapi dan bersih.</label>
        <select class="form-control" name="prasarana3_11" id="prasarana3_11">
          <?php is_terisi($data['westafel'], set_value('prasarana3_11')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_11', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tidak ada serbet/lap handuk/lap kain untuk mengeringkan tangan di dekat wastafel</label>
        <select class="form-control" name="prasarana3_12" id="prasarana3_12">
          <?php is_terisi($data['serbet'], set_value('prasarana3_12')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_12', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia handrub di ruang rawat inap dan pasca persalinan, koridor Puskesmas, dan pintu keluar Puskesmas </label>
        <select class="form-control" name="prasarana3_13" id="prasarana3_13">
          <?php is_terisi($data['handrub'], set_value('prasarana3_13')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_13', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia septic tank yang tersambung ke IPAL. Jika dengan resapan maka harus secara rutin dilakukan penyedotan</label>
        <select class="form-control" name="prasarana3_14" id="prasarana3_14">
          <?php is_terisi($data['septik_tank'], set_value('prasarana3_14')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana3_14', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>4. SISTEM KELISTRIKAN</strong></label><br>
        <label for="exampleFormControlInput1">Sumber daya listrik utama Puskesmas</label>
        <select class="form-control" name="prasarana4_1" id="prasarana4_1">
          <?php if ($data['tgl_izin']) : ?>
            <option value="<?= $data['listrik_puskesmas'] ?>"><?= $data['listrik_puskesmas'] ?></option>
          <?php else : ?>
            <option value="<?= set_value('prasarana4_1'); ?>"><?= set_value('prasarana4_1'); ?></option>
          <?php endif; ?>
          <option value="PLN">PLN</option>
          <option value="Tenaga Surya/Solarsel">Tenaga Surya/Solarsel</option>
          <option value="Genset">Genset</option>
          <option value="Tenaga Angin/Bayu">Tenaga Angin/Bayu</option>
          <option value="Lainnya">Lainnya</option>
        </select>
        <?= form_error('prasarana4_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kekuatan Daya Listrik PLN</label>
        <?php if ($data['daya_listrik']) : ?>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana4_2" id="prasarana4_2" value="<?= $data['daya_listrik']; ?>">
        <?php else : ?>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana4_2" id="prasarana4_2" value="<?= set_value('prasarana4_2'); ?>">
        <?php endif; ?>
        <?= form_error('prasarana4_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sumber daya listrik cadangan/darurat</label>
        <select class="form-control" name="prasarana4_3" id="prasarana4_3">
          <?php if ($data['listrik_cadangan']) : ?>
            <option value="<?= $data['listrik_cadangan']; ?>"><?= $data['listrik_cadangan']; ?></option>
          <?php else : ?>
            <option value="<?= set_value('prasarana4_3') ?>"><?= set_value('prasarana4_3') ?></option>
          <?php endif; ?>
          <option value="Genset">Genset</option>
          <option value="Tenaga Surya/Solarsel">Tenaga Surya/Solarsel</option>
          <option value="Tenaga Angin">Tenaga Angin</option>
          <option value="Tenaga Air">Tenaga Air</option>
          <option value="Lainnya">Lainnya</option>
        </select>
        <?= form_error('prasarana4_3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kekuatan daya listrik cadangan</label>
        <?php if ($data['kekuatan_cadangan']) : ?>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana4_4" id="prasarana4_4" value="<?= $data['kekuatan_cadangan']; ?>">
        <?php else : ?>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana4_4" id="prasarana4_4" value="<?= set_value('prasarana4_4'); ?>">
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Listrik tersedia 24 jam dalam sehari</label>
        <select class="form-control" name="prasarana4_5" id="prasarana4_5">
          <?php is_terisi($data['listrik_sehari'], set_value('prasarana4_5')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana4_5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketersediaan listrik mencukupi untuk kebutuhan pelayanan Puskesmas</label>
        <select class="form-control" name="prasarana4_6" id="prasarana4_6">
          <?php is_terisi($data['listrik_mencukupi'], set_value('prasarana4_6')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana4_6', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia sumber daya listrik cadangan/darurat minimal 75% dari daya listrik normal</label>
        <select class="form-control" name="prasarana4_7" id="prasarana4_7">
          <?php is_terisi($data['listrik_minimal'], set_value('prasarana4_7')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana4_7', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Peletakan/penataan kabel listrik Puskesmas dalam kondisi yang aman, baik dan rapi</label>
        <select class="form-control" name="prasarana4_8" id="prasarana4_8">
          <?php is_terisi($data['peletakan_kabel'], set_value('prasarana4_8')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana4_8', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>5. SISTEM KOMUNIKASI</strong></label><br>
        <label for="exampleFormControlInput1">a. Tersedia saluran telefon kabel Puskesmas</label>
        <select class="form-control" name="prasarana5_a" id="prasarana5_a">
          <?php is_terisi($data['saluran_tlp'], set_value('prasarana5_a')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Tersedia telefon seluler khusus Puskesmas</label>
        <select class="form-control" name="prasarana5_b" id="prasarana5_b">
          <?php is_terisi($data['saluran_seluler'], set_value('prasarana5_b')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_b', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Tersedia telefon khusus di Unit Gadar</label>
        <select class="form-control" name="prasarana5_c" id="prasarana5_c">
          <?php is_terisi($data['tlp_gadar'], set_value('prasarana5_c')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_c', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Tersedia jaringan internet berfungsi</label>
        <select class="form-control" name="prasarana5_d" id="prasarana5_d">
          <?php is_terisi($data['internet'], set_value('prasarana5_d')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_d', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Pemanggilan pasien terdengar dengan jelas di area ruang tunggu</label>
        <select class="form-control" name="prasarana5_e" id="prasarana5_e">
          <?php is_terisi($data['pemanggilan_jelas'], set_value('prasarana5_e')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_e', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Terdapat sistem antrian menggunakan nomor yang jelas</label>
        <select class="form-control" name="prasarana5_f" id="prasarana5_f">
          <?php is_terisi($data['sistem_antrian'], set_value('prasarana5_f')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_f', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">g. Terdapat mesin nomor antrian bagi pasien yang mendaftar</label>
        <select class="form-control" name="prasarana5_g" id="prasarana5_g">
          <?php is_terisi($data['mesin_nomor'], set_value('prasarana5_g')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_g', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">h. Terdapat monitor/TV yang menginformasikan nomor urut antrian pasien yang sedang di panggil</label>
        <select class="form-control" name="prasarana5_h" id="prasarana5_h">
          <?php is_terisi($data['tv_urut'], set_value('prasarana5_h')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_h', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">i. Terdapat perkiraan waktu pelayanan untuk range nomor antrian tertentu</label>
        <select class="form-control" name="prasarana5_i" id="prasarana5_i">
          <?php is_terisi($data['perkiraan_waktu'], set_value('prasarana5_i')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana5_i', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>6. SISTEM GAS MEDIS</strong></label><br>
        <label for="exampleFormControlInput1">Tabung gas medis Puskesmas di cat warna putih dan dalam kondisi baik dan bersih</label>
        <select class="form-control" name="prasarana6_1" id="prasarana6_1">
          <?php is_terisi($data['gas_putih'], set_value('prasarana6_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana6_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saat digunakan tabung gas medis harus menggunakan pengaman seperti troli tabung atau dirantai dan dalam kondisi rapi</label>
        <select class="form-control" name="prasarana6_2" id="prasarana6_2">
          <?php is_terisi($data['gas_aman'], set_value('prasarana6_2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana6_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Saat tabung tidak digunakan tabung harus menggunakan tutup pelindung/katup yang dipasang erat dan dirantai</label>
        <select class="form-control" name="prasarana6_3" id="prasarana6_3">
          <?php is_terisi($data['gas_tutup'], set_value('prasarana6_3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana6_3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>7. SISTEM PROTEKSI PETIR</strong></label><br>
        <label for="exampleFormControlInput1">Puskesmas mempunyai sistem proteksi petir terstandar</label>
        <select class="form-control" name="prasarana7_1" id="prasarana7_1">
          <?php is_terisi($data['proteksi'], set_value('prasarana7_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana7_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>8. SISTEM PROTEKSI KEBAKARAN</strong></label><br>
        <label for="exampleFormControlInput1">Puskesmas mempunyai APAR (alat pemadam api ringan) dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana8_1" id="prasarana8_1">
          <?php is_terisi($data['apar'], set_value('prasarana8_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana8_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">APAR berkapsitas 2 Kg, terpasang minimal satu buah untuk setiap 15 m2 dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana8_2" id="prasarana8_2">
          <?php is_terisi($data['apar_dua'], set_value('prasarana8_2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana8_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">APAR diletakan pada dinding dengan ketinggian antara 15 - 120 cm dalam kondisi baik, rapi dan bersih</label>
        <select class="form-control" name="prasarana8_3" id="prasarana8_3">
          <?php is_terisi($data['apar_dinding'], set_value('prasarana8_3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana8_3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Di Ruang Genset tersedia APAR CO2</label>
        <select class="form-control" name="prasarana8_4" id="prasarana8_4">
          <?php is_terisi($data['apar_co'], set_value('prasarana8_4')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana8_4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>9. SISTEM PENGENDALIAN KEBISINGAN</strong></label><br>
        <label for="exampleFormControlInput1">Intensitas kebisingan equivalen di luar bangunan puskesmas tidak lebih dari 55 dBA</label>
        <select class="form-control" name="prasarana9_1" id="prasarana9_1">
          <?php is_terisi($data['kebisingan_luar'], set_value('prasarana9_1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana9_1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Intensitas kebisingan equivalen di dalam bangunan puskesmas tidak lebih dari 45 dBA</label>
        <select class="form-control" name="prasarana9_2" id="prasarana9_2">
          <?php is_terisi($data['kebisingan_dlm'], set_value('prasarana9_2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana9_2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>10. SISTEM TRANSPORTASI VERTIKAL DALAM PUSKESMAS</strong></label><br>
        <label for="exampleFormControlInput1">a. Bila Tangga, maka:</label><br>
        <label for="exampleFormControlInput1">Ukuran Tinggi Pijakan (15-17) cm; Kemiring-an<600, Lebar Pijakan≥120 cm; Tinggi Hand-rail (65-80) cm; dan Panjang Handrail>30 cm dari batas tangga, ujung berbelok sesuai ketentuan</label>
        <select class="form-control" name="prasarana10_a" id="prasarana10_a">
          <?php is_terisi($data['bila_tangga'], set_value('prasarana10_a')); ?>
          <option value="Ya">Sesuai</option>
          <option value="Tidak">Tidak Sesuai</option>
        </select>
        <?= form_error('prasarana10_a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Bila Ram, Apakah itu:</label><br>
        <label for="exampleFormControlInput1">Landaian Menerus, Berbelok, Berbalik Arah, atau Kearah Pintu,maka: Sudut Kemiringan Pijakan (≤70 dan panjang mendatar Ram Mak-simal (9m), Lebar Pijakan Minimal 120 cm, Lebar Bordes minimal 180 cm (Bila di lantai atas untuk pelayanan), sesuai ketentuan</label>
        <select class="form-control" name="prasarana10_b" id="prasarana10_b">
          <?php is_terisi($data['bila_ram'], set_value('prasarana10_b')); ?>
          <option value="Ya">Sesuai</option>
          <option value="Tidak">Tidak Sesuai</option>
        </select>
        <?= form_error('prasarana10_b', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>11. PUSKESMAS KELILING DAN AMBULAN</strong></label><br>
        <label for="exampleFormControlInput1">a. Kendaraan Puskesmas Keliling (Roda 4/4WD/Perahu Bermotor / Lainnya); Jumlah:</label>
        <div class="row">
          <div class="col">
            <?php if ($data['keliling_unit']) : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana11_a1" id="prasarana11_a1" value="<?= $data['keliling_unit']; ?>">
            <?php else : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana11_a1" id="prasarana11_a1" value="<?= set_value('prasarana11_a1'); ?>">
            <?php endif; ?>
            <?= form_error('prasarana11_a1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <select class="form-control" name="prasarana11_a2" id="prasarana11_a2">
              <?php is_terisi($data['kendaraan_ada'], set_value('prasarana11_a2')); ?>
              <option value="Ya">Ada</option>
              <option value="Tidak">Tidak Ada</option>
            </select>
            <?= form_error('prasarana11_a2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Kendaraan Ambulans(Roda 4 / 4WD / Perahu Bermotor / Lainnya:</label>
        <div class="row">
          <div class="col">
            <?php if ($data['ambulan_unit']) : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana11_b1" id="prasarana11_b1" value="<?= $data['ambulan_unit']; ?>">
            <?php else : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana11_b1" id="prasarana11_b1" value="<?= set_value('prasarana11_b1'); ?>">
            <?php endif; ?>
            <?= form_error('prasarana11_b1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <select class="form-control" name="prasarana11_b2" id="prasarana11_b2">
              <?php is_terisi($data['ambulan_ada'], set_value('prasarana11_b2')); ?>
              <option value="Ya">Ada</option>
              <option value="Tidak">Tidak Ada</option>
            </select>
            <?= form_error('prasarana11_b2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Roda-2: Standar/Trail:</label>
        <div class="row">
          <div class="col">
            <?php if ($data['roda_unit']) : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana11_c1" id="prasarana11_c1" value="<?= $data['roda_unit']; ?>">
            <?php else : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="prasarana11_c1" id="prasarana11_c1" value="<?= set_value('prasarana11_c1'); ?>">
            <?php endif; ?>
            <?= form_error('prasarana11_c1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col">
            <label>Unit</label>
          </div>
          <div class="col">
            <select class="form-control" name="prasarana11_c2" id="prasarana11_c2">
              <?php is_terisi($data['roda_ada'], set_value('prasarana11_c2')); ?>
              <option value="Ya">Ada</option>
              <option value="Tidak">Tidak Ada</option>
            </select>
            <?= form_error('prasarana11_c2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Puskesmas keliling dalam kondisi baik, bersih dan berfungsi serta mempunyai perlengkapan/alat yang lengkap sebagai puskesmas keliling</label>
        <select class="form-control" name="prasarana11_d" id="prasarana11_d">
          <?php is_terisi($data['puskesmas_keliling'], set_value('prasarana11_d')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana11_d', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Ambulan Puskesmas dalam kondisi baik, bersih dan berfungsi serta mempunyai alat kesehatan yang lengkap sebagai ambulan</label>
        <select class="form-control" name="prasarana11_e" id="prasarana11_e">
          <?php is_terisi($data['ambulan_baik'], set_value('prasarana11_e')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana11_e', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Puskesmas mempunyai daftar rujukan RS yang jelas dan sesuai dengan kebutuhan pasien</label>
        <select class="form-control" name="prasarana11_f" id="prasarana11_f">
          <?php is_terisi($data['rujukan'], set_value('prasarana11_f')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('prasarana11_f', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>