<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Peralatan Puskesmas</strong></h2>
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
        <label for="exampleFormControlInput1">1. Set Pemeriksaan Umum</label>
        <select class="form-control" name="peralatan1" id="peralatan1" disabled>
          <option value="<?= $data['set_umum']; ?>" selected><?= $data['set_umum']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Set Tindakan Medis/Gawat Darurat</label>
        <select class="form-control" name="peralatan2" id="peralatan2" disabled>
          <option value="<?= $data['set_tindakan']; ?>" selected><?= $data['set_tindakan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Set Pemeriksaan Kesehatan Ibu</label>
        <select class="form-control" name="peralatan3" id="peralatan3" disabled>
          <option value="<?= $data['set_ibu']; ?>" selected><?= $data['set_ibu']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Set Pemeriksaan Kesehatan Anak</label>
        <select class="form-control" name="peralatan4" id="peralatan4" disabled>
          <option value="<?= $data['set_anak']; ?>" selected><?= $data['set_anak']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Set Pelayanan KB</label>
        <select class="form-control" name="peralatan5" id="peralatan5" disabled>
          <option value="<?= $data['set_kb']; ?>" selected><?= $data['set_kb']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Set Imunisasi </label>
        <select class="form-control" name="peralatan6" id="peralatan6" disabled>
          <option value="<?= $data['set_imun']; ?>" selected><?= $data['set_imun']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Set Obstetri & Ginekologi</label>
        <select class="form-control" name="peralatan7" id="peralatan7" disabled>
          <option value="<?= $data['set_obstetri']; ?>" selected><?= $data['set_obstetri']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Set AKDR Pasca Plasenta</label>
        <select class="form-control" name="peralatan8" id="peralatan8" disabled>
          <option value="<?= $data['set_akdr']; ?>" selected><?= $data['set_akdr']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Set Bayi Baru Lahir</label>
        <select class="form-control" name="peralatan9" id="peralatan9" disabled>
          <option value="<?= $data['set_bayi']; ?>" selected><?= $data['set_bayi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Set Kegawatan Maternal dan Neonatal</label>
        <select class="form-control" name="peralatan10" id="peralatan10" disabled>
          <option value="<?= $data['set_maternal']; ?>" selected><?= $data['set_maternal']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Set Perawatan Pasca Persalinan</label>
        <select class="form-control" name="peralatan11" id="peralatan11" disabled>
          <option value="<?= $data['set_pasca']; ?>" selected><?= $data['set_pasca']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">12. Set Pemeriksaan Khusus</label>
        <select class="form-control" name="peralatan12" id="peralatan12" disabled>
          <option value="<?= $data['set_khusus']; ?>" selected><?= $data['set_khusus']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">13. Set Kesehatan Gigi dan Mulut</label>
        <select class="form-control" name="peralatan13" id="peralatan13" disabled>
          <option value="<?= $data['set_gigi']; ?>" selected><?= $data['set_gigi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">14. Set Komunikasi, Informasi dan Edukasi (KIE) berbagai kebutuhan</label>
        <select class="form-control" name="peralatan14" id="peralatan14" disabled>
          <option value="<?= $data['set_kie']; ?>" selected><?= $data['set_kie']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">15. Set ASI</label>
        <select class="form-control" name="peralatan15" id="peralatan15" disabled>
          <option value="<?= $data['set_asi']; ?>" selected><?= $data['set_asi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">16. Set Laboratorium</label>
        <select class="form-control" name="peralatan16" id="peralatan16" disabled>
          <option value="<?= $data['set_lab']; ?>" selected><?= $data['set_lab']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">17. Set Farmasi</label>
        <select class="form-control" name="peralatan17" id="peralatan17" disabled>
          <option value="<?= $data['set_farmasi']; ?>" selected><?= $data['set_farmasi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">18. Set Rawat Inap</label>
        <select class="form-control" name="peralatan18" id="peralatan18" disabled>
          <option value="<?= $data['set_inap']; ?>" selected><?= $data['set_inap']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">19. Set Sterilisasi</label>
        <select class="form-control" name="peralatan19" id="peralatan19" disabled>
          <option value="<?= $data['set_steril']; ?>" selected><?= $data['set_steril']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">20. Set Alat Tambahan untuk Dokter Layanan Primer/Puskesmas sebagai Wahana Pendidikan Dokter Layanan Primer</label>
        <select class="form-control" name="peralatan20" id="peralatan20" disabled>
          <option value="<?= $data['set_alat']; ?>" selected><?= $data['set_alat']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">21. Set Puskesmas Keliling</label>
        <select class="form-control" name="peralatan21" id="peralatan21" disabled>
          <option value="<?= $data['set_kel']; ?>" selected><?= $data['set_kel']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">22. Kit Keperawatan Kesehatan Masyarakat </label>
        <select class="form-control" name="peralatan22" id="peralatan22" disabled>
          <option value="<?= $data['kit_kkm']; ?>" selected><?= $data['kit_kkm']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">23. Kit Imunisasi (<i>Vaccine carrier</i>)</label>
        <select class="form-control" name="peralatan23" id="peralatan23" disabled>
          <option value="<?= $data['kit_imun']; ?>" selected><?= $data['kit_imun']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">24. Kit UKS</label>
        <select class="form-control" name="peralatan24" id="peralatan24" disabled>
          <option value="<?= $data['kit_uks']; ?>" selected><?= $data['kit_uks']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">25. Kit UKGS</label>
        <select class="form-control" name="peralatan25" id="peralatan25" disabled>
          <option value="<?= $data['kit_ukgs']; ?>" selected><?= $data['kit_ukgs']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">26. Kit Bidan</label>
        <select class="form-control" name="peralatan26" id="peralatan26" disabled>
          <option value="<?= $data['kit_bidan']; ?>" selected><?= $data['kit_bidan']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">27. Kit Posyandu</label>
        <select class="form-control" name="peralatan27" id="peralatan27" disabled>
          <option value="<?= $data['kit_posyandu']; ?>" selected><?= $data['kit_posyandu']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">28. Kit Sanitarian</label>
        <select class="form-control" name="peralatan28" id="peralatan28" disabled>
          <option value="<?= $data['kit_sanitarian']; ?>" selected><?= $data['kit_sanitarian']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">29. Kit Kesehatan Lansia/Kit Posbindu PTM</label>
        <select class="form-control" name="peralatan29" id="peralatan29" disabled>
          <option value="<?= $data['kit_ptm']; ?>" selected><?= $data['kit_ptm']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">30. Kit Stimulasi Deteksi dan Intervensi Dini Tumbuh Kembang (SDIDTK)</label>
        <select class="form-control" name="peralatan30" id="peralatan30" disabled>
          <option value="<?= $data['kit_sdidtk']; ?>" selected><?= $data['kit_sdidtk']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">31. Puskesmas sudah tidak menggunakan alat kesehatan yang mengandung air raksa (Hg) untuk tensimeter, termometer, amalgam gigi.</label>
        <select class="form-control" name="peralatan31" id="peralatan31" disabled>
          <option value="<?= $data['puskesmas_hg']; ?>" selected><?= $data['puskesmas_hg']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">32. Alat kesehatan Puskesmas terkalibrasi sesuai peraturan satu tahun sekali</label>
        <select class="form-control" name="peralatan32" id="peralatan32" disabled>
          <option value="<?= $data['kalibrasi']; ?>" selected><?= $data['kalibrasi']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">33. Puskesmas menggunakan alat kesehatan yang mempunyai ijin edar.</label>
        <select class="form-control" name="peralatan33" id="peralatan33" disabled>
          <option value="<?= $data['ijin_edar']; ?>" selected><?= $data['ijin_edar']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">34. Alat kesehatan Puskesmas yang telah selesai digunakan diletakan pada tempatnya dalam kondisi rapi dan bersih.</label>
        <select class="form-control" name="peralatan34" id="peralatan34" disabled>
          <option value="<?= $data['pd_tempatnya']; ?>" selected><?= $data['pd_tempatnya']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">35. Puskesmas telah menggunakan alat kesehatan produk dalam negeri</label>
        <select class="form-control" name="peralatan35" id="peralatan35" disabled>
          <option value="<?= $data['dlm_negri']; ?>" selected><?= $data['dlm_negri']; ?></option>
        </select>
      </div>
      <a class="btn float-right btn-danger" href="<?= base_url('Peralatan_Puskesmas/ubah') ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </form>
  </div>
</div>