<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Lokasi Puskesmas</strong></h2>
      </div>
    </div>
    <form method="POST">
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success" role="alert">
          Data Berhasil <?= $this->session->flashdata('flash'); ?>
        </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Puskesmas mempunyai sertifikat tanah</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_tanah']; ?>" placeholder="" name="lokasi1" id="lokasi1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Puskesmas mempunyai SLF (Sertifikat Laik Fungsi) yang dikeluarkan oleh Dinas PU</label>
        <input type="text" class="form-control" value="<?= $data['slf']; ?>" placeholder="" name="lokasi2" id="lokasi2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Puskesmas Tidak di tepi lereng</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_lereng']; ?>" placeholder="" name="lokasi3" id="lokasi3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Puskesmas Tidak dekat kaki gunung yang rawan terhadap tanah longsor</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_longsor']; ?>" placeholder="" name="lokasi4" id="lokasi4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Puskesmas Tidak dekat anak sungai, sungai atau badan air yang dapat mengikis pondasi)</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_pondasi']; ?>" placeholder="" name="lokasi5" id="lokasi5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Puskesmas Tidak di atas atau dekat dengan jalur patahan aktif</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_aktif']; ?>" placeholder="" name="lokasi6" id="lokasi6" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Puskesmas Tidak di daerah rawan tsunami</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_tsunami']; ?>" placeholder="" name="lokasi7" id="lokasi7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Puskesmas Tidak di daerah rawan banjir</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_banjir']; ?>" placeholder="" name="lokasi8" id="lokasi8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Puskesmas Tidak dalam zona topan</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_topan']; ?>" placeholder="" name="lokasi9" id="lokasi9" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Puskesmas Tidak di daerah rawan badai </label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_badai']; ?>" placeholder="" name="lokasi10" id="lokasi10" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Puskesmas mudah di jangkau oleh masyarakat</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_masyarakat']; ?>" placeholder="" name="lokasi11" id="lokasi11" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">12. Puskesmas memiliki akses transportasi </label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_transportasi']; ?>" placeholder="" name="lokasi12" id="lokasi12" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">13. Puskesmas Tersedia jalur yang aksesibel untuk penyandang disabilitas yang rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['puskesmas_bersih']; ?>" placeholder="" name="lokasi13" id="lokasi13" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">14. Fasilitas parkir Puskesmas memadai, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['fasilitas_bersih']; ?>" placeholder="" name="lokasi14" id="lokasi14" readonly>

      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">15. Tersedia pagar keliling untuk pengamanan puskesmas dalam kondisi baik, rapi dan bersih </label>
        <input type="text" class="form-control" value="<?= $data['tersedia_bersih']; ?>" placeholder="" name="lokasi15" id="lokasi15" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">16. Puskesmas Tidak berdiri di area sekitar Saluran Udara Tegangan Tinggi (SUTT) dan Saluran Udara Tegangan Ekstra Tinggi (SUTET)</label>
        <input type="text" class="form-control" value="<?= $data['sutet']; ?>" placeholder="" name="lokasi16" id="lokasi16" readonly>

      </div>
    </form>
    <a href="<?= base_url('Lokasi_Puskesmas/ubah'); ?>" class="btn float-right btn-danger" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </a>
  </div>
</div>