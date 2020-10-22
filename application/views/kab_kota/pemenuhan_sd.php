<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pemenuhan Sumber Daya </strong> Puskesmas</h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Pemenuhan_SD/tambah');
      $button = 'Simpan';
    }
    ?>
    <form style="padding:20px;" method="POST" action="<?= $link; ?>">
      <?php if ($kode_puskesmas) : ?>
        <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= $kode_puskesmas; ?>">
      <?php else : ?>
        <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= set_value('kode_puskesmas'); ?>">
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Pemenuhan standar bangunan Puskesmas <a href="#" onclick="toggle_visibility('foo');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>

        <p style="font-size:12px;">
          1. ≥ 80% nilai 10 <br>
          2. 60% s.d. < 80% nilai 5 <br>
            3. < 60%, nilai 0 <p id="foo" style="display:none; font-size:14px;">Persentase pemenuhan standar bangunan Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan</p>
        <select class="form-control" name="pemenuhan1" id="pemenuhan1">
          <?php is_terisi($data['standar_bangunan'], set_value('pemenuhan1')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3"> 3</option>
        </select>
        <?= form_error('pemenuhan1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">2. Pemenuhan standar prasarana <a href="##" onclick="toggle_visibility('foo1');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>

        <p style="font-size:12px;">
          1. ≥ 80% nilai 10 <br>
          2. 60% s.d. < 80% nilai 5 <br>
            3. < 60%, nilai 0 <p id="foo1" style="display:none; font-size:14px;">Persentase pemenuhan standar prasarana Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan </p>

        <select class="form-control" name="pemenuhan2" id="pemenuhan2">
          <?php is_terisi($data['standar_prasarana'], set_value('pemenuhan2')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3"> 3</option>
        </select>
        <?= form_error('pemenuhan2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Pemenuhan standar peralatan Puskesmas <a href="##" onclick="toggle_visibility('foo2');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>

        <p style="font-size:12px;">
          1. ≥ 80% nilai 10 <br>
          2. 60% s.d. < 80% nilai 5 <br>
            3. < 60%, nilai 0 <p id="foo2" style="display:none; font-size:14px;">Persentase pemenuhan standar peralatan Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan </p>
        <select class="form-control" name="pemenuhan3" id="pemenuhan3">
          <?php is_terisi($data['standar_peralatan'], set_value('pemenuhan3')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3"> 3</option>
        </select>
        <?= form_error('pemenuhan3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Ketersediaan obat <a href="##" onclick="toggle_visibility('foo4');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Seluruh obat (100%) sesuai RKO tersedia di Puskesmas, nilai 10 <br>
          2. 80% - < 100% obat di RKO tersedia di Puskesmas, nilai 5 <br>
            3. < 80 % obat di RKO tersedia di Puskesmas , nilai 0 <p id="foo4" style="display:none; font-size:14px;">Ketersediaan obat di Puskesmas sesuai dengan RKO</p>
        <select class="form-control" name="pemenuhan4" id="pemenuhan4">
          <?php is_terisi($data['sedia_obat'], set_value('pemenuhan4')); ?>
          <option value="1">1</option>
          <option value="2">2 </option>
          <option value="3"> 3</option>
        </select>
        <?= form_error('pemenuhan4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Pengendalian Ketersediaan Obat <a href="##" onclick="toggle_visibility('foo5');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Tersedianya 3 dokumen, nilai 10 <br>
          2. Tersedia dua dokumen, nilai 5 <br>
          3. Hanya tersedia satu dokumen atau tidak ada dokumen tersedia, nilai 0
          <p id="foo5" style="display:none; font-size:14px;">Terdapat upaya yang dilakukan untuk mencegah/mengatasi kekosongan atau kekurangan obat di puskesmas, meliputi tersedianya 3 dokumen :
            <br> 1. SOP Pengendalian Ketersediaan
            <br> 2. Dokumen Perencanaan Kebutuhan Obat
            <br> 3. Dokumen mutasi obat/distribusi obat</p>
          </label>
          <select class="form-control" name="pemenuhan5" id="pemenuhan5">
            <?php is_terisi($data['pengendali_obat'], set_value('pemenuhan5')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <?= form_error('pemenuhan5', '<small class="text-danger pl-3">', '</small>'); ?>
          </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Pemenuhan sumber daya manusia (SDM) <a href="##" onclick="toggle_visibility('foo6');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Alternatif SDM Kesehatan Puskesmas sesuai ABK, nilai 10 <br>
          2. Alternatif SDM Kesehatan Puskesmas sesuai standar minimal tetapi tidak sesuai ABK <br>
          3. SDM Kesehatan Puskesmas tidak sesuai ABK dan standar minimal , nilai 0
          <p id="foo6" style="display:none; font-size:14px;">Jenis dan jumlah SDM kesehatan Puskesmas terpenuhi sesuai analisis beban kerja (Permenkes 33 tahun 2015 tentang Analisis Beban Kerja SDM Kesehatan)
            Standar minimal sesuai dengan Permenkes 43 tahun 2019 tentang Puskesmas</p>
          <select class="form-control" name="pemenuhan6" id="pemenuhan6">
            <?php is_terisi($data['pemenuhan_sdm'], set_value('pemenuhan6')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3"> 3</option>
          </select>
          <?= form_error('pemenuhan6', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Penerapan Sistem Rujukan Terintegrasi (Sisrute)<a href="##" onclick="toggle_visibility('foo7');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Aplikasi Sisrute tersedia dan dimanfaatkan secara rutin (>50 kasus pertahun), nilai 10 <br>
          2. Aplikasi Sisrute telah tersedia tetapi frekuensi pemanfaatannya rendah (< 50 kasus per tahun), nilai 5 <br>
            3. Aplikasi Sisrute belum tersedia, nilai 0
            <p id="foo7" style="display:none; font-size:14px;">Sistem rujukan terintegrasi sudah diterapkan ditandai dengan: pemanfaatan Aplikasi Sisrute dalam proses rujukan pasien ke FKRTL atau ke FKTP lainnya</p>
            <select class="form-control" name="pemenuhan7" id="pemenuhan7">
              <?php is_terisi($data['sisrute'], set_value('pemenuhan7')); ?>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <?= form_error('pemenuhan7', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Pelaksanaan Sistem Informasi Puskesmas <a href="##" onclick="toggle_visibility('foo8');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Pencatatan dan pelaporan dilakukan sesuai ketentuan dan tepat waktu, nilai 10 <br>
          2. Pencatatan dan pelaporan dilakukan sesuai ketentuan tetapi tidak tepat waktu, nilai 5 <br>
          3. Pencatatan dan pelaporan tidak dilakukan sesuai dengan ketentuan, nilai 0
          <p id="foo8" style="display:none; font-size:14px;">Sistem Informasi Puskesmas telah diterapkan dengan baik di Puskesmas ditandai dengan: adanya pencatatan dan pelaporan Puskesmas dalam bentuk elektronik atau non elektronik sesuai dengan ketentuan yang berlaku.(Permenkes 31 tahun 2019 tentang Sistem Informasi Puskesmas)</p>
          <select class="form-control" name="pemenuhan8" id="pemenuhan8">
            <?php is_terisi($data['informasi_puskesmas'], set_value('pemenuhan8')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pemenuhan8', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>