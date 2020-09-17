<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menuar Potensial KLB / Wabah</strong></h2>
      </div>
    </div>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Kelengkapan laporan SKDR <a href="#" onclick="toggle_visibility('foo25');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <p id="foo25" style="display:none; font-size:12px; margin-left:20px;">Lihat kelengkapan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
        <select class="form-control" name="pelaksanaan1" id="pelaksanaan1" disabled>
          <option value="<?= $data['skdr']; ?>" selected><?= $data['skdr']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ketepatan Laporan SKDR <a href="#" onclick="toggle_visibility('foo26');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <p id="foo26" style="display:none; font-size:12px; margin-left:20px;">Lihat ketepatan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
        <select class="form-control" name="pelaksanaan2" id="pelaksanaan2" disabled>
          <option value="<?= $data['laporan_skdr']; ?>" selected><?= $data['laporan_skdr']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Analisa Trend Mingguan Penyakit Potensial KLB <a href="#" onclick="toggle_visibility('foo27');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <p id="foo27" style="display:none; font-size:12px; margin-left:20px;">Grafik trend mingguan beberapa penyakit potensial KLB di Puskesmas </p>
        <select class="form-control" name="pelaksanaan3" id="pelaksanaan3" disabled>
          <option value="<?= $data['analisa_trend']; ?>" selected><?= $data['analisa_trend']; ?></option>

        </select>
      </div>
    </form>
    <a class="btn float-right btn-danger" href="<?= base_url() ?>Kewaspadaan_Dini/ubah/<?= $data['kode']; ?>" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Edit</a>
  </div>
</div>