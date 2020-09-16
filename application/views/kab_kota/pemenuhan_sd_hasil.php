<div class="site-section" id = "menu">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Form Menu</span>
            <h2 class="heading"><strong class="text-primary">Pemenuhan Sumber Daya </strong> Puskesmas</h2>
          </div>
        </div>



  <form style="; ; padding:20px;">

    <div class="alert alert-success" role="alert">
      Data Berhasil dimasukan !
    </div>


    <div class="form-group">
      <label for="exampleFormControlInput1">Pemenuhan standar bangunan Puskesmas <a href="#" onclick="toggle_visibility('foo');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo" style="display:none; font-size:14px;">Persentase pemenuhan standar bangunan Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan</p>

      <select class="form-control" name="pemenuhan1" id="pemenuhan1" disabled>
        <option value="<?= $data['standar_bangunan']; ?>" selected><?= $data['standar_bangunan']; ?></option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Pemenuhan standar prasarana <a href="#" onclick="toggle_visibility('foo1');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo1" style="display:none; font-size:14px;">Persentase pemenuhan standar prasarana Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan </p>

      <select class="form-control" name="pemenuhan2" id="pemenuhan2" disabled>
        <option value="<?= $data['standar_prasarana']; ?>" selected><?= $data['standar_prasarana']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pemenuhan standar peralatan Puskesmas <a href="#" onclick="toggle_visibility('foo2');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo2" style="display:none; font-size:14px;">Persentase pemenuhan standar prasarana Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan </p>
      <select class="form-control" name="pemenuhan3" id="pemenuhan3" disabled>
        <option value="<?= $data['standar_peralatan']; ?>" selected><?= $data['standar_peralatan']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Ketersediaan obat <a href="#" onclick="toggle_visibility('foo3');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo3" style="display:none; font-size:14px;">Ketersediaan obat di Puskesmas sesuai dengan RKO</p>
      <select class="form-control" name="pemenuhan4" id="pemenuhan4" disabled>
        <option value="<?= $data['sedia_obat']; ?>" selected><?= $data['sedia_obat']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pengendalian Ketersediaan Obat <a href="#" onclick="toggle_visibility('foo7');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo7" style="display:none; font-size:14px;">Terdapat upaya yang dilakukan untuk mencegah/mengatasi kekosongan atau kekurangan obat di puskesmas, meliputi tersedianya 3 dokumen : <br>
        <br> 1. SOP Pengendalian Ketersediaan
        <br> 2. Dokumen Perencanaan Kebutuhan Obat
        <br> 3. Dokumen mutasi obat/distribusi obat</p>
      </label>
      <select class="form-control" name="pemenuhan5" id="pemenuhan5" disabled>
        <option value="<?= $data['pengendali_obat']; ?>" selected><?= $data['pengendali_obat']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pemenuhan sumber daya manusia (SDM) <a href="#" onclick="toggle_visibility('foo4');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo4" style="display:none; font-size:14px;">Jenis dan jumlah SDM kesehatan Puskesmas terpenuhi sesuai analisis beban kerja (Permenkes 33 tahun 2015 tentang Analisis Beban Kerja SDM Kesehatan)
        Standar minimal sesuai dengan Permenkes 43 tahun 2019 tentang Puskesmas</p>
      <select class="form-control" name="pemenuhan6" id="pemenuhan6" disabled>
        <option value="<?= $data['pemenuhan_sdm']; ?>" selected><?= $data['pemenuhan_sdm']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Penerapan Sistem Rujukan Terintegrasi (Sisrute)<a href="#" onclick="toggle_visibility('foo5');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo5" style="display:none; font-size:14px;">Sistem rujukan terintegrasi sudah diterapkan ditandai dengan: pemanfaatan Aplikasi Sisrute dalam proses rujukan pasien ke FKRTL atau ke FKTP lainnya</p>
      <select class="form-control" name="pemenuhan7" id="pemenuhan7" disabled>
        <option value="<?= $data['sisrute']; ?>" selected><?= $data['sisrute']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pelaksanaan Sistem Informasi Puskesmas <a href="#" onclick="toggle_visibility('foo6');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo6" style="display:none; font-size:14px;">Sistem Informasi Puskesmas telah diterapkan dengan baik di Puskesmas ditandai dengan: adanya pencatatan dan pelaporan Puskesmas dalam bentuk elektronik atau non elektronik sesuai dengan ketentuan yang berlaku.(Permenkes 31 tahun 2019 tentang Sistem Informasi Puskesmas)</p>
      <select class="form-control" name="pemenuhan8" id="pemenuhan8" disabled>
        <option value="<?= $data['informasi_puskesmas']; ?>" selected><?= $data['informasi_puskesmas']; ?></option>
      </select>
    </div>


  </form>
  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>
</div>
