<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Identitas Puskesmas</strong></h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Identitas_Puskesmas/tambah');
      $button = 'Simpan';
    }
    ?>
    <form method="POST" action="<?= $link; ?>" style=" padding:20px;">
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Nama Puskesmas</label>
        <?php if ($data['nama']) : ?>
          <input type="text" class="form-control" placeholder="" name="nama" id="nama" value="<?= $data['nama']; ?>">
        <?php else : ?>
          <input type="text" class="form-control" placeholder="" name="nama" id="nama" value="<?= set_value('nama'); ?>">
        <?php endif; ?>
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. No. Register</label>
        <?php if ($data['no_reg']) : ?>
          <input type="number" class="form-control" placeholder="" name="no_reg" id="no_reg" value="<?= $data['no_reg']; ?>">
        <?php else : ?>
          <input type="number" class="form-control" placeholder="" name="no_reg" id="no_reg" value="<?= set_value('no_reg'); ?>">
        <?php endif; ?>
        <?= form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Tanggal Pendirian</label>
        <?php if ($data['tgl_pendirian']) : ?>
          <input type="date" class="form-control" placeholder="" name="tgl_diri" id="tgl_diri" value="<?= date('Y-m-d', $data['tgl_pendirian']); ?>">
        <?php else : ?>
          <input type="date" class="form-control" placeholder="" name="tgl_diri" id="tgl_diri" value="<?= set_value('tgl_diri'); ?>">
        <?php endif; ?>
        <?= form_error('tgl_diri', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Alamat</label>
        <?php if ($data['alamat']) : ?>
          <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value="<?= $data['alamat']; ?>">
        <?php else : ?>
          <input type="text" class="form-control" placeholder="" name="alamat" id="alamat" value="<?= set_value('alamat'); ?>">
        <?php endif; ?>
        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Kecamatan</label>
        <?php if ($data['kecamatan']) : ?>
          <input type="text" class="form-control" placeholder="" name="kecamatan" id="kecamatan" value="<?= $data['kecamatan']; ?>">
        <?php else : ?>
          <input type="text" class="form-control" placeholder="" name="kecamatan" id="kecamatan" value="<?= set_value('kecamatan'); ?>">
        <?php endif; ?>
        <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Kabupaten/Kota</label>
        <?php if ($data['kab_kota']) : ?>
          <input type="text" class="form-control" placeholder="" name="kab_kota" id="kab_kota" value="<?= $data['kab_kota']; ?>">
        <?php else : ?>
          <input type="text" class="form-control" placeholder="" name="kab_kota" id="kab_kota" value="<?= set_value('kab_kota'); ?>">
        <?php endif; ?>
        <?= form_error('kab_kota', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Provinsi</label>
        <?php if ($data['provinsi']) : ?>
          <input type="text" class="form-control" placeholder="" name="provinsi" id="provinsi" value="<?= $data['provinsi']; ?>">
        <?php else : ?>
          <input type="text" class="form-control" placeholder="" name="provinsi" id="provinsi" value="<?= set_value('provinsi'); ?>">
        <?php endif; ?>
        <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. No. Telepon Puskesmas dan No Telepon Whatsapp</label>
        <?php if ($data['no_telp']) : ?>
          <input type="number" class="form-control" placeholder="" name="no_telp" id="no_telp" value="<?= $data['no_telp']; ?>">
        <?php else : ?>
          <input type="number" class="form-control" placeholder="" name="no_telp" id="no_telp" value="<?= set_value('no_telp'); ?>">
        <?php endif; ?>
        <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. No. Telepon Ruang Gadar</label>
        <?php if ($data['no_telp_gadar']) : ?>
          <input type="number" class="form-control" placeholder="" name="telp_gadar" id="telp_gadar" value="<?= $data['no_telp_gadar']; ?>">
        <?php else : ?>
          <input type="number" class="form-control" placeholder="" name="telp_gadar" id="telp_gadar" value="<?= set_value('telp_gadar'); ?>">
        <?php endif; ?>
        <?= form_error('telp_gadar', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. No. Faksimile</label>
        <?php if ($data['no_faksimile']) : ?>
          <input type="number" class="form-control" placeholder="" name="faks" id="faks" value="<?= $data['no_faksimile']; ?>">
        <?php else : ?>
          <input type="number" class="form-control" placeholder="" name="faks" id="faks" value="<?= set_value('faks'); ?>">
        <?php endif; ?>
        <?= form_error('faks', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Alamat email</label>
        <?php if ($data['email']) : ?>
          <input type="email" class="form-control" placeholder="" name="email" id="email" value="<?= $data['email']; ?>">
        <?php else : ?>
          <input type="email" class="form-control" placeholder="" name="email" id="email" value="<?= set_value('email'); ?>">
        <?php endif; ?>
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Alamat website</label>
        <?php if ($data['website']) : ?>
          <input type="website" class="form-control" placeholder="" name="website" id="website" value="<?= $data['website']; ?>">
        <?php else : ?>
          <input type="website" class="form-control" placeholder="" name="website" id="website" value="<?= set_value('website'); ?>">
        <?php endif; ?>
        <?= form_error('website', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>