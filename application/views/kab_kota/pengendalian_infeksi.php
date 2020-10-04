<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pencegahan dan Pengendalian Infeksi dan Kesehatan Lingkungan</strong></h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Pengendalian_Infeksi/tambah');
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
        <label for="exampleFormControlInput1"><strong>VI.A Elemen Penilaian Penerapan Kewaspadaan Standar</strong></label><br>
        <label for="exampleFormControlInput1">1. Membangun budaya cuci tangan dan tersedia sarana prasarana cuci tangan <a href="##" onclick="toggle_visibility('foo13');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo13" style="display:none; font-size:12px; margin-left:20px;">Minta petugas simulasikan: <br> • Memenuhi standar <br> • Tidak memenuhi standar </p>
          <select class="form-control" name="pencegahan1a" id="pencegahan1a">
            <?php is_terisi($data['cuci_tangan'], set_value('pencegahan1a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan1a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Menggunakan APD (sarung tangan, masker, sepatu boot, apron, kaca mata/google, dll) ketika melakukan tindakan/kegiatan tertentu<a href="##" onclick="toggle_visibility('foo14');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo14" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan terutama: <br> • di unit Laboratorium, <br> • Ruang Persalinan,<br>• Ruang Tindakan, <br>• Ruang Sterilisasi, <br> • Poli Gigi, <br>• Insersi IUD, dan lainnya</p>
          <select class="form-control" name="pencegahan2a" id="pencegahan2a">
            <?php is_terisi($data['apd'], set_value('pencegahan2a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan2a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Penerapan Dekontaminasi Alat Kesehatan <a href="##" onclick="toggle_visibility('foo15');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo15" style="display:none; font-size:12px; margin-left:20px;">Lihat proses sterilisasi alat</p>
          <select class="form-control" name="pencegahan3a" id="pencegahan3a">
            <?php is_terisi($data['dekontaminasi'], set_value('pencegahan3a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan3a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Pengendalian Kesehatan Lingkungan <a href="##" onclick="toggle_visibility('foo16');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo16" style="display:none; font-size:12px; margin-left:20px;">Lihat laporan Inspeksi Kesehatan Lingkungan (IKL) Puskesmas (dilakukan minimal 1 kali setahun) <br> Ada laporan IKL dan rekomendasi ditindaklanjuti, nilai 10. <br> Ada laporan IKL, tidak ditindaklanjuti, nilai 5. <br> Tidak ada laporan, nilai 0 </p>
          <select class="form-control" name="pencegahan4a" id="pencegahan4a">
            <?php is_terisi($data['kesehatan_lingkungan'], set_value('pencegahan4a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan4a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">5. Pengelolaan Limbah Medis (termasuk dalam IKL) <a href="##" onclick="toggle_visibility('foo17');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <p id="foo17" style="display:none; font-size:12px; margin-left:20px;">Lihat bagaimana pengelolaan limbah medis di Puskesmas <br> 1. Ada pemilahan limbah medis dan non medis. <br> 2. Limbah dimasukkan ke warna kantong yang sesuai.<br>3. Limbah padat tajam dimasukkan ke dalam safety box <br>4. Limbah ditempatkan di TPS B3 berijin <br>5. Diolah dengan pengolahan limbah B3 berizin dan atau kerja sama dengan pihak ketiga pengolah limbah B3 berizin<br>Memenuhi semua kriteria, nilai 10.<br>Memenuhi sebagian kriteria (1,3,5) nilai 5<br>Tidak memenuhi semua kriteria, nilai 0 </p>
        <select class="form-control" name="pencegahan5a" id="pencegahan5a">
          <?php is_terisi($data['limbah_medis'], set_value('pencegahan5a')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('pencegahan5a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Perlindungan Kesehatan Petugas <br>a. Tatalaksana Pajanan<br>b. Tatalaksana Pajanan bahan infeksius ditempat kerja<br>c. Langkah Dasar Tatalaksana Klinis Profilaksis Pasca Pajanan (PPP) HIV Pada kasus kecelakaan kerja<a href="##" onclick="toggle_visibility('foo18');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo18" style="display:none; font-size:12px; margin-left:20px;">Lihat:<br>1. Ada/tidak ada kebijakan dan SOP dan lainnya <br> 2. Dilaksanakan atau tidak </p>
          <select class="form-control" name="pencegahan6a" id="pencegahan6a">
            <?php is_terisi($data['perlindungan_petugas'], set_value('pencegahan6a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan6a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Pemisahan Pasien <a href="##" onclick="toggle_visibility('foo19');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo19" style="display:none; font-size:12px; margin-left:20px;">Lihat:<br> 1. Ada Kebijakan, SOP, lainnya, untuk memisahkan pasien infeksius dengan pasien non infeksius, misal ruang TB, ruang isolasi untuk rawat inap<br> 2. Tidak ada kebijakan, SOP, lainnya </p>
          <select class="form-control" name="pencegahan7a" id="pencegahan7a">
            <?php is_terisi($data['pemisahan_pasien'], set_value('pencegahan7a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan7a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Etika batuk <a href="##" onclick="toggle_visibility('foo20');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo20" style="display:none; font-size:12px; margin-left:20px;">Edukasi etika batuk: <br>• Ada, kebijakan, SOP edukasi etika batuk<br> • Tidak ada</p>
          <select class="form-control" name="pencegahan8a" id="pencegahan8a">
            <?php is_terisi($data['etika_batuk'], set_value('pencegahan8a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan8a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Praktik Menyuntik yang Aman <a href="##" onclick="toggle_visibility('foo21');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo21" style="display:none; font-size:12px; margin-left:20px;">SOP injeksi</p>
          <select class="form-control" name="pencegahan9a" id="pencegahan9a">
            <?php is_terisi($data['praktik_menyuntik'], set_value('pencegahan9a')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan9a', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <hr>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>VI.B Elemen Penilaian Penerapan Kewaspadaan Berdasarkan Transmisi</strong></label><br>
        <label for="exampleFormControlInput1">1. Kewaspadaan Transmisi Melalui Kontak <a href="##" onclick="toggle_visibility('foo22');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo22" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP </p>
          <select class="form-control" name="pencegahan1b" id="pencegahan1b">
            <?php is_terisi($data['kewaspadaan_kontak'], set_value('pencegahan1b')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan1b', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Kewaspadaan Transmisi Melalui Droplet <a href="##" onclick="toggle_visibility('foo23');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo23" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP</p>
          <select class="form-control" name="pencegahan2b" id="pencegahan2b">
            <?php is_terisi($data['kewaspadaan_droplet'], set_value('pencegahan2b')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan2b', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Kewaspadaan Transmisi Melalui Udara (Air-Borne Precautions) <a href="##" onclick="toggle_visibility('foo24');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilaksanakan sesuai SOP, nilai 10 <br>
          2. Dilaksanakan tidak sesuai SOP, nilai 5 <br>
          3. Tidak ada SOP, nilai 0
          <p id="foo24" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP </p>
          <select class="form-control" name="pencegahan3b" id="pencegahan3b">
            <?php is_terisi($data['air_borne'], set_value('pencegahan3b')); ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <?= form_error('pencegahan3b', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>