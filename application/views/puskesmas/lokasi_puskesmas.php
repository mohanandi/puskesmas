<div class="col-md-9" style="top:-110px;">
  <div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">

    <div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">
      <form method="POST" action="<?= base_url('Lokasi_Puskesmas/tambah') ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas mempunyai sertifikat tanah</label>
          <select class="form-control" name="lokasi1" id="lokasi1">
            <?php is_terisi($data['puskesmas_tanah'], set_value('lokasi1')); ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas mempunyai SLF (Sertifikat Laik Fungsi) yang dikeluarkan oleh Dinas PU</label>
          <select class="form-control" name="lokasi2" id="lokasi2">
            <?php is_terisi($data['slf'], set_value('lokasi2')); ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di tepi lereng</label>
          <select class="form-control" name="lokasi3" id="lokasi3">
            <?php is_terisi($data['puskesmas_lereng'], set_value('lokasi3')); ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi3', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak dekat kaki gunung yang rawan terhadap tanah longsor</label>
          <select class="form-control" name="lokasi4" id="lokasi4">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_longsor']; ?>"><?= $data['puskesmas_longsor']; ?></option>
              <?php if (set_value('lokasi4')) : ?>
                <option value="<?= set_value('lokasi4'); ?>"><?= set_value('lokasi4'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi4', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak dekat anak sungai, sungai atau badan air yang dapat mengikis pondasi)</label>
          <select class="form-control" name="lokasi5" id="lokasi5">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_pondasi']; ?>"><?= $data['puskesmas_pondasi']; ?></option>
              <?php if (set_value('lokasi5')) : ?>
                <option value="<?= set_value('lokasi5'); ?>"><?= set_value('lokasi5'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi5', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di atas atau dekat dengan jalur patahan aktif)</label>
          <select class="form-control" name="lokasi6" id="lokasi6">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_aktif']; ?>"><?= $data['puskesmas_aktif']; ?></option>
              <?php if (set_value('lokasi6')) : ?>
                <option value="<?= set_value('lokasi6'); ?>"><?= set_value('lokasi6'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi6', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan tsunami</label>
          <select class="form-control" name="lokasi7" id="lokasi7">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_tsunami']; ?>"><?= $data['puskesmas_tsunami']; ?></option>
              <?php if (set_value('lokasi7')) : ?>
                <option value="<?= set_value('lokasi7'); ?>"><?= set_value('lokasi7'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi7', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan banjir</label>
          <select class="form-control" name="lokasi8" id="lokasi8">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_banjir']; ?>"><?= $data['puskesmas_banjir']; ?></option>
              <?php if (set_value('lokasi8')) : ?>
                <option value="<?= set_value('lokasi8'); ?>"><?= set_value('lokasi8'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi8', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak dalam zona topan</label>
          <select class="form-control" name="lokasi9" id="lokasi9">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_topan']; ?>"><?= $data['puskesmas_topan']; ?></option>
              <?php if (set_value('lokasi9')) : ?>
                <option value="<?= set_value('lokasi9'); ?>"><?= set_value('lokasi9'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi9', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak di daerah rawan badai </label>
          <select class="form-control" name="lokasi10" id="lokasi10">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_badai']; ?>"><?= $data['puskesmas_badai']; ?></option>
              <?php if (set_value('lokasi10')) : ?>
                <option value="<?= set_value('lokasi10'); ?>"><?= set_value('lokasi10'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi10', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas mudah di jangkau oleh masyarakat</label>
          <select class="form-control" name="lokasi11" id="lokasi11">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_masyarakat']; ?>"><?= $data['puskesmas_masyarakat']; ?></option>
              <?php if (set_value('lokasi11')) : ?>
                <option value="<?= set_value('lokasi11'); ?>"><?= set_value('lokasi11'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi11', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas memiliki akses transportasi </label>
          <select class="form-control" name="lokasi12" id="lokasi12">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_transportasi']; ?>"><?= $data['puskesmas_transportasi']; ?></option>
              <?php if (set_value('lokasi12')) : ?>
                <option value="<?= set_value('lokasi12'); ?>"><?= set_value('lokasi12'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi12', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tersedia jalur yang aksesibel untuk penyandang disabilitas yang rapi dan bersih</label>
          <select class="form-control" name="lokasi13" id="lokasi13">
            <?php if ($data) : ?>
              <option value="<?= $data['puskesmas_bersih']; ?>"><?= $data['puskesmas_bersih']; ?></option>
              <?php if (set_value('lokasi13')) : ?>
                <option value="<?= set_value('lokasi13'); ?>"><?= set_value('lokasi13'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi13', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Fasilitas parkir Puskesmas memadai, rapi dan bersih</label>
          <select class="form-control" name="lokasi14" id="lokasi14">
            <?php if ($data) : ?>
              <option value="<?= $data['fasilitas_bersih']; ?>"><?= $data['fasilitas_bersih']; ?></option>
              <?php if (set_value('lokasi14')) : ?>
                <option value="<?= set_value('lokasi14'); ?>"><?= set_value('lokasi14'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi14', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Tersedia pagar keliling untuk pengamanan puskesmas dalam kondisi baik, rapi dan bersih
          </label>
          <select class="form-control" name="lokasi15" id="lokasi15">
            <?php if ($data) : ?>
              <option value="<?= $data['tersedia_bersih']; ?>"><?= $data['tersedia_bersih']; ?></option>
              <?php if (set_value('lokasi15')) : ?>
                <option value="<?= set_value('lokasi15'); ?>"><?= set_value('lokasi15'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi15', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas Tidak berdiri di area sekitar Saluran Udara Tegangan Tinggi (SUTT) dan Saluran Udara Tegangan Ekstra Tinggi (SUTET)</label>
          <select class="form-control" name="lokasi16" id="lokasi16">
            <?php if ($data) : ?>
              <option value="<?= $data['sutet']; ?>"><?= $data['sutet']; ?></option>
              <?php if (set_value('lokasi16')) : ?>
                <option value="<?= set_value('lokasi16'); ?>"><?= set_value('lokasi16'); ?></option>
              <?php else : ?>
                <option selected>Pilih ...</option>
              <?php endif; ?>
            <?php else : ?>
              <option selected>Pilih ...</option>
            <?php endif; ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
          <?= form_error('lokasi16', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">
          masukkan
        </button>
      </form>
    </div>
  </div>
</div>