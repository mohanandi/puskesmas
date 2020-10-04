<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pencegahan dan Pengendalian Infeksi dan Kesehatan Lingkungan</strong></h2>
      </div>
    </div>



    <form style="padding:20px;">

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
          <input type="text" class="form-control" value="<?= $data['cuci_tangan']; ?>" placeholder="" name="pencegahan1a" id="pencegahan1a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['apd']; ?>" placeholder="" name="pencegahan2a" id="pencegahan2a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['dekontaminasi']; ?>" placeholder="" name="pencegahan3a" id="pencegahan3a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['kesehatan_lingkungan']; ?>" placeholder="" name="pencegahan4a" id="pencegahan4a" readonly>

      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">5. Pengelolaan Limbah Medis (termasuk dalam IKL) <a href="##" onclick="toggle_visibility('foo17');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <p id="foo17" style="display:none; font-size:12px; margin-left:20px;">Lihat bagaimana pengelolaan limbah medis di Puskesmas <br> 1. Ada pemilahan limbah medis dan non medis. <br> 2. Limbah dimasukkan ke warna kantong yang sesuai.<br>3. Limbah padat tajam dimasukkan ke dalam safety box <br>4. Limbah ditempatkan di TPS B3 berijin <br>5. Diolah dengan pengolahan limbah B3 berizin dan atau kerja sama dengan pihak ketiga pengolah limbah B3 berizin<br>Memenuhi semua kriteria, nilai 10.<br>Memenuhi sebagian kriteria (1,3,5) nilai 5<br>Tidak memenuhi semua kriteria, nilai 0 </p>
        <input type="text" class="form-control" value="<?= $data['limbah_medis']; ?>" placeholder="" name="pencegahan5a" id="pencegahan5a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['perlindungan_petugas']; ?>" placeholder="" name="pencegahan6a" id="pencegahan6a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['pemisahan_pasien']; ?>" placeholder="" name="pencegahan7a" id="pencegahan7a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['etika_batuk']; ?>" placeholder="" name="pencegahan8a" id="pencegahan8a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['praktik_menyuntik']; ?>" placeholder="" name="pencegahan9a" id="pencegahan9a" readonly>


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
          <input type="text" class="form-control" value="<?= $data['kewaspadaan_kontak']; ?>" placeholder="" name="pencegahan1b" id="pencegahan1b" readonly>

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
          <input type="text" class="form-control" value="<?= $data['kewaspadaan_droplet']; ?>" placeholder="" name="pencegahan2b" id="pencegahan2b" readonly>

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
          <input type="text" class="form-control" value="<?= $data['air_borne']; ?>" placeholder="" name="pencegahan3b" id="pencegahan3b" readonly>


      </div>
      <a class="btn float-right btn-danger" href="<?= base_url() ?>Pengendalian_Infeksi/ubah/<?= $data['kode']; ?>" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Edit</a>
    </form>
  </div>
</div>