<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">

<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">V</span>
        <h2 class="heading"><strong class="text-primary">Peningkatan Mutu</strong> Puskesmas</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        </head>

        <body>
          <a id="button"></a>
          <button type="button active" class="collapsible">Profil Puskesmas</button>
          <div class="content">
            <br>
            <img src="<?= base_url('assets/') ?>images/person_3.jpg" alt="Avatar" style="width:150px; border-radius: 50%; margin-left: 15%;">
            <br>
            <br>
            <p style="text-align: center;">Nama Puskesmas <span><strong>Puskesmas Jakarta</strong></span></p>
            <p style="text-align: center;">Lokasi<br> <span><strong>Pondok Labu, Jakarta Selatan No. 17</strong></span></p>
            <p style="text-align: center;">Tanggal Peresmian<br> <span><strong>20 Juni 2011</strong></span></p>
            <p style="text-align: center;">Status Akreditasi<br><span><strong>Paripurna</strong></span></p>
            <p style="text-align: center;">Motto<br> <span><strong>Jaya Selalu Puskesmas</strong></span></p>
          </div>
          <br>

          <p style="text-align: center;">Menu Cepat</p>
          <button type="button" class="collapsible">Penilaian Puskesmas</button>
          <div class="content">
            <br>
            <a href="#">
              <p style="text-align: center;">Pemenuhan Sumber Daya Puskesmas</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Perencanaan Puskesmas</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Penggerakan dan Pelaksanaan Sumber Daya Puskesmas</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Pengawasan, Pengendalian dan Penilaian Kinerja Puskesmas</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Peningkatan Mutu Puskesmas</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Pencegahan dan Pengendalian Infkesi dan Kesehatan Lingkungan</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menular Potensial KLB/Wabah</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Cakupan Indikator Program</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Upaya Inovasi</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Rekapitulasi Skor</p>
            </a>
            <hr>
            <a href="#">
              <p style="text-align: center;">Rencana Tidak Lanjut</p>
            </a>

          </div>
          <button type="button" class="collapsible">Menu 2</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <button type="button" class="collapsible">Menu 3</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
      </div>

      <div class="col-md-9">


        <form style="height:350px; overflow-y:auto; padding:20px;">

          <div class="form-group">
            <label for="exampleFormControlInput1">Terlaksananya pengukuran indikator mutu<a href="#" onclick="toggle_visibility('foo8');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo8" style="display:none; font-size:12px; margin-left:20px;">Melakukan pengukuran indikator mutu secara periodik sesuai dengan ketentuan yang ditetapkan oleh kepala Puskesmas. </p>
            <select class="form-control" name="peningkatan1" id="peningkatan1">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kegiatan audit internal dilaksanakan untuk memantau mutu dan kinerja puskesmas <a href="#" onclick="toggle_visibility('foo9');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo9" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan rencana audit (audit plan) <br> 2. Dilaksanakannya audit internal sesuai rencana<br> 3. Dilaksanakan tindak lanjut audit internal<br>4. Disusun laporan pelaksanaan audit internal </p>
            <select class="form-control" name="peningkatan2" id="peningkatan2">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pertemuan tim mutu (Rapat Tinjauan Manajemen), sebagai wadah untuk evaluasi minimal setiap semester <a href="#" onclick="toggle_visibility('foo10');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo10" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan jadwal RTM <br> 2. Dilaksanakan RTM<br>3. Dilakukan tindak lanjut RTM </p>
            <select class="form-control" name="peningkatan3" id="peningkatan3">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Melaksanakan PPS (Perencanaan Program Strategi) sebagai bentuk upaya perbaikan dan peningkatan mutu secara berkesinambungan <a href="#" onclick="toggle_visibility('foo11');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo11" style="display:none; font-size:12px; margin-left:20px;">1. Disusun PPS berdasarkan rekomendasi survey akreditasi <br> 2. Dilaksanakan tindak lanjut PPS yang sudah disusun <br> 3. Dilakukan evaluasi tindak lanjut PPS</p>
            <select class="form-control" name="peningkatan4" id="peningkatan4">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ada pelaporan Insiden Keselamatan Pasien <a href="#" onclick="toggle_visibility('foo12');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo12" style="display:none; font-size:12px; margin-left:20px;">1. Pelaporan harus tepat waktu <br> 2. Semua kasus dilaporkan </p>
            <select class="form-control" name="peningkatan5" id="peningkatan5">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Laporan tepat waktu tetapi kasus yang dilaporkan 80- < 100%, nilai 5 </option> <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
        </form>

        <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
        <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

      </div>

    </div>


  </div>
</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/') ?>js/tooltip.js"></script>
<script src="<?= base_url('assets/') ?>js/para.js"></script>