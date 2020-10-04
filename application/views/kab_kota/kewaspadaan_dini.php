<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menuar Potensial KLB / Wabah</strong></h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Kewaspadaan_Dini/tambah');
      $button = 'Simpan';
    }
    ?>
    <form style=" padding:20px;" method="POST" action="<?= $link; ?>">
      <?php if ($kode_puskesmas) : ?>
        <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= $kode_puskesmas; ?>">
      <?php else : ?>
        <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= set_value('kode_puskesmas'); ?>">
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Kelengkapan laporan SKDR <a href="##" onclick="toggle_visibility('foo25');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>

        <p style="font-size:12px;">
          1. Kelengkapan ≥ 80%, nilai 10 <br>
          2. kelengkapan antara 61 % - 79 % nilai 5 <br>
          3. kelengkapan ≤ 60%, nilai 0
          <p id="foo25" style="display:none; font-size:12px; margin-left:20px;">Lihat kelengkapan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
          <select class="form-control" name="pelaksanaan1" id="pelaksanaan1">
            <?php is_terisi($data['skdr'], set_value('pelaksanaan1')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pelaksanaan1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Ketepatan Laporan SKDR <a href="##" onclick="toggle_visibility('foo26');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>

        <p style="font-size:12px;">
          1. Kelengkapan ≥ 80%, nilai 10 <br>
          2. kelengkapan antara 61 % - 79 % nilai 5 <br>
          3. kelengkapan ≤ 60%, nilai 0
          <p id="foo26" style="display:none; font-size:12px; margin-left:20px;">Lihat ketepatan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
          <select class="form-control" name="pelaksanaan2" id="pelaksanaan2">
            <?php is_terisi($data['laporan_skdr'], set_value('pelaksanaan2')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pelaksanaan2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Analisa Trend Mingguan Penyakit Potensial KLB <a href="##" onclick="toggle_visibility('foo27');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>

        <p style="font-size:12px;">
          1. ada, nilai 10 <br>
          2. tidak ada, nilai 0
          <p id="foo27" style="display:none; font-size:12px; margin-left:20px;">Grafik trend mingguan beberapa penyakit potensial KLB di Puskesmas </p>
          <select class="form-control" name="pelaksanaan3" id="pelaksanaan3">
            <?php is_terisi($data['analisa_trend'], set_value('pelaksanaan3')); ?>
            <option value="1">1</option>
            <option value="2">2</option>

          </select>
          <?= form_error('pelaksanaan3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>