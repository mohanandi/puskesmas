<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pengisian Aspak</strong></h2>
      </div>
    </div>



    <form method="POST" action="<?= base_url('Pengisian_Aspak/tambah'); ?>" style=" padding:20px;">

      <div class="form-group">
        <label for="exampleFormControlInput1">Melaksanakan Pengisian Aplikasi Sarana, Prasarana, dan Peralatan Kesehatan (ASPAK)</label>
        <select class="form-control" name="aspak1" id="aspak1">
          <?php is_terisi($data['aspak'], set_value('aspak1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('aspak1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut. berapa pemenuhan Standar ASPAK menurut PMK 43/2019 </label>
        <select class="form-control" name="aspak2" id="aspak2">
          <?php if ($data['aspak_pmk']) : ?>
            <option value="<?= $data['aspak_pmk']; ?>"><?= $data['aspak_pmk']; ?></option>
          <?php else : ?>
            <option value="<?= set_value('aspak2'); ?>"><?= set_value('aspak2'); ?></option>
          <?php endif; ?>
          <option value="1">≥ 80%</option>
          <option value="2">70 - 79%</option>
          <option value="3">61 – 69%</option>
          <option value="4">≤ 60%</option>
        </select>
        <?= form_error('aspak2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</button>
    </form>
  </div>
</div>
</div>