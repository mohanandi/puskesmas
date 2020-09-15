<div class="col-md-9" style="top:-110px;">
  <div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">

    <div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">
      <form method="POST" action="<?= base_url('Lokasi_Puskesmas/tambah') ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas mempunyai sertifikat tanah</label>
          <select class="form-control" name="lokasi1" id="lokasi1">
            <?php if (set_value('lokasi1')) : ?>
              <option value="<?= set_value('lokasi1'); ?>"><?= set_value('lokasi1'); ?></option>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas mempunyai SLF (Sertifikat Laik Fungsi) yang dikeluarkan oleh Dinas PU</label>
          <select class="form-control" name="lokasi2" id="lokasi2">
            <?php if (set_value('lokasi2')) : ?>
              <option value="<?= set_value('lokasi2'); ?>"><?= set_value('lokasi2'); ?></option>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di tepi lereng</label>
          <select class="form-control" name="lokasi3" id="lokasi3">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak dekat kaki gunung yang rawan terhadap tanah longsor</label>
          <select class="form-control" name="lokasi4" id="lokasi4">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak dekat anak sungai, sungai atau badan air yang dapat mengikis pondasi)</label>
          <select class="form-control" name="lokasi5" id="lokasi5">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di atas atau dekat dengan jalur patahan aktif)</label>
          <select class="form-control" name="lokasi6" id="lokasi6">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan tsunami</label>
          <select class="form-control" name="lokasi7" id="lokasi7">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan banjir</label>
          <select class="form-control" name="lokasi8" id="lokasi8">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak dalam zona topan</label>
          <select class="form-control" name="lokasi9" id="lokasi9">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan badai </label>
          <select class="form-control" name="lokasi10" id="lokasi10">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas mudah di jangkau oleh masyarakat</label>
          <select class="form-control" name="lokasi11" id="lokasi11">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas memiliki akses transportasi </label>
          <select class="form-control" name="lokasi12" id="lokasi12">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tersedia jalur yang aksesibel untuk penyandang disabilitas yang rapi dan bersih</label>
          <select class="form-control" name="lokasi13" id="lokasi13">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Fasilitas parkir Puskesmas memadai, rapi dan bersih</label>
          <select class="form-control" name="lokasi14" id="lokasi14">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Tersedia pagar keliling untuk pengamanan puskesmas dalam kondisi baik, rapi dan bersih
          </label>
          <select class="form-control" name="lokasi15" id="lokasi15">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak berdiri di area sekitar Saluran Udara Tegangan Tinggi (SUTT) dan Saluran Udara Tegangan Ekstra Tinggi (SUTET)</label>
          <select class="form-control" name="lokasi16" id="lokasi16">
            <option selected>Pilih ...</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">
          masukkan
        </button>
      </form>
    </div>
  </div>
</div>