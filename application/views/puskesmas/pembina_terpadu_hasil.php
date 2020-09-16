<div class="col-md-9">
  <form style="height:350px; overflow-y:auto; padding:20px;">
    <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-success" role="alert">
        Data Berhasil <?= $this->session->flashdata('flash'); ?>
      </div>
    <?php endif; ?>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Pembina dan No. Telepon</label>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nama Pembina 1" value="<?= $data['pembina1'] ?>" readonly>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="No. Telepon" value="<?= $data['no_pembina1'] ?>" readonly>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nama Pembina 2" value="<?= $data['pembina2'] ?>" readonly>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="No. Telepon" value="<?= $data['no_pembina2'] ?>" readonly>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nama Pembina 3" value="<?= $data['pembina3'] ?>" readonly>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="No. Telepon" value="<?= $data['no_pembina3'] ?>" readonly>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Tanggal Pembinaan</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= date('d F Y', $data['tgl_pembinaan']); ?>" readonly>
    </div>

  </form>

  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

</div>