<div class="col-md-9" style="top:-110px;">
  <div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">

    <div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">
      <form>
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="alert alert-success" role="alert">
            Data Telah Berhasil
            <?= $this->session->flashdata('flash'); ?>
          </div>
        <?php endif; ?>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Kepala Puskesmas </strong></label>
          <select class="form-control" name="sdm1" id="sdm1">
            <option value="<?= $data['kepala']; ?>" selected><?= $data['kepala']; ?></option>
            <option value="1">Dokter Umum</option>
            <option value="2">Dokter Gigi</option>
            <option value="2">Sarjana Kesehatan Masyarakat (SKM)</option>
            <option value="2">Lain-lain</option> <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lain-lain">
          </select>
        </div>
        <!-- Tenaga dan Status Kepegawaian -->
        <label for="exampleFormControlInput1"><strong>Tenaga dan Status Kepegawaian</strong></label><br>

        <section class="form-group" id="form-group">
          <div class="form-group">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Dokter</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter1" id="sdmdokter1" value="<?= $data['dokter1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmdokter2" id="sdmdokter2" value="<?= $data['dokter2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmdokter3" id="sdmdokter3" value="<?= $data['dokter3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmdokter4" id="sdmdokter4" value="<?= $data['dokter4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmdokter5" id="sdmdokter5" value="<?= $data['dokter5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmdokter6" id="sdmdokter6" value="<?= $data['dokter6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Dokter Layanan Primer (DLP)</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp1" id="sdmdlp1" value="<?= $data['dlp1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmdlp2" id="sdmdlp2" value="<?= $data['dlp2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmdlp3" id="sdmdlp3" value="<?= $data['dlp3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmdlp4" id="sdmdlp4" value="<?= $data['dlp4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmdlp5" id="sdmdlp5" value="<?= $data['dlp5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmdlp6" id="sdmdlp6" value="<?= $data['dlp6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Dokter Gigi</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi1" id="sdmgigi1" value="<?= $data['gigi1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmgigi2" id="sdmgigi2" value="<?= $data['gigi2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmgigi3" id="sdmgigi3" value="<?= $data['gigi3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmgigi4" id="sdmgigi4" value="<?= $data['gigi4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmgigi5" id="sdmgigi5" value="<?= $data['gigi5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmgigi6" id="sdmgigi6" value="<?= $data['gigi6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Perawat</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat1" id="sdmperawat1" value="<?= $data['perawat1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmperawat2" id="sdmperawat2" value="<?= $data['perawat2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmperawat3" id="sdmperawat3" value="<?= $data['perawat3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmperawat4" id="sdmperawat4" value="<?= $data['perawat4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmperawat5" id="sdmperawat5" value="<?= $data['perawat5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmperawat6" id="sdmperawat6" value="<?= $data['perawat6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Bidan</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan1" id="sdmbidan1" value="<?= $data['bidan1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmbidan2" id="sdmbidan2" value="<?= $data['bidan2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmbidan3" id="sdmbidan3" value="<?= $data['bidan3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmbidan4" id="sdmbidan4" value="<?= $data['bidan4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmbidan5" id="sdmbidan5" value="<?= $data['bidan5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmbidan6" id="sdmbidan6" value="<?= $data['bidan6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga promosi kesehatan dan ilmu perilaku</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi1" id="sdmpromosi1" value="<?= $data['promosi1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmpromosi2" id="sdmpromosi2" value="<?= $data['promosi2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmpromosi3" id="sdmpromosi3" value="<?= $data['promosi3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmpromosi4" id="sdmpromosi4" value="<?= $data['promosi4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmpromosi5" id="sdmpromosi5" value="<?= $data['promosi5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmpromosi6" id="sdmpromosi6" value="<?= $data['promosi6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga sanitasi lingkungan</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi1" id="sdmsanitasi1" value="<?= $data['sanitasi1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmsanitasi2" id="sdmsanitasi2" value="<?= $data['sanitasi2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmsanitasi3" id="sdmsanitasi3" value="<?= $data['sanitasi3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmsanitasi4" id="sdmsanitasi4" value="<?= $data['sanitasi4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmsanitasi5" id="sdmsanitasi5" value="<?= $data['sanitasi5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmsanitasi6" id="sdmsanitasi6" value="<?= $data['sanitasi6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Nutrisionis</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis1" id="sdmnutrisionis1" value="<?= $data['nutrisionis1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmnutrisionis2" id="sdmnutrisionis2" value="<?= $data['nutrisionis2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmnutrisionis3" id="sdmnutrisionis3" value="<?= $data['nutrisionis3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmnutrisionis4" id="sdmnutrisionis4" value="<?= $data['nutrisionis4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmnutrisionis5" id="sdmnutrisionis5" value="<?= $data['nutrisionis5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmnutrisionis6" id="sdmnutrisionis6" value="<?= $data['nutrisionis6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga Apoteker </label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker1" id="sdmapoteker1" value="<?= $data['apoteker1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmapoteker2" id="sdmapoteker2" value="<?= $data['apoteker2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmapoteker3" id="sdmapoteker3" value="<?= $data['apoteker3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmapoteker4" id="sdmapoteker4" value="<?= $data['apoteker4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmapoteker5" id="sdmapoteker5" value="<?= $data['apoteker5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmapoteker6" id="sdmapoteker6" value="<?= $data['apoteker6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga teknis kefarmasian</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian1" id="sdmkefarmasian1" value="<?= $data['kefarmasian1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmkefarmasian2" id="sdmkefarmasian2" value="<?= $data['kefarmasian2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmkefarmasian3" id="sdmkefarmasian3" value="<?= $data['kefarmasian3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmkefarmasian4" id="sdmkefarmasian4" value="<?= $data['kefarmasian4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmkefarmasian5" id="sdmkefarmasian5" value="<?= $data['kefarmasian5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmkefarmasian6" id="sdmkefarmasian6" value="<?= $data['kefarmasian6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Ahli teknologi laboratorium medik</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli1" id="sdmahli1" value="<?= $data['ahli1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmahli2" id="sdmahli2" value="<?= $data['ahli2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmahli3" id="sdmahli3" value="<?= $data['ahli3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmahli4" id="sdmahli4" value="<?= $data['ahli4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmahli5" id="sdmahli5" value="<?= $data['ahli5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmahli6" id="sdmahli6" value="<?= $data['ahli6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga sistem informasi kesehatan </label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan1" id="sdmkesehatan1" value="<?= $data['kesehatan1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmkesehatan2" id="sdmkesehatan2" value="<?= $data['kesehatan2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmkesehatan3" id="sdmkesehatan3" value="<?= $data['kesehatan3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmkesehatan4" id="sdmkesehatan4" value="<?= $data['kesehatan4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmkesehatan5" id="sdmkesehatan5" value="<?= $data['kesehatan5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmkesehatan6" id="sdmkesehatan6" value="<?= $data['kesehatan6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga administrasi keuangan</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan1" id="sdmkeuangan1" value="<?= $data['keuangan1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmkeuangan2" id="sdmkeuangan2" value="<?= $data['keuangan2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmkeuangan3" id="sdmkeuangan3" value="<?= $data['keuangan3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmkeuangan4" id="sdmkeuangan4" value="<?= $data['keuangan4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmkeuangan5" id="sdmkeuangan5" value="<?= $data['keuangan5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmkeuangan6" id="sdmkeuangan6" value="<?= $data['keuangan6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Tenaga ketatausahaan</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha1" id="sdmtatausaha1" value="<?= $data['tatausaha1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmtatausaha2" id="sdmtatausaha2" value="<?= $data['tatausaha2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtatausaha3" id="sdmtatausaha3" value="<?= $data['tatausaha3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmtatausaha4" id="sdmtatausaha4" value="<?= $data['tatausaha4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmtatausaha5" id="sdmtatausaha5" value="<?= $data['tatausaha5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmtatausaha6" id="sdmtatausaha6" value="<?= $data['tatausaha6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Pekarya</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya1" id="sdmpekarya1" value="<?= $data['pekarya1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmpekarya2" id="sdmpekarya2" value="<?= $data['pekarya2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmpekarya3" id="sdmpekarya3" value="<?= $data['pekarya3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmpekarya4" id="sdmpekarya4" value="<?= $data['pekarya4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmpekarya5" id="sdmpekarya5" value="<?= $data['pekarya5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmpekarya5" id="sdmpekarya5" value="<?= $data['pekarya6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">Lain-lain Sebutkan:</label>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">a. Tenaga Kesehatan Tradisional</label>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional1" id="sdmtradisional1" value="<?= $data['tradisional1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmtradisional2" id="sdmtradisional2" value="<?= $data['tradisional2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtradisional3" id="sdmtradisional3" value="<?= $data['tradisional3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmtradisional4" id="sdmtradisional4" value="<?= $data['tradisional4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmtradisional5" id="sdmtradisional5" value="<?= $data['tradisional5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmtradisional6" id="sdmtradisional6 " value="<?= $data['tradisional6']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="b.  ........." name="sdmtitik1" id="sdmtitik1" value="<?= $data['titik1']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik2" id="sdmtitik2" value="<?= $data['titik2']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmtitik3" id="sdmtitik3" value="<?= $data['titik3']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtitik4" id="sdmtitik4" value="<?= $data['titik4']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmtitik5" id="sdmtitik5" value="<?= $data['titik5']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmtitik6" id="sdmtiti6" value="<?= $data['titik6']; ?>" readonly>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmtitik7" id="sdmtitik7" value="<?= $data['titik7']; ?>" readonly>
                </div>
                <div class="col-md-12">
                  <label for="exampleFormControlInput1">TOTAL</label>
                </div>
              </div>
            </div>
          </div>

        </section>
        <a class="btn float-right btn-danger" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
      </form>
    </div>
  </div>
</div>
