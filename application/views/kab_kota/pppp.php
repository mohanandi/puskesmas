<div class="site-section" id = "menu">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Form Menu</span>
            <h2 class="heading"><strong class="text-primary">Pengawasan, Pengendalian dan Penilaian Kinerja </strong> Puskesmas</h2>
          </div>
        </div>
		  <form style="height:350px; overflow-y:auto; padding:20px;">
    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>IV. PENGAWASAN, PENGENDALIAN DAN PENILAIAN KINERJA PUSKESMAS</strong></label>
      <label for="exampleFormControlInput1">Dilakukan penilaian kinerja Puskesmas.<a href="#" onclick="toggle_visibility('foo6');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
      <br>
      <p id="foo6" style="display:none; font-size:12px; margin-left:20px;">1. Aspek penilaian kinerja Puskesmas terdiri dari hasil pencapaian pelaksanaan Pelayanan Kesehatan dan Manajemen Puskesmas <br> 2. Penilaian kinerja Puskesmas termasuk kategori baik bila tingkat pencapaian hasil pelaksanaan pelayanan kesehatan > 91% dan cakupan hasil manajemen ≥ 8,5 </p>
      <select class="form-control" name="pengawasan1" id="pengawasan1">
        <?php is_terisi($data['penilaian_kinerja'], set_value('pengawasan1')); ?>
        <option value="1">Bila aspek pelayanan kesehatan ≥ 91% dan cakupan hasil manajemen ≥ 8,5 nilai 10</option>
        <option value="2">Bila aspek pelayanan kesehatan < 91%, hasil manajemen ≥ 8,5 atau aspek pelayanan kesehatan ≥ 91% dan hasil manajemen < 8,5 nilai 5</option> <option value="3">Bila aspek pelayanan kesehatan < 91%, hasil manajemen < 8,5 nilai 0</option> </select> <?= form_error('pengawasan1', '<small class="text-danger pl-3">', '</small>'); ?> </div> <div class="form-group">
              <label for="exampleFormControlInput1">Penilaian kinerja Puskesmas diverifikasi dan diberikan umpan balik (feedback) <a href="#" onclick="toggle_visibility('foo7');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
              <br>
              <p id="foo7" style="display:none; font-size:12px; margin-left:20px;">1. Dinas kesehatan kabupaten/kota melakukan verifikasi dan memberikan umpan balik terhadap penilaian kinerja Puskesmas dalam bentuk tertulis setiap akhir tahun berjalan atau pada awal tahun berikutnya</p>
              <select class="form-control" name="pengawasan2" id="pengawasan2">
                <?php is_terisi($data['feedback'], set_value('pengawasan2')); ?>
                <option value="1">Bila terdapat umpan balik secara tertulis dan tepat waktu, nilai 10</option>
                <option value="2">Bila terdapat umpan balik secara tertulis tetapi tidak tepat waktu, nilai 5</option>
                <option value="3">Bila tidak terdapat umpan balik secara tertulis, nilai 0</option>
              </select>
              <?= form_error('pengawasan2', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>

  </form>
  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>
</div>
