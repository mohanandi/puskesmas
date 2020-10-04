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
        <label for="exampleFormControlInput1">1. Melakukan penilaian mandiri (self evaluation) atas ha-sil kinerja & mutu layanan kesehatan yang tercantum dalam Penilaian Kinerja Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya (Bukti Ditunjukkan)<br>
          2. Tidak
        </p>
        <input type="text" class="form-control" value="<?= $data['self']; ?>" placeholder="" name="penilaian1" id="penilaian1" readonly>


      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Jika Ya, jawab pertanyaan berikut, berapa cakupan kinerja di Tahun (N-2) untuk Hasil Pelayanan Kesehatan Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik:(Hasil Pelayanan >91%)<br>
          2. Cukup:(Hasil Pelayanan >81 - 90%)<br>
          3. Kurang:(Hasil Pelayanan ≤80%)
        </p>
        <input type="text" class="form-control" value="<?= $data['n2_pelayanan']; ?>" placeholder="" name="penilaian2" id="penilaian2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Jika Ya, jawab pertanyaan berikut, berapa cakupan kinerja di Tahun (N-2) untuk Hasil Manajemen Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik: (Hasil Pelayanan >8,5%)<br>
          2. Cukup: (Hasil Pelayanan >5,5 - 8,4%)<br>
          3. Kurang: (Hasil Pelayanan ≤5,5%)
        </p>
        <input type="text" class="form-control" value="<?= $data['n2_manajemen']; ?>" placeholder="" name="penilaian3" id="penilaian3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Jika Ya, jawab pertanyaan berikut, berapa Tingkat Kinerja Cakupan, Tahun (N-1) untuk Hasil Pelayanan Kesehatan Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik:(Hasil Pelayanan >91%)<br>
          2. Cukup:(Hasil Pelayanan >81 - 90%)<br>
          3. Kurang:(Hasil Pelayanan ≤80%)
        </p>
        <input type="text" class="form-control" value="<?= $data['n1_pelayanan']; ?>" placeholder="" name="penilaian4" id="penilaian4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Jika Ya, jawab pertanyaan berikut, berapa Tingkat Kinerja Cakupan, Tahun (N-1) untuk Hasil Manajemen Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Baik: (Hasil Pelayanan >8,5%)<br>
          2. Cukup: (Hasil Pelayanan >5,5 - 8,4%)<br>
          3. Kurang: (Hasil Pelayanan ≤5,5%)
        </p>
        <input type="text" class="form-control" value="<?= $data['n1_manajemen']; ?>" placeholder="" name="penilaian5" id="penilaian5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Apakah Saudara melakukan Uji Petik/Monitoring Evaluasi Antar Waktu Untuk Data nomor 2 & nomor 3 di atas, Atas Kinerja & Mutu Layanan Kesehatan Puskesmas Saudara?</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya<br>
          2. Tidak
        </p>
        <input type="text" class="form-control" value="<?= $data['uji_petik']; ?>" placeholder="" name="penilaian6" id="penilaian6" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Bila jawaban nomor 6 (Ya), apakah Saudara berencana melakukan satu inovasi atas hasil analisis kinerja dan mutu saat saudara melakukan uji petik/monitoring dan evaluasi atas kedua hasil kinerja & mutu layanan Puskesmas Saudara?</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya <br>
          2. Tidak
        </p>
        <input type="text" class="form-control" value="<?= $data['inovasi']; ?>" placeholder="" name="penilaian7" id="penilaian7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Bila jawaban nomor 7 (Ya), sebutkan bentuk rumusan upaya Inovasi Saudara?</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Upaya perbaikan/peningkatan kinerja untuk mencapai target kinerja & mutu layanan Puskesmas pada waktunya <br>
          2. Upaya percepatan pencapaian target kinerja & mutu layanan Puskesmas sebelum target waktu yg ditetapkan sebelumnya <br>
          3. untuk kedua tujuan, Perbaikan/ Peningkatan dan Percepatan
        </p>
        <input type="text" class="form-control" value="<?= $data['rumusan']; ?>" placeholder="" name="penilaian8" id="penilaian8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Status Akreditasi Puskesmas Terakhir, Sebutkan Tahun ………</label>
        <input type="text" class="form-control" value="<?= $data['tahun_akreditasi']; ?>" placeholder="tahun" name="penilaian9" id="penilaian9" readonly>
        <input type="text" class="form-control" value="<?= $data['status_akreditas']; ?>" placeholder="" name="penilaian10" id="penilaian10" readonly>


      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Status IKS Puskesmas Terakhir, Sebutkan Tahun ...</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Lebih Besar dari 0,800 <br>
          2. 0,500-0,800<br>
          3. Lebih Kecil dari 0,500
        </p>
        <input type="text" class="form-control" value="<?= $data['tahun_iks']; ?>" placeholder="tahun" name="penilaian11" id="penilaian11" readonly>
        <input type="text" class="form-control" value="<?= $data['status_iks']; ?>" placeholder="" name="penilaian12" id="penilaian12" readonly>

      </div>
      <a class="btn float-right btn-danger" href="<?= base_url(); ?>Penilaian_Puskesmas/ubah" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </form>
  </div>
</div>
</div>