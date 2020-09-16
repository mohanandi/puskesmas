<div class="col-md-9">
  <form style="height:350px; overflow-y:auto; padding:20px;">
    <div class="form-group">
      <label for="exampleFormControlInput1">Kelengkapan laporan SKDR <a href="#" onclick="toggle_visibility('foo25');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo25" style="display:none; font-size:12px; margin-left:20px;">Lihat kelengkapan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
      <select class="form-control" name="pelaksanaan1" id="pelaksanaan1">
        <?php is_terisi($data['skdr'], set_value('pelaksanaan1')); ?>
        <option value="1">Kelengkapan ≥ 80%, nilai 10</option>
        <option value="2">Kelengkapan antara 61% - 79%, nilai 5</option>
        <option value="3">Kelengkapan ≤ 60%, nilai 0</option>
      </select>
      <?= form_error('pelaksanaan1', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Ketepatan Laporan SKDR <a href="#" onclick="toggle_visibility('foo26');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo26" style="display:none; font-size:12px; margin-left:20px;">Lihat ketepatan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
      <select class="form-control" name="pelaksanaan2" id="pelaksanaan2">
        <?php is_terisi($data['laporan_skdr'], set_value('pelaksanaan2')); ?>
        <option value="1">Kelengkapan ≥ 80%, nilai 10</option>
        <option value="2">Kelengkapan antara 61% - 79%, nilai 5</option>
        <option value="3">Kelengkapan ≤ 60%, nilai 0</option>
      </select>
      <?= form_error('pelaksanaan2', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Analisa Trend Mingguan Penyakit Potensial KLB <a href="#" onclick="toggle_visibility('foo27');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo27" style="display:none; font-size:12px; margin-left:20px;">Grafik trend mingguan beberapa penyakit potensial KLB di Puskesmas </p>
      <select class="form-control" name="pelaksanaan3" id="pelaksanaan3">
        <?php is_terisi($data['analisa_trend'], set_value('pelaksanaan3')); ?>
        <option value="1">Ada (diberi skor 10)</option>
        <option value="2">Tidak ada (diberi skor 0)</option>
      </select>
      <?= form_error('pelaksanaan3', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
  </form>
  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

</div>