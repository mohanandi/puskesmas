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
        <input type="text" class="form-control" value="<?= $data['set_umum']; ?>" placeholder="" name="peralatan1" id="peralatan1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Set Tindakan Medis/Gawat Darurat</label>
        <input type="text" class="form-control" value="<?= $data['set_tindakan']; ?>" placeholder="" name="peralatan2" id="peralatan2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Set Pemeriksaan Kesehatan Ibu</label>
        <input type="text" class="form-control" value="<?= $data['set_ibu']; ?>" placeholder="" name="peralatan3" id="peralatan3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Set Pemeriksaan Kesehatan Anak</label>
        <input type="text" class="form-control" value="<?= $data['set_anak']; ?>" placeholder="" name="peralatan4" id="peralatan4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Set Pelayanan KB</label>
        <input type="text" class="form-control" value="<?= $data['set_kb']; ?>" placeholder="" name="peralatan5" id="peralatan5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Set Imunisasi </label>
        <input type="text" class="form-control" value="<?= $data['set_imun']; ?>" placeholder="" name="peralatan6" id="peralatan6" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Set Obstetri & Ginekologi</label>
        <input type="text" class="form-control" value="<?= $data['set_obstetri']; ?>" placeholder="" name="peralatan7" id="peralatan7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Set AKDR Pasca Plasenta</label>
        <input type="text" class="form-control" value="<?= $data['set_akdr']; ?>" placeholder="" name="peralatan8" id="peralatan8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Set Bayi Baru Lahir</label>
        <input type="text" class="form-control" value="<?= $data['set_bayi']; ?>" placeholder="" name="peralatan9" id="peralatan9" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Set Kegawatan Maternal dan Neonatal</label>
        <input type="text" class="form-control" value="<?= $data['set_maternal']; ?>" placeholder="" name="peralatan10" id="peralatan10" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Set Perawatan Pasca Persalinan</label>
        <input type="text" class="form-control" value="<?= $data['set_pasca']; ?>" placeholder="" name="peralatan11" id="peralatan11" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">12. Set Pemeriksaan Khusus</label>
        <input type="text" class="form-control" value="<?= $data['set_khusus']; ?>" placeholder="" name="peralatan12" id="peralatan12" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">13. Set Kesehatan Gigi dan Mulut</label>
        <input type="text" class="form-control" value="<?= $data['set_gigi']; ?>" placeholder="" name="peralatan13" id="peralatan13" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">14. Set Komunikasi, Informasi dan Edukasi (KIE) berbagai kebutuhan</label>
        <input type="text" class="form-control" value="<?= $data['set_kie']; ?>" placeholder="" name="peralatan14" id="peralatan14" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">15. Set ASI</label>
        <input type="text" class="form-control" value="<?= $data['set_asi']; ?>" placeholder="" name="peralatan15" id="peralatan15" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">16. Set Laboratorium</label>
        <input type="text" class="form-control" value="<?= $data['set_lab']; ?>" placeholder="" name="peralatan16" id="peralatan16" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">17. Set Farmasi</label>
        <input type="text" class="form-control" value="<?= $data['set_farmasi']; ?>" placeholder="" name="peralatan17" id="peralatan17" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">18. Set Rawat Inap</label>
        <input type="text" class="form-control" value="<?= $data['set_inap']; ?>" placeholder="" name="peralatan18" id="peralatan18" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">19. Set Sterilisasi</label>
        <input type="text" class="form-control" value="<?= $data['set_steril']; ?>" placeholder="" name="peralatan19" id="peralatan19" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">20. Set Alat Tambahan untuk Dokter Layanan Primer/Puskesmas sebagai Wahana Pendidikan Dokter Layanan Primer</label>
        <input type="text" class="form-control" value="<?= $data['set_alat']; ?>" placeholder="" name="peralatan20" id="peralatan20" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">21. Set Puskesmas Keliling</label>
        <input type="text" class="form-control" value="<?= $data['set_kel']; ?>" placeholder="" name="peralatan21" id="peralatan21" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">22. Kit Keperawatan Kesehatan Masyarakat </label>
        <input type="text" class="form-control" value="<?= $data['kit_kkm']; ?>" placeholder="" name="peralatan22" id="peralatan22" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">23. Kit Imunisasi (<i>Vaccine carrier</i>)</label>
        <input type="text" class="form-control" value="<?= $data['kit_imun']; ?>" placeholder="" name="peralatan23" id="peralatan23" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">24. Kit UKS</label>
        <input type="text" class="form-control" value="<?= $data['kit_uks']; ?>" placeholder="" name="peralatan24" id="peralatan24" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">25. Kit UKGS</label>
        <input type="text" class="form-control" value="<?= $data['kit_ukgs']; ?>" placeholder="" name="peralatan25" id="peralatan25" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">26. Kit Bidan</label>
        <input type="text" class="form-control" value="<?= $data['kit_bidan']; ?>" placeholder="" name="peralatan26" id="peralatan26" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">27. Kit Posyandu</label>
        <input type="text" class="form-control" value="<?= $data['kit_posyandu']; ?>" placeholder="" name="peralatan27" id="peralatan27" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">28. Kit Sanitarian</label>
        <input type="text" class="form-control" value="<?= $data['kit_sanitarian']; ?>" placeholder="" name="peralatan28" id="peralatan28" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">29. Kit Kesehatan Lansia/Kit Posbindu PTM</label>
        <input type="text" class="form-control" value="<?= $data['kit_ptm']; ?>" placeholder="" name="peralatan29" id="peralatan29" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">30. Kit Stimulasi Deteksi dan Intervensi Dini Tumbuh Kembang (SDIDTK)</label>
        <input type="text" class="form-control" value="<?= $data['kit_sdidtk']; ?>" placeholder="" name="peralatan30" id="peralatan30" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">31. Puskesmas sudah tidak menggunakan alat kesehatan yang mengandung air raksa (Hg) untuk tensimeter, termometer, amalgam gigi.</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_hg']; ?>" placeholder="" name="peralatan31" id="peralatan31" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">32. Alat kesehatan Puskesmas terkalibrasi sesuai peraturan satu tahun sekali</label>
        <input type="text" class="form-control" value="<?= $data['kalibrasi']; ?>" placeholder="" name="peralatan32" id="peralatan32" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">33. Puskesmas menggunakan alat kesehatan yang mempunyai ijin edar.</label>
        <input type="text" class="form-control" value="<?= $data['ijin_edar']; ?>" placeholder="" name="peralatan33" id="peralatan33" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">34. Alat kesehatan Puskesmas yang telah selesai digunakan diletakan pada tempatnya dalam kondisi rapi dan bersih.</label>
        <input type="text" class="form-control" value="<?= $data['pd_tempatnya']; ?>" placeholder="" name="peralatan34" id="peralatan34" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">35. Puskesmas telah menggunakan alat kesehatan produk dalam negeri</label>
        <input type="text" class="form-control" value="<?= $data['dlm_negri']; ?>" placeholder="" name="peralatan35" id="peralatan35" readonly>

      </div>
      <a class="btn float-right btn-danger" href="<?= base_url('Peralatan_Puskesmas/ubah') ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </form>
  </div>
</div>