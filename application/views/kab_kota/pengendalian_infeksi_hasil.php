<div class="site-section" id = "menu">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Form Menu</span>
            <h2 class="heading"><strong class="text-primary">Pencegahan dan Pengendalian Infeksi dan Kesehatan Lingkungan</strong></h2>
          </div>
        </div>



  <form style=" ; padding:20px;">
    <div class="alert alert-success" role="alert">
      Data Berhasil dimasukan !
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>VI.A Elemen Penilaian Penerapan Kewaspadaan Standar</strong></label><br>
      <label for="exampleFormControlInput1">Membangun budaya cuci tangan dan tersedia sarana prasarana cuci tangan <a href="#" onclick="toggle_visibility('foo13');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo13" style="display:none; font-size:12px; margin-left:20px;">Minta petugas simulasikan: <br> • Memenuhi standar <br> • Tidak memenuhi standar </p>
      <select class="form-control" name="pencegahan1a" id="pencegahan1a" disabled>
        <option value="<?= $data['cuci_tangan']; ?>" selected><?= $data['cuci_tangan']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Menggunakan APD (sarung tangan, masker, sepatu boot, apron, kaca mata/google, dll) ketika melakukan tindakan/kegiatan tertentu<a href="#" onclick="toggle_visibility('foo14');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo14" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan terutama: <br> • di unit Laboratorium, <br> • Ruang Persalinan,<br>• Ruang Tindakan, <br>• Ruang Sterilisasi, <br> • Poli Gigi, <br>• Insersi IUD, dan lainnya</p>
      <select class="form-control" name="pencegahan2a" id="pencegahan2a" disabled>
        <option value="<?= $data['apd']; ?>" selected><?= $data['apd']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Penerapan Dekontaminasi Alat Kesehatan <a href="#" onclick="toggle_visibility('foo15');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo15" style="display:none; font-size:12px; margin-left:20px;">Lihat proses sterilisasi alat</p>
      <select class="form-control" name="pencegahan3a" id="pencegahan3a" disabled>
        <option value="<?= $data['dekontaminasi']; ?>" selected><?= $data['dekontaminasi']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pengendalian Kesehatan Lingkungan <a href="#" onclick="toggle_visibility('foo16');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo16" style="display:none; font-size:12px; margin-left:20px;">Lihat laporan Inspeksi Kesehatan Lingkungan (IKL) Puskesmas (dilakukan minimal 1 kali setahun) <br> Ada laporan IKL dan rekomendasi ditindaklanjuti, nilai 10. <br> Ada laporan IKL, tidak ditindaklanjuti, nilai 5. <br> Tidak ada laporan, nilai 0 </p>
      <select class="form-control" name="pencegahan4a" id="pencegahan4a" disabled>
        <option value="<?= $data['kesehatan_lingkungan']; ?>" selected><?= $data['kesehatan_lingkungan']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pengelolaan Limbah Medis (termasuk dalam IKL) <a href="#" onclick="toggle_visibility('foo17');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo17" style="display:none; font-size:12px; margin-left:20px;">Lihat bagaimana pengelolaan limbah medis di Puskesmas <br> 1. Ada pemilahan limbah medis dan non medis. <br> 2. Limbah dimasukkan ke warna kantong yang sesuai.<br>3. Limbah padat tajam dimasukkan ke dalam safety box <br>4. Limbah ditempatkan di TPS B3 berijin <br>5. Diolah dengan pengolahan limbah B3 berizin dan atau kerja sama dengan pihak ketiga pengolah limbah B3 berizin<br>Memenuhi semua kriteria, nilai 10.<br>Memenuhi sebagian kriteria (1,3,5) nilai 5<br>Tidak memenuhi semua kriteria, nilai 0 </p>
      <select class="form-control" name="pencegahan5a" id="pencegahan5a" disabled>
        <option value="<?= $data['limbah_medis']; ?>" selected><?= $data['limbah_medis']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Perlindungan Kesehatan Petugas <br>a. Tatalaksana Pajanan<br>b. Tatalaksana Pajanan bahan infeksius ditempat kerja<br>c. Langkah Dasar Tatalaksana Klinis Profilaksis Pasca Pajanan (PPP) HIV Pada kasus kecelakaan kerja<a href="#" onclick="toggle_visibility('foo18');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo18" style="display:none; font-size:12px; margin-left:20px;">Lihat:<br>1. Ada/tidak ada kebijakan dan SOP dan lainnya <br> 2. Dilaksanakan atau tidak </p>
      <select class="form-control" name="pencegahan6a" id="pencegahan6a" disabled>
        <option value="<?= $data['perlindungan_petugas']; ?>" selected><?= $data['perlindungan_petugas']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pemisahan Pasien <a href="#" onclick="toggle_visibility('foo19');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo19" style="display:none; font-size:12px; margin-left:20px;">Lihat:<br> 1. Ada Kebijakan, SOP, lainnya, untuk memisahkan pasien infeksius dengan pasien non infeksius, misal ruang TB, ruang isolasi untuk rawat inap<br> 2. Tidak ada kebijakan, SOP, lainnya </p>
      <select class="form-control" name="pencegahan7a" id="pencegahan7a" disabled>
        <option value="<?= $data['pemisahan_pasien']; ?>" selected><?= $data['pemisahan_pasien']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Etika batuk <a href="#" onclick="toggle_visibility('foo20');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo20" style="display:none; font-size:12px; margin-left:20px;">Edukasi etika batuk: <br>• Ada, kebijakan, SOP edukasi etika batuk<br> • Tidak ada</p>
      <select class="form-control" name="pencegahan8a" id="pencegahan8a" disabled>
        <option value="<?= $data['etika_batuk']; ?>" selected><?= $data['etika_batuk']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Praktik Menyuntik yang Aman <a href="#" onclick="toggle_visibility('foo21');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo21" style="display:none; font-size:12px; margin-left:20px;">SOP injeksi</p>
      <select class="form-control" name="pencegahan9a" id="pencegahan9a" disabled>
        <option value="<?= $data['praktik_menyuntik']; ?>" selected><?= $data['praktik_menyuntik']; ?></option>
      </select>
    </div>
    <hr>
    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>VI.B Elemen Penilaian Penerapan Kewaspadaan Berdasarkan Transmisi</strong></label><br>
      <label for="exampleFormControlInput1">Kewaspadaan Transmisi Melalui Kontak <a href="#" onclick="toggle_visibility('foo22');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo22" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP </p>
      <select class="form-control" name="pencegahan1b" id="pencegahan1b" disabled>
        <option value="<?= $data['kewaspadaan_kontak']; ?>" selected><?= $data['kewaspadaan_kontak']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Kewaspadaan Transmisi Melalui Droplet <a href="#" onclick="toggle_visibility('foo23');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo23" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP</p>
      <select class="form-control" name="pencegahan2b" id="pencegahan2b" disabled>
        <option value="<?= $data['kewaspadaan_droplet']; ?>" selected><?= $data['kewaspadaan_droplet']; ?></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Kewaspadaan Transmisi Melalui Udara (Air-Borne Precautions) <a href="#" onclick="toggle_visibility('foo24');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo24" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP </p>
      <select class="form-control" name="pencegahan3b" id="pencegahan3b" disabled>
        <option value="<?= $data['air_borne']; ?>" selected><?= $data['air_borne']; ?></option>
      </select>
    </div>
  </form>
  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>
</div>
