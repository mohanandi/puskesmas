<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pembina Terpadu</strong></h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Pembina_terpadu/tambah');
      $button = 'Simpan';
    }
    ?>
    <form method="POST" action="<?= $link; ?>" style=" padding:20px;">

      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pembina dan No. Telepon</label>
        <div class="row">
          <div class="col">
            <?php if ($data['pembina1']) : ?>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pembina 1" name="pembina1" id="pembina1" value="<?= $data['pembina1']; ?>">
            <?php else : ?>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pembina 1" name="pembina1" id="pembina1" value="<?= set_value('pembina1'); ?>">
            <?php endif; ?>
            <?= form_error('pembina1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col">
            <?php if ($data['no_pembina1']) : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" name="no_pembina1" id="no_pembina1" value="<?= $data['no_pembina1']; ?>">
            <?php else : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" name="no_pembina1" id="no_pembina1" value="<?= set_value('no_pembina1'); ?>">
            <?php endif; ?>
            <?= form_error('no_pembina1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <?php if ($data['pembina2']) : ?>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pembina 2" name="pembina2" id="pembina2" value="<?= $data['pembina2']; ?>">
            <?php else : ?>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pembina 2" name="pembina2" id="pembina2" value="<?= set_value('pembina2'); ?>">
            <?php endif; ?>
            <?= form_error('pembina2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col">
            <?php if ($data['no_pembina2']) : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" name="no_pembina2" id="no_pembina2" value="<?= $data['no_pembina2']; ?>">
            <?php else : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" name="no_pembina2" id="no_pembina2" value="<?= set_value('no_pembina2'); ?>">
            <?php endif; ?>
            <?= form_error('no_pembina2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <?php if ($data['pembina3']) : ?>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pembina 3" name="pembina3" id="pembina3" value="<?= $data['pembina3']; ?>">
            <?php else : ?>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pembina 3" name="pembina3" id="pembina3" value="<?= set_value('pembina3'); ?>">
            <?php endif; ?>
            <?= form_error('pembina3', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col">
            <?php if ($data['no_pembina3']) : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" name="no_pembina3" id="no_pembina3" value="<?= $data['no_pembina3']; ?>">
            <?php else : ?>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" name="no_pembina3" id="no_pembina3" value="<?= set_value('no_pembina3'); ?>">
            <?php endif; ?>
            <?= form_error('no_pembina3', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tanggal Pembinaan</label>
        <?php if ($data['tgl_pembinaan']) : ?>
          <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl_pembinaan" id="tgl_pembinaan" value="<?= date('Y-m-d', $data['tgl_pembinaan']); ?>">
        <?php else : ?>
          <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl_pembinaan" id="tgl_pembinaan" value="<?= set_value('tgl_pembinaan'); ?>">
        <?php endif; ?>
        <?= form_error('tgl_pembinaan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>