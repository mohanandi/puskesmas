<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Penilaian Puskesmas</strong></h2>
      </div>
    </div>
    <form>
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success" role="alert">
          Data Telah Berhasil
          <?= $this->session->flashdata('flash'); ?>
        </div>
      <?php endif; ?>


      <div class="form-group">
        <label for="exampleFormControlInput1">Melakukan penilaian mandiri (self evaluation) atas ha-sil kinerja & mutu layanan kesehatan yang tercantum dalam Penilaian Kinerja Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya (Bukti Ditunjukkan)<br>
          2. Tidak
        </p>
        <select class="form-control" name="penilaian1" id="penilaian1">
          <option value="<?= $data['self']; ?>" selected><?= $data['self']; ?></option>
        </select>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut, berapa cakupan kinerja di Tahun (N-2) untuk Hasil Pelayanan Kesehatan Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik:(Hasil Pelayanan >91%)<br>
          2. Cukup:(Hasil Pelayanan >81 - 90%)<br>
          3. Kurang:(Hasil Pelayanan ≤80%)
        </p>
        <select class="form-control" name="penilaian2" id="penilaian2">
          <option value="<?= $data['n2_pelayanan']; ?>" selected><?= $data['n2_pelayanan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut, berapa cakupan kinerja di Tahun (N-2) untuk Hasil Manajemen Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik: (Hasil Pelayanan >8,5%)<br>
          2. Cukup: (Hasil Pelayanan >5,5 - 8,4%)<br>
          3. Kurang: (Hasil Pelayanan ≤5,5%)
        </p>
        <select class="form-control" name="penilaian3" id="penilaian3">
          <option value="<?= $data['n2_manajemen']; ?>" selected><?= $data['n2_manajemen']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut, berapa Tingkat Kinerja Cakupan, Tahun (N-1) untuk Hasil Pelayanan Kesehatan Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik:(Hasil Pelayanan >91%)<br>
          2. Cukup:(Hasil Pelayanan >81 - 90%)<br>
          3. Kurang:(Hasil Pelayanan ≤80%)
        </p>
        <select class="form-control" name="penilaian4" id="penilaian4">
          <option value="<?= $data['n1_pelayanan']; ?>" selected><?= $data['n1_pelayanan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut, berapa Tingkat Kinerja Cakupan, Tahun (N-1) untuk Hasil Manajemen Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik: (Hasil Pelayanan >8,5%)<br>
          2. Cukup: (Hasil Pelayanan >5,5 - 8,4%)<br>
          3. Kurang: (Hasil Pelayanan ≤5,5%)
        </p>
        <select class="form-control" name="penilaian5" id="penilaian5">
          <option value="<?= $data['n1_manajemen']; ?>" selected><?= $data['n1_manajemen']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Apakah Saudara melakukan Uji Petik/Monitoring Evaluasi Antar Waktu Untuk Data nomor 2 & nomor 3 di atas, Atas Kinerja & Mutu Layanan Kesehatan Puskesmas Saudara?</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya<br>
          2. Tidak
        </p>
        <select class="form-control" name="penilaian6" id="penilaian6">
          <option value="<?= $data['uji_petik']; ?>" selected><?= $data['uji_petik']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Bila jawaban nomor 6 (Ya), apakah Saudara berencana melakukan satu inovasi atas hasil analisis kinerja dan mutu saat saudara melakukan uji petik/monitoring dan evaluasi atas kedua hasil kinerja & mutu layanan Puskesmas Saudara?</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya <br>
          2. Tidak
        </p>
        <select class="form-control" name="penilaian7" id="penilaian7">
          <option value="<?= $data['inovasi']; ?>" selected><?= $data['inovasi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Bila jawaban nomor 7 (Ya), sebutkan bentuk rumusan upaya Inovasi Saudara?</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Upaya perbaikan/peningkatan kinerja untuk mencapai target kinerja & mutu layanan Puskesmas pada waktunya <br>
          2. Upaya percepatan pencapaian target kinerja & mutu layanan Puskesmas sebelum target waktu yg ditetapkan sebelumnya <br>
          3. untuk kedua tujuan, Perbaikan/ Peningkatan dan Percepatan
        </p>
        <select class="form-control" name="penilaian8" id="penilaian8">
          <option value="<?= $data['rumusan']; ?>" selected><?= $data['rumusan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Status Akreditasi Puskesmas Terakhir, Sebutkan Tahun ………</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Madya <br>
          2. Utama<br>
          3. Paripurna
        </p>
        <input type="text" class="form-control" value="<?= $data['tahun_akreditasi']; ?>" placeholder="tahun" name="penilaian9" id="penilaian9">

        <select class="form-control" name="penilaian10" id="penilaian10">
          <option value="<?= $data['status_akreditas']; ?>" selected><?= $data['status_akreditas']; ?></option>
        </select>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Status IKS Puskesmas Terakhir, Sebutkan Tahun ...</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. > 0,800 <br>
          2. 0,500-0,800<br>
          3. < 0,500 </p> <input type="text" class="form-control" value="<?= $data['tahun_iks']; ?>" placeholder="tahun" name="penilaian11" id="penilaian11">
            <select class="form-control" name="penilaian12" id="penilaian12">
              <option value="<?= $data['status_iks']; ?>" selected><?= $data['status_iks']; ?></option>
            </select>
      </div>
      <a class="btn float-right btn-danger" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </form>
  </div>
</div>
</div>