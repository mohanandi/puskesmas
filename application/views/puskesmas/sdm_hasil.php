<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Sumber Daya Manusia</strong></h2>
      </div>
    </div>
    <form style="padding:20px;">
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success" role="alert">
          Data Telah Berhasil
          <?= $this->session->flashdata('flash'); ?>
        </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>1. Kepala Puskesmas </strong></label>
        <input type="text" class="form-control" value="<?= $data['kepala']; ?>" placeholder="" name="sdm1" id="sdm1" readonly>

      </div>
      <!-- Tenaga dan Status Kepegawaian -->
      <label for="exampleFormControlInput1"><strong>2. Tenaga dan Status Kepegawaian</strong></label><br>
      <section class="form-group" id="form-group">
        <div class="form-group">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Dokter</b></label>
                <?php
                $total_dokter = $data['dokter1'] + $data['dokter2'] + $data['dokter3'] + $data['dokter4'] + $data['dokter5'] + $data['dokter6'];
                $total_dlp = $data['dlp1'] + $data['dlp2'] + $data['dlp3'] + $data['dlp4'] + $data['dlp5'] + $data['dlp6'];
                $total_gigi = $data['gigi1'] + $data['gigi2'] + $data['gigi3'] + $data['gigi4'] + $data['gigi5'] + $data['gigi6'];
                $total_perawat = $data['perawat1'] + $data['perawat2'] + $data['perawat3'] + $data['perawat4'] + $data['perawat5'] + $data['perawat6'];
                $total_bidan = $data['bidan1'] + $data['bidan2'] + $data['bidan3'] + $data['bidan4'] + $data['bidan5'] + $data['bidan6'];
                $total_promosi = $data['promosi1'] + $data['promosi2'] + $data['promosi3'] + $data['promosi4'] + $data['promosi5'] + $data['promosi6'];
                $total_sanitasi = $data['sanitasi1'] + $data['sanitasi2'] + $data['sanitasi3'] + $data['sanitasi4'] + $data['sanitasi5'] + $data['sanitasi6'];
                $total_nutrisionis = $data['nutrisionis1'] + $data['nutrisionis2'] + $data['nutrisionis3'] + $data['nutrisionis4'] + $data['nutrisionis5'] + $data['nutrisionis6'];
                $total_apoteker = $data['apoteker1'] + $data['apoteker2'] + $data['apoteker3'] + $data['apoteker4'] + $data['apoteker5'] + $data['apoteker6'];
                $total_kefarmasian = $data['kefarmasian1'] + $data['kefarmasian2'] + $data['kefarmasian3'] + $data['kefarmasian4'] + $data['kefarmasian5'] + $data['kefarmasian6'];
                $total_ahli = $data['ahli1'] + $data['ahli2'] + $data['ahli3'] + $data['ahli4'] + $data['ahli5'] + $data['ahli6'];
                $total_kesehatan = $data['kesehatan1'] + $data['kesehatan2'] + $data['kesehatan3'] + $data['kesehatan4'] + $data['kesehatan5'] + $data['kesehatan6'];
                $total_keuangan = $data['keuangan1'] + $data['keuangan2'] + $data['keuangan3'] + $data['keuangan4'] + $data['keuangan5'] + $data['keuangan6'];
                $total_tatausaha = $data['tatausaha1'] + $data['tatausaha2'] + $data['tatausaha3'] + $data['tatausaha4'] + $data['tatausaha5'] + $data['tatausaha6'];
                $total_pekarya = $data['pekarya1'] + $data['pekarya2'] + $data['pekarya3'] + $data['pekarya4'] + $data['pekarya5'] + $data['pekarya6'];
                $total_tradisional = $data['tradisional1'] + $data['tradisional2'] + $data['tradisional3'] + $data['tradisional4'] + $data['tradisional5'] + $data['tradisional6'];
                $total_titik = $data['titik7'] + $data['titik2'] + $data['titik3'] + $data['titik4'] + $data['titik5'] + $data['titik6'];
                $total_semua = $total_dokter + $total_dlp + $total_gigi + $total_perawat + $total_bidan + $total_promosi + $total_sanitasi + $total_nutrisionis + $total_apoteker + $total_kefarmasian + $total_ahli + $total_kesehatan + $total_keuangan + $total_tatausaha + $total_pekarya + $total_tradisional + $total_titik;
                ?>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdokter1" id="sdmdokter1" value="<?= $data['dokter1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdokter2" id="sdmdokter2" value="<?= $data['dokter2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdokter3" id="sdmdokter3" value="<?= $data['dokter3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdokter4" id="sdmdokter4" value="<?= $data['dokter4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdokter5" id="sdmdokter5" value="<?= $data['dokter5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdokter6" id="sdmdokter6" value="<?= $data['dokter6']; ?>" readonly>
              </div><br>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_dokter; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Dokter Layanan Primer (DLP)</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdlp1" id="sdmdlp1" value="<?= $data['dlp1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdlp2" id="sdmdlp2" value="<?= $data['dlp2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdlp3" id="sdmdlp3" value="<?= $data['dlp3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdlp4" id="sdmdlp4" value="<?= $data['dlp4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdlp5" id="sdmdlp5" value="<?= $data['dlp5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmdlp6" id="sdmdlp6" value="<?= $data['dlp6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_dlp; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Dokter Gigi</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmgigi1" id="sdmgigi1" value="<?= $data['gigi1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmgigi2" id="sdmgigi2" value="<?= $data['gigi2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmgigi3" id="sdmgigi3" value="<?= $data['gigi3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmgigi4" id="sdmgigi4" value="<?= $data['gigi4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmgigi5" id="sdmgigi5" value="<?= $data['gigi5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmgigi6" id="sdmgigi6" value="<?= $data['gigi6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_gigi; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Perawat</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmperawat1" id="sdmperawat1" value="<?= $data['perawat1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmperawat2" id="sdmperawat2" value="<?= $data['perawat2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmperawat3" id="sdmperawat3" value="<?= $data['perawat3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmperawat4" id="sdmperawat4" value="<?= $data['perawat4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmperawat5" id="sdmperawat5" value="<?= $data['perawat5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmperawat6" id="sdmperawat6" value="<?= $data['perawat6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_perawat; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Bidan</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmbidan1" id="sdmbidan1" value="<?= $data['bidan1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmbidan2" id="sdmbidan2" value="<?= $data['bidan2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmbidan3" id="sdmbidan3" value="<?= $data['bidan3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmbidan4" id="sdmbidan4" value="<?= $data['bidan4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmbidan5" id="sdmbidan5" value="<?= $data['bidan5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmbidan6" id="sdmbidan6" value="<?= $data['bidan6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_bidan; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga promosi kesehatan dan ilmu perilaku</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpromosi1" id="sdmpromosi1" value="<?= $data['promosi1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpromosi2" id="sdmpromosi2" value="<?= $data['promosi2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpromosi3" id="sdmpromosi3" value="<?= $data['promosi3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpromosi4" id="sdmpromosi4" value="<?= $data['promosi4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpromosi5" id="sdmpromosi5" value="<?= $data['promosi5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpromosi6" id="sdmpromosi6" value="<?= $data['promosi6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_promosi; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga sanitasi lingkungan</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmsanitasi1" id="sdmsanitasi1" value="<?= $data['sanitasi1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmsanitasi2" id="sdmsanitasi2" value="<?= $data['sanitasi2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmsanitasi3" id="sdmsanitasi3" value="<?= $data['sanitasi3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmsanitasi4" id="sdmsanitasi4" value="<?= $data['sanitasi4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmsanitasi5" id="sdmsanitasi5" value="<?= $data['sanitasi5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmsanitasi6" id="sdmsanitasi6" value="<?= $data['sanitasi6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_sanitasi; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Nutrisionis</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmnutrisionis1" id="sdmnutrisionis1" value="<?= $data['nutrisionis1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmnutrisionis2" id="sdmnutrisionis2" value="<?= $data['nutrisionis2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmnutrisionis3" id="sdmnutrisionis3" value="<?= $data['nutrisionis3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmnutrisionis4" id="sdmnutrisionis4" value="<?= $data['nutrisionis4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmnutrisionis5" id="sdmnutrisionis5" value="<?= $data['nutrisionis5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmnutrisionis6" id="sdmnutrisionis6" value="<?= $data['nutrisionis6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_nutrisionis; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga Apoteker</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmapoteker1" id="sdmapoteker1" value="<?= $data['apoteker1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmapoteker2" id="sdmapoteker2" value="<?= $data['apoteker2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmapoteker3" id="sdmapoteker3" value="<?= $data['apoteker3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmapoteker4" id="sdmapoteker4" value="<?= $data['apoteker4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmapoteker5" id="sdmapoteker5" value="<?= $data['apoteker5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmapoteker6" id="sdmapoteker6" value="<?= $data['apoteker6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_apoteker; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga teknis kefarmasian</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkefarmasian1" id="sdmkefarmasian1" value="<?= $data['kefarmasian1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkefarmasian2" id="sdmkefarmasian2" value="<?= $data['kefarmasian2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkefarmasian3" id="sdmkefarmasian3" value="<?= $data['kefarmasian3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkefarmasian4" id="sdmkefarmasian4" value="<?= $data['kefarmasian4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkefarmasian5" id="sdmkefarmasian5" value="<?= $data['kefarmasian5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkefarmasian6" id="sdmkefarmasian6" value="<?= $data['kefarmasian6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_kefarmasian; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Ahli teknologi laboratorium medik</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmahli1" id="sdmahli1" value="<?= $data['ahli1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmahli2" id="sdmahli2" value="<?= $data['ahli2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmahli3" id="sdmahli3" value="<?= $data['ahli3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmahli4" id="sdmahli4" value="<?= $data['ahli4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmahli5" id="sdmahli5" value="<?= $data['ahli5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="P" name="sdmahli6" id="sdmahli6" value="<?= $data['ahli6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_ahli; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga sistem informasi kesehatan</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkesehatan1" id="sdmkesehatan1" value="<?= $data['kesehatan1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkesehatan2" id="sdmkesehatan2" value="<?= $data['kesehatan2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkesehatan3" id="sdmkesehatan3" value="<?= $data['kesehatan3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkesehatan4" id="sdmkesehatan4" value="<?= $data['kesehatan4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkesehatan5" id="sdmkesehatan5" value="<?= $data['kesehatan5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkesehatan6" id="sdmkesehatan6" value="<?= $data['kesehatan6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_kesehatan; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga administrasi keuangan</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkeuangan1" id="sdmkeuangan1" value="<?= $data['keuangan1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkeuangan2" id="sdmkeuangan2" value="<?= $data['keuangan2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkeuangan3" id="sdmkeuangan3" value="<?= $data['keuangan3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkeuangan4" id="sdmkeuangan4" value="<?= $data['keuangan4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkeuangan5" id="sdmkeuangan5" value="<?= $data['keuangan5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmkeuangan6" id="sdmkeuangan6" value="<?= $data['keuangan6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_keuangan; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Tenaga ketatausahaan</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtatausaha1" id="sdmtatausaha1" value="<?= $data['tatausaha1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtatausaha2" id="sdmtatausaha2" value="<?= $data['tatausaha2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtatausaha3" id="sdmtatausaha3" value="<?= $data['tatausaha3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtatausaha4" id="sdmtatausaha4" value="<?= $data['tatausaha4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtatausaha5" id="sdmtatausaha5" value="<?= $data['tatausaha5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtatausaha6" id="sdmtatausaha6" value="<?= $data['tatausaha6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_tatausaha; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>Pekarya</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpekarya1" id="sdmpekarya1" value="<?= $data['pekarya1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpekarya2" id="sdmpekarya2" value="<?= $data['pekarya2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpekarya3" id="sdmpekarya3" value="<?= $data['pekarya3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpekarya4" id="sdmpekarya4" value="<?= $data['pekarya4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpekarya5" id="sdmpekarya5" value="<?= $data['pekarya5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmpekarya5" id="sdmpekarya5" value="<?= $data['pekarya6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_pekarya; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>a. Tenaga Kesehatan Tradisional</b></label>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtradisional1" id="sdmtradisional1" value="<?= $data['tradisional1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtradisional2" id="sdmtradisional2" value="<?= $data['tradisional2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtradisional3" id="sdmtradisional3" value="<?= $data['tradisional3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtradisional4" id="sdmtradisional4" value="<?= $data['tradisional4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtradisional5" id="sdmtradisional5" value="<?= $data['tradisional5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtradisional6" id="sdmtradisional6 " value="<?= $data['tradisional6']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_tradisional; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1"><b>B. .......</b></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik1" id="sdmtitik1" value="<?= $data['titik1']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PNS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik2" id="sdmtitik2" value="<?= $data['titik2']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PPPK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik3" id="sdmtitik3" value="<?= $data['titik3']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">NUSANTARA SEHAT</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik4" id="sdmtitik4" value="<?= $data['titik4']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PTT DAERAH</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik5" id="sdmtitik5" value="<?= $data['titik5']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">LAIN-LAIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik6" id="sdmtiti6" value="<?= $data['titik6']; ?>" readonly>
              </div>
              <div class="col-md-2">
                <label for="exampleFormControlInput1">PENSIUN TAHUN DEPAN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sdmtitik7" id="sdmtitik7" value="<?= $data['titik7']; ?>" readonly>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlInput1">Total</label>
                <input type="text" value="<?= $total_titik; ?>" readonly> <br>
                <br>
                <br>
              </div>

              <div class="col-md-12">
                <label for="exampleFormControlInput1">JUMLAH KESELURUHAN :</label>
                <input type="text" value="<?= $total_semua; ?>" readonly>
              </div>
            </div>
          </div>
        </div>

      </section>
      <a class="btn float-right btn-danger" href="<?= base_url('SDM_Puskesmas/ubah') ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </form>
  </div>
</div>
</div>