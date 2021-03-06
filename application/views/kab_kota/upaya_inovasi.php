<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Upaya Inovasi</strong></h2>
      </div>
    </div>

    <form style=" padding:20px;">
      <div class="form-group">
        <div class="con">
          <label for="exampleFormControlInput1"><strong> PUSKESMAS MEMPUNYAI UPAYA INOVASI ?</strong></label><br>
          <label for="exampleFormControlInput1"><strong>Inovasi dikembangkan karena adanya kebutuhan:</strong></label><br>
          <label for="exampleFormControlInput1">1. Karena adanya ketertinggalan dalam pencapaian target yang telah ditetapkan, untuk segera dikejar pencapaiannya, sehingga tidak terjadi kesenjangan di akhir tahun (dalam arti target kinerja dapat dicapai).</label><br>
          <label for="exampleFormControlInput1">2. Karena adanya kesempatan dan kekuatan untuk mencapai target lebih cepat atau di akhir tahun mencapai target lebih tinggi dari rencana semula</label><br><br>
          <label for="exampleFormControlInput1"><strong>Yang dirancang, berupa:</strong></label><br>
          <label for="exampleFormControlInput1">1. Penetapan strategi, melalui mapping, hasil segmentasi sasaran, penetapan target sasaran, dan pemosisian dalam upaya merancang langkah-langkah kegiatan</label><br>
          <label for="exampleFormControlInput1">2. Menetapkan target kinerja dan waktu pencapaiannya, secara jelas</label><br>
          <label for="exampleFormControlInput1">3. Menyusun KAK Inovasi, mencakup rincian 6W2H1E</label><br><br>
          <label for="exampleFormControlInput1"><strong> SESUAI DENGAN KRITERIA UNTUK MERANCANG INOVASI, MAKA DALAM TABEL DIBAWAH ISIKAN</strong></label><br>

          <form class="p-3">
            <div class="form-group">
              <label for="seeAnotherField">Upaya Inovasi</label>
              <select class="form-control" id="seeAnotherField">
                <option value="no">Tidak Ada</option>
                <option value="yes">Ada</option>
              </select>
            </div>

            <div class="form-group" id="otherFieldDiv">
              <div class="row">
                <div class="col-md-4">
                  <label for="exampleFormControlInput1"><strong>Inovasi UKM</strong></label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1"><strong>Inovasi UKP</strong></label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1"><strong> Inovasi MANAJEMEN </strong></label>
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukm1') ?>" placeholder="1" name="upayaukm1" id="upayaukm1">
                </div>
                <div class=" col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukp1') ?>" placeholder="1" name="upayaukp1" id="upayaukp1">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayamanajemen1') ?>" placeholder="1" name="upayamanajemen1" id="upayamanajemen1">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukm2') ?>" placeholder="2" name="upayaukm2" id="upayaukm2">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukp2') ?>" placeholder="2" name="upayaukp2" id="upayaukp2">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayamanajemen2') ?>" placeholder="2" name="upayamanajemen2" id="upayamanajemen2">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukm3') ?>" placeholder="3" name="upayaukm3" id="upayaukm3">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukp3') ?>" placeholder="3" name="upayaukp3" id="upayaukp3">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayamanajemen3') ?>" placeholder="3" name="upayamanajemen3" id="upayamanajemen3">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukm4') ?>" placeholder="4" name="upayaukm4" id="upayaukm4">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayaukp4') ?>" placeholder="4" name="upayaukp4" id="upayaukp4">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= set_value('upayamanajemen4') ?>" placeholder="4" name="upayamanajemen4" id="upayamanajemen4">
                </div>
              </div>
            </div>
          </form>


        </div>
      </div>
      <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
      <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>
    </form>

  </div>
</div>