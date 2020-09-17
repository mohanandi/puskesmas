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
        <label for="exampleFormControlInput1">Puskesmas mempunyai sertifikat tanah</label>
        <select class="form-control" name="lokasi1" id="lokasi1" disabled>
          <option value="<?= $data['puskesmas_tanah'] ?>" selected><?= $data['puskesmas_tanah']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas mempunyai SLF (Sertifikat Laik Fungsi) yang dikeluarkan oleh Dinas PU</label>
        <select class="form-control" name="lokasi2" id="lokasi2" disabled>
          <option value="<?= $data['slf'] ?>" selected><?= $data['slf']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak di tepi lereng</label>
        <select class="form-control" name="lokasi3" id="lokasi3" disabled>
          <option value="<?= $data['puskesmas_lereng'] ?>" selected><?= $data['puskesmas_lereng'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak dekat kaki gunung yang rawan terhadap tanah longsor</label>
        <select class="form-control" name="lokasi4" id="lokasi4" disabled>
          <option value="<?= $data['puskesmas_longsor'] ?>" selected><?= $data['puskesmas_longsor'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak dekat anak sungai, sungai atau badan air yang dapat mengikis pondasi)</label>
        <select class="form-control" name="lokasi5" id="lokasi5" disabled>
          <option value="<?= $data['puskesmas_pondasi'] ?>" selected><?= $data['puskesmas_pondasi'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak di atas atau dekat dengan jalur patahan aktif)</label>
        <select class="form-control" name="lokasi6" id="lokasi6" disabled>
          <option value="<?= $data['puskesmas_aktif'] ?>" selected><?= $data['puskesmas_aktif'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan tsunami</label>
        <select class="form-control" name="lokasi7" id="lokasi7" disabled>
          <option value="<?= $data['puskesmas_tsunami'] ?>" selected><?= $data['puskesmas_tsunami'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan banjir</label>
        <select class="form-control" name="lokasi8" id="lokasi8" disabled>
          <option value="<?= $data['puskesmas_banjir'] ?>" selected><?= $data['puskesmas_banjir'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak dalam zona topan</label>
        <select class="form-control" name="lokasi9" id="lokasi9" disabled>
          <option value="<?= $data['puskesmas_topan'] ?>" selected><?= $data['puskesmas_topan'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan badai </label>
        <select class="form-control" name="lokasi10" id="lokasi10" disabled>
          <option value="<?= $data['puskesmas_badai'] ?>" selected><?= $data['puskesmas_badai'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas mudah di jangkau oleh masyarakat</label>
        <select class="form-control" name="lokasi11" id="lokasi11" disabled>
          <option value="<?= $data['puskesmas_masyarakat'] ?>" selected><?= $data['puskesmas_masyarakat'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas memiliki akses transportasi </label>
        <select class="form-control" name="lokasi12" id="lokasi12" disabled>
          <option value="<?= $data['puskesmas_transportasi'] ?>" selected><?= $data['puskesmas_transportasi'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tersedia jalur yang aksesibel untuk penyandang disabilitas yang rapi dan bersih</label>
        <select class="form-control" name="lokasi13" id="lokasi13" disabled>
          <option value="<?= $data['puskesmas_bersih'] ?>" selected><?= $data['puskesmas_bersih'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Fasilitas parkir Puskesmas memadai, rapi dan bersih</label>
        <select class="form-control" name="lokasi14" id="lokasi14" disabled>
          <option value="<?= $data['fasilitas_bersih'] ?>" selected><?= $data['fasilitas_bersih'] ?></option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Tersedia pagar keliling untuk pengamanan puskesmas dalam kondisi baik, rapi dan bersih
        </label>
        <select class="form-control" name="lokasi15" id="lokasi15" disabled>
          <option value="<?= $data['tersedia_bersih'] ?>" selected><?= $data['tersedia_bersih'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Puskesmas Tidak berdiri di area sekitar Saluran Udara Tegangan Tinggi (SUTT) dan Saluran Udara Tegangan Ekstra Tinggi (SUTET)</label>
        <select class="form-control" name="lokasi16" id="lokasi16" disabled>
          <option value="<?= $data['sutet'] ?>" selected><?= $data['sutet'] ?></option>
        </select>
      </div>
    </form>
    <a href="<?= base_url('Lokasi_Puskesmas/ubah'); ?>" class="btn float-right btn-danger" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">
      Edit
    </a>
  </div>
</div>