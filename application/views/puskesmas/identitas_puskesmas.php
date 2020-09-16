<div class="site-section" id = "menu">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Form Menu</span>
            <h2 class="heading"><strong class="text-primary">Identitas Puskesmas</strong></h2>
          </div>
        </div>



  <form method="POST" action="<?= base_url('Identitas_Puskesmas/tambah'); ?>" style=" padding:20px;">

    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Puskesmas</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="">
      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Register</label>
      <input type="number" class="form-control" id="no_reg" name="no_reg" placeholder="">
      <?= form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Tanggal Pendirian</label>
      <input type="date" class="form-control" id="tgl_diri" name="tgl_diri" placeholder="">
      <?= form_error('tgl_diri', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
      <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="">
      <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Kabupaten/Kota</label>
      <input type="text" class="form-control" id="kab_kota" name="kab_kota" placeholder="">
      <?= form_error('kab_kota', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Provinsi</label>
      <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="">
      <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Telepon Puskesmas dan No Telepon Whatsapp</label>
      <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="">
      <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Telepon Ruang Gadar</label>
      <input type="number" class="form-control" id="telp_gadar" name="telp_gadar" placeholder="">
      <?= form_error('telp_gadar', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Faksimile</label>
      <input type="number" class="form-control" id="faks" name="faks" placeholder="">
      <?= form_error('faks', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Alamat email dan website</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="">
      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</button>
  </form>
</div>
