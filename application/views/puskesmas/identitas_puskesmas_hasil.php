<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Identitas Puskesmas</strong></h2>
      </div>
    </div>
    <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-success" role="alert">
        Data Telah Berhasil
        <?= $this->session->flashdata('flash'); ?>
      </div>
    <?php endif; ?>



    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Nama Puskesmas</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['nama']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. No. Register</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_reg']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Tanggal Pendirian</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= date('d F Y', $data['tgl_pendirian']); ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Alamat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['alamat']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Kecamatan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['kecamatan']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Kabupaten/Kota</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['kab_kota']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Provinsi</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['provinsi']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. No. Telepon Puskesmas dan No Telepon Whatsapp</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_telp']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. No. Telepon Ruang Gadar</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_telp_gadar']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. No. Faksimile</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_faksimile']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Alamat email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['email']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Alamat website</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['website']; ?>" readonly>
      </div>
    </form>
    <a href="<?= base_url(); ?>Identitas_Puskesmas/ubah" class="btn float-right btn-danger" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Edit</a>

  </div>
</div>