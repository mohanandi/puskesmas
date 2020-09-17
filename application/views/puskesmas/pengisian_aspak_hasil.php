<div class="site-section" id="menu">
 <div class="container">
  <div class="row mb-5">
   <div class="col-lg-7 mx-auto text-center">
    <span class="subheading">Form Menu</span>
    <h2 class="heading"><strong class="text-primary">Pengisian Aspak</strong></h2>
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
    <label for="exampleFormControlInput1">Melaksanakan Pengisian Aplikasi Sarana, Prasarana, dan Peralatan Kesehatan (ASPAK)</label>
    <select class="form-control" name="aspak1" id="aspak1">
     <option value="<?= $data['aspak']; ?>" selected><?= $data['aspak']; ?></option>
    </select>

   </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut. berapa pemenuhan Standar ASPAK menurut PMK 43/2019 </label>
    <select class="form-control" name="aspak2" id="aspak2">
     <option value="<?= $data['aspak_pmk']; ?>" selected><?= $data['aspak_pmk']; ?></option>
    </select>
    <?= form_error('aspak2', '<small class="text-danger pl-3">', '</small>'); ?>
   </div>
   <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</button>
  </form>
 </div>
</div>
</div>