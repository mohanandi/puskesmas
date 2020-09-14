<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">
<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Identitas Umum</strong> Puskesmas Percontohan</h2>
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
        <?php if ($this->session->flashdata('flash')) : ?>
          <?= $this->session->flashdata('flash'); ?>
        <?php endif; ?>
        <form style="height:350px; overflow-y:auto; padding:20px;">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nama Puskesmas</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['nama']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">No. Register</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_reg']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Pendirian</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['tgl_pendirian']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Alamat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['alamat']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kecamatan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['kecamatan']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['kab_kota']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Provinsi</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['provinsi']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">No. Telepon Puskesmas dan No Telepon Whatsapp</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_telp']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">No. Telepon Ruang Gadar</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_telp_gadar']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">No. Faksimile</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['no_faksimile']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Alamat email dan website</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?= $data['email']; ?>" readonly>
          </div>

        </form>

        <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
        <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

      </div>
    </div>
    <script src="<?= base_url('assets/') ?>js/tooltip.js"></script>

    <script src="<?= base_url('assets/') ?>js/para.js"></script>