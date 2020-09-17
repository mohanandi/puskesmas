<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Peralatan Puskesmas</strong></h2>
      </div>
    </div>

    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Peralatan_Puskesmas/tambah');
      $button = 'Simpan';
    }
    ?>
    <form method="POST" action="<?= $link; ?>" style=" padding:20px;">

      <div class="form-group">
        <label for="exampleFormControlInput1">1. Set Pemeriksaan Umum</label>
        <select class="form-control" name="peralatan1" id="peralatan1">
          <?php is_terisi($data['set_umum'], set_value('peralatan1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Set Tindakan Medis/Gawat Darurat</label>
        <select class="form-control" name="peralatan2" id="peralatan2">
          <?php is_terisi($data['set_tindakan'], set_value('peralatan2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Set Pemeriksaan Kesehatan Ibu</label>
        <select class="form-control" name="peralatan3" id="peralatan3">
          <?php is_terisi($data['set_ibu'], set_value('peralatan3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Set Pemeriksaan Kesehatan Anak</label>
        <select class="form-control" name="peralatan4" id="peralatan4">
          <?php is_terisi($data['set_anak'], set_value('peralatan4')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Set Pelayanan KB</label>
        <select class="form-control" name="peralatan5" id="peralatan5">
          <?php is_terisi($data['set_kb'], set_value('peralatan5')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Set Imunisasi </label>
        <select class="form-control" name="peralatan6" id="peralatan6">
          <?php is_terisi($data['set_imun'], set_value('peralatan6')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan6', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Set Obstetri & Ginekologi</label>
        <select class="form-control" name="peralatan7" id="peralatan7">
          <?php is_terisi($data['set_obstetri'], set_value('peralatan7')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan7', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Set AKDR Pasca Plasenta</label>
        <select class="form-control" name="peralatan8" id="peralatan8">
          <?php is_terisi($data['set_akdr'], set_value('peralatan8')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan8', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Set Bayi Baru Lahir</label>
        <select class="form-control" name="peralatan9" id="peralatan9">
          <?php is_terisi($data['set_bayi'], set_value('peralatan9')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan9', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Set Kegawatan Maternal dan Neonatal</label>
        <select class="form-control" name="peralatan10" id="peralatan10">
          <?php is_terisi($data['set_maternal'], set_value('peralatan10')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan10', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Set Perawatan Pasca Persalinan</label>
        <select class="form-control" name="peralatan11" id="peralatan11">
          <?php is_terisi($data['set_pasca'], set_value('peralatan11')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan11', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">12. Set Pemeriksaan Khusus</label>
        <select class="form-control" name="peralatan12" id="peralatan12">
          <?php is_terisi($data['set_khusus'], set_value('peralatan12')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan12', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">13. Set Kesehatan Gigi dan Mulut</label>
        <select class="form-control" name="peralatan13" id="peralatan13">
          <?php is_terisi($data['set_gigi'], set_value('peralatan13')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan13', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">14. Set Komunikasi, Informasi dan Edukasi (KIE) berbagai kebutuhan</label>
        <select class="form-control" name="peralatan14" id="peralatan14">
          <?php is_terisi($data['set_kie'], set_value('peralatan14')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan14', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">15. Set ASI</label>
        <select class="form-control" name="peralatan15" id="peralatan15">
          <?php is_terisi($data['set_asi'], set_value('peralatan15')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan15', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">16. Set Laboratorium</label>
        <select class="form-control" name="peralatan16" id="peralatan16">
          <?php is_terisi($data['set_lab'], set_value('peralatan16')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan16', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">17. Set Farmasi</label>
        <select class="form-control" name="peralatan17" id="peralatan17">
          <?php is_terisi($data['set_farmasi'], set_value('peralatan17')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan17', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">18. Set Rawat Inap</label>
        <select class="form-control" name="peralatan18" id="peralatan18">
          <?php is_terisi($data['set_inap'], set_value('peralatan18')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan18', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">19. Set Sterilisasi</label>
        <select class="form-control" name="peralatan19" id="peralatan19">
          <?php is_terisi($data['set_steril'], set_value('peralatan19')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan19', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">20. Set Alat Tambahan untuk Dokter Layanan Primer/Puskesmas sebagai Wahana Pendidikan Dokter Layanan Primer</label>
        <select class="form-control" name="peralatan20" id="peralatan20">
          <?php is_terisi($data['set_alat'], set_value('peralatan20')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan20', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">21. Set Puskesmas Keliling</label>
        <select class="form-control" name="peralatan21" id="peralatan21">
          <?php is_terisi($data['set_kel'], set_value('peralatan21')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan21', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">22. Kit Keperawatan Kesehatan Masyarakat </label>
        <select class="form-control" name="peralatan22" id="peralatan22">
          <?php is_terisi($data['kit_kkm'], set_value('peralatan22')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan22', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">23. Kit Imunisasi (<i>Vaccine carrier</i>)</label>
        <select class="form-control" name="peralatan23" id="peralatan23">
          <?php is_terisi($data['kit_imun'], set_value('peralatan23')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan23', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">24. Kit UKS</label>
        <select class="form-control" name="peralatan24" id="peralatan24">
          <?php is_terisi($data['kit_uks'], set_value('peralatan24')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan24', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">25. Kit UKGS</label>
        <select class="form-control" name="peralatan25" id="peralatan25">
          <?php is_terisi($data['kit_ukgs'], set_value('peralatan25')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan25', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">26. Kit Bidan</label>
        <select class="form-control" name="peralatan26" id="peralatan26">
          <?php is_terisi($data['kit_bidan'], set_value('peralatan26')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan26', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">27. Kit Posyandu</label>
        <select class="form-control" name="peralatan27" id="peralatan27">
          <?php is_terisi($data['kit_posyandu'], set_value('peralatan27')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan27', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">28. Kit Sanitarian</label>
        <select class="form-control" name="peralatan28" id="peralatan28">
          <?php is_terisi($data['kit_sanitarian'], set_value('peralatan28')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan28', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">29. Kit Kesehatan Lansia/Kit Posbindu PTM</label>
        <select class="form-control" name="peralatan29" id="peralatan29">
          <?php is_terisi($data['kit_ptm'], set_value('peralatan29')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan29', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">30. Kit Stimulasi Deteksi dan Intervensi Dini Tumbuh Kembang (SDIDTK)</label>
        <select class="form-control" name="peralatan30" id="peralatan30">
          <?php is_terisi($data['kit_sdidtk'], set_value('peralatan30')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan30', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">31. Puskesmas sudah tidak menggunakan alat kesehatan yang mengandung air raksa (Hg) untuk tensimeter, termometer, amalgam gigi.</label>
        <select class="form-control" name="peralatan31" id="peralatan31">
          <?php is_terisi($data['puskesmas_hg'], set_value('peralatan31')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan31', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">32. Alat kesehatan Puskesmas terkalibrasi sesuai peraturan satu tahun sekali</label>
        <select class="form-control" name="peralatan32" id="peralatan32">
          <?php is_terisi($data['kalibrasi'], set_value('peralatan32')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan32', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">33. Puskesmas menggunakan alat kesehatan yang mempunyai ijin edar.</label>
        <select class="form-control" name="peralatan33" id="peralatan33">
          <?php is_terisi($data['ijin_edar'], set_value('peralatan33')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan33', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">34. Alat kesehatan Puskesmas yang telah selesai digunakan diletakan pada tempatnya dalam kondisi rapi dan bersih.</label>
        <select class="form-control" name="peralatan34" id="peralatan34">
          <?php is_terisi($data['pd_tempatnya'], set_value('peralatan34')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan34', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">35. Puskesmas telah menggunakan alat kesehatan produk dalam negeri</label>
        <select class="form-control" name="peralatan35" id="peralatan35">
          <?php is_terisi($data['dlm_negri'], set_value('peralatan35')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('peralatan35', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>