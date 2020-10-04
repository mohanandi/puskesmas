<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Lokasi Puskesmas</strong></h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Lokasi_Puskesmas/tambah');
      $button = 'Simpan';
    }
    ?>
    <form method="POST" action="<?= $link; ?>" style=" padding:20px;">

      <div class="form-group">
        <label for="exampleFormControlInput1">1. Puskesmas mempunyai sertifikat tanah</label>
        <select class="form-control" name="lokasi1" id="lokasi1">
          <?php is_terisi($data['puskesmas_tanah'], set_value('lokasi1')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Puskesmas mempunyai SLF (Sertifikat Laik Fungsi) yang dikeluarkan oleh Dinas PU</label>
        <select class="form-control" name="lokasi2" id="lokasi2">
          <?php is_terisi($data['slf'], set_value('lokasi2')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Puskesmas Tidak di tepi lereng</label>
        <select class="form-control" name="lokasi3" id="lokasi3">
          <?php is_terisi($data['puskesmas_lereng'], set_value('lokasi3')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Puskesmas Tidak dekat kaki gunung yang rawan terhadap tanah longsor</label>
        <select class="form-control" name="lokasi4" id="lokasi4">
          <?php is_terisi($data['puskesmas_longsor'], set_value('lokasi4')); ?> <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi4', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Puskesmas Tidak dekat anak sungai, sungai atau badan air yang dapat mengikis pondasi)</label>
        <select class="form-control" name="lokasi5" id="lokasi5">
          <?php is_terisi($data['puskesmas_pondasi'], set_value('lokasi5')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Puskesmas Tidak di atas atau dekat dengan jalur patahan aktif)</label>
        <select class="form-control" name="lokasi6" id="lokasi6">
          <?php is_terisi($data['puskesmas_aktif'], set_value('lokasi6')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi6', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Puskesmas Tidak di daerah rawan tsunami</label>
        <select class="form-control" name="lokasi7" id="lokasi7">
          <?php is_terisi($data['puskesmas_tsunami'], set_value('lokasi7')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi7', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Puskesmas Tidak di daerah rawan banjir</label>
        <select class="form-control" name="lokasi8" id="lokasi8">
          <?php is_terisi($data['puskesmas_banjir'], set_value('lokasi8')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi8', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Puskesmas Tidak dalam zona topan</label>
        <select class="form-control" name="lokasi9" id="lokasi9">
          <?php is_terisi($data['puskesmas_topan'], set_value('lokasi9')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi9', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Puskesmas Tidak di daerah rawan badai </label>
        <select class="form-control" name="lokasi10" id="lokasi10">
          <?php is_terisi($data['puskesmas_badai'], set_value('lokasi10')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi10', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Puskesmas mudah di jangkau oleh masyarakat</label>
        <select class="form-control" name="lokasi11" id="lokasi11">
          <?php is_terisi($data['puskesmas_masyarakat'], set_value('lokasi11')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi11', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">12. Puskesmas memiliki akses transportasi </label>
        <select class="form-control" name="lokasi12" id="lokasi12">
          <?php is_terisi($data['puskesmas_transportasi'], set_value('lokasi12')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi12', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">13. Puskesmas Tersedia jalur yang aksesibel untuk penyandang disabilitas yang rapi dan bersih</label>
        <select class="form-control" name="lokasi13" id="lokasi13">
          <?php is_terisi($data['puskesmas_bersih'], set_value('lokasi13')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi13', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">14. Fasilitas parkir Puskesmas memadai, rapi dan bersih</label>
        <select class="form-control" name="lokasi14" id="lokasi14">
          <?php is_terisi($data['fasilitas_bersih'], set_value('lokasi14')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi14', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">15. Tersedia pagar keliling untuk pengamanan puskesmas dalam kondisi baik, rapi dan bersih
        </label>
        <select class="form-control" name="lokasi15" id="lokasi15">
          <?php is_terisi($data['tersedia_bersih'], set_value('lokasi15')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi15', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">16. Puskesmas Tidak berdiri di area sekitar Saluran Udara Tegangan Tinggi (SUTT) dan Saluran Udara Tegangan Ekstra Tinggi (SUTET)</label>
        <select class="form-control" name="lokasi16" id="lokasi16">
          <?php is_terisi($data['sutet'], set_value('lokasi16')); ?>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
        <?= form_error('lokasi16', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">
        <?= $button; ?>
      </button>
    </form>
  </div>
</div>