<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">

      <div class="col-md-9">


        <form style="height:350px; overflow-y:auto; padding:20px;">
		<div class="alert alert-success" role="alert">
							Data Berhasil dimasukan !
						</div>
							<div class="form-group">
							 <label for="exampleFormControlInput1">Nomor izin operasional Puskesmas</label>
							  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="" readonly>
							</div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kelengkapan laporan SKDR <a href="#" onclick="toggle_visibility('foo25');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo25" style="display:none; font-size:12px; margin-left:20px;">Lihat kelengkapan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
            <select class="form-control" name="pelaksanaan1" id="pelaksanaan1" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Kelengkapan ≥ 80%, nilai 10</option>
              <option value="2">Kelengkapan antara 61% - 79%, nilai 5</option>
              <option value="3">Kelengkapan ≤ 60%, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ketepatan Laporan SKDR <a href="#" onclick="toggle_visibility('foo26');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo26" style="display:none; font-size:12px; margin-left:20px;">Lihat ketepatan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
            <select class="form-control" name="pelaksanaan2" id="pelaksanaan2" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Kelengkapan ≥ 80%, nilai 10</option>
              <option value="2">Kelengkapan antara 61% - 79%, nilai 5</option>
              <option value="3">Kelengkapan ≤ 60%, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Analisa Trend Mingguan Penyakit Potensial KLB <a href="#" onclick="toggle_visibility('foo27');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo27" style="display:none; font-size:12px; margin-left:20px;">Grafik trend mingguan beberapa penyakit potensial KLB di Puskesmas </p>
            <select class="form-control" name="pelaksanaan3" id="pelaksanaan3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada (diberi skor 10)</option>
              <option value="2">Tidak ada (diberi skor 0)</option>

            </select>
          </div>
        </form>
        <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
        <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

      </div>

    </div>


  </div>
</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/') ?>js/tooltip.js"></script>
<script src="<?= base_url('assets/') ?>js/para.js"></script>
