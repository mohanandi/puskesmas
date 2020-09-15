<div class="col-md-9">
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success" role="alert">
      Data Telah Berhasil
      <?= $this->session->flashdata('flash'); ?>
    </div>
  <?php endif; ?>
  <form style="height:350px; overflow-y:auto; padding:20px;">
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Puskesmas</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['nama']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Register</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_reg']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Tanggal Pendirian</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= date('d F Y', $data['tgl_pendirian']); ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Alamat</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['alamat']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Kecamatan</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['kecamatan']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Kabupaten/Kota</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['kab_kota']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Provinsi</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['provinsi']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Telepon Puskesmas dan No Telepon Whatsapp</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_telp']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Telepon Ruang Gadar</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_telp_gadar']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">No. Faksimile</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_faksimile']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Alamat email dan website</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['email']; ?>" readonly>
    </div>

  </form>

  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

</div>