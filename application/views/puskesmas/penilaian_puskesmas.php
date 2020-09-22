<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Penilaian Puskesmas</strong></h2>
      </div>
    </div>

    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Penilaian_Puskesmas/tambah');
      $button = 'Simpan';
    }
    ?>
    <form method="POST" action="<?= $link; ?>" style=" padding:20px;">
      <div class="form-group">
        <label for="exampleFormControlInput1">Melakukan penilaian mandiri (self evaluation) atas ha-sil kinerja & mutu layanan kesehatan yang tercantum dalam Penilaian Kinerja Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ya (Bukti Ditunjukkan)<br>
          2. Tidak
        </p>
        <select class="form-control" name="penilaian1" id="penilaian1">
          <?php is_terisi($data['self'], set_value('penilaian1')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('penilaian1', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['n2_pelayanan'], set_value('penilaian2')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('penilaian2', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['n2_manajemen'], set_value('penilaian3')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('penilaian3', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['n1_pelayanan'], set_value('penilaian4')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('penilaian4', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['n1_manajemen'], set_value('penilaian5')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('penilaian5', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['uji_petik'], set_value('penilaian6')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('penilaian6', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['inovasi'], set_value('penilaian7')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('penilaian7', '<small class="text-danger pl-3">', '</small>'); ?>
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
          <?php is_terisi($data['rumusan'], set_value('penilaian8')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('penilaian8', '<small class="text-danger pl-3">', '</small>'); ?>
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
        <select class="form-control" name="penilaian9" id="penilaian9">
          <?php if ($data) : ?>
            <option value="<?= $data['tahun_akreditasi']; ?>"><?= $data['tahun_akreditasi']; ?></option>
          <?php else : ?>
            <option value="<?= set_value('penilaian9'); ?>"><?= set_value('penilaian9'); ?></option>
          <?php endif; ?>
          <?php
          $thn_skr = date('Y');
          for ($x = $thn_skr; $x >= 1990; $x--) {
          ?>
            <option value="<?php echo $x ?>"><?php echo $x ?></option>
          <?php
          }
          ?>
        </select>
        <?= form_error('penilaian9', '<small class="text-danger pl-3">', '</small>'); ?>
        <select class="form-control" name="penilaian10" id="penilaian10">
          <?php is_terisi($data['status_akreditas'], set_value('penilaian10')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('penilaian10', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Status IKS Puskesmas Terakhir, Sebutkan Tahun ...</label>
        <br>
        <span><strong>Penilaian</strong></span>
        <p style="font-size:12px;">
          1. Lebih Besar dari0,800<br>
          2. 0,500-0,800<br>
          3. Lebih Kecil dari 0,500
        </p>
        <select class="form-control" name="penilaian11" id="penilaian11">
          <?php if ($data) : ?>
            <option value="<?= $data['tahun_iks']; ?>"><?= $data['tahun_iks']; ?></option>
          <?php else : ?>
            <option value="<?= set_value('penilaian11'); ?>"><?= set_value('penilaian11'); ?></option>
          <?php endif; ?>
          <?php
          $thn_skr = date('Y');
          for ($x = $thn_skr; $x >= 1990; $x--) {
          ?>
            <option value="<?php echo $x ?>"><?php echo $x ?></option>
          <?php
          }
          ?>
        </select>
        <?= form_error('penilaian10', '<small class="text-danger pl-3">', '</small>'); ?>
        <select class="form-control" name="penilaian12" id="penilaian12">
          <?php is_terisi($data['status_iks'], set_value('penilaian12')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select> <?= form_error('penilaian12', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>