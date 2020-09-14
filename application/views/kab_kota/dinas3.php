<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">

<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">III</span>
        <h2 class="heading"><strong class="text-primary">Penggerakan dan Pelaksanaan Kegiatan</strong> Puskesmas</h2>
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
            <label for="exampleFormControlInput1"> Pelaksanaan Kegiatan di Puskesmas dipandu dengan kebijakan, pe-doman dan prosedur yang jelas <a href="#" onclick="toggle_visibility('foo');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo" style="display:none; font-size:12px; margin-left:20px;">Tersedia dokumen-dokumen, untuk kegiatan-kegiatan yang diselenggarakan Puskesmas: <br> • Kebijakan, <br> • Manual Mutu<br>• RUK atau rencana strategis 5 Tahunan<br>• PTP (RUK dan RPK) tahunan<br>• Pedoman/Panduan<br>• KAK<br>• SOP<br>• Pengendalian Dokumen<br>• Rekaman hasil-hasil kegiatan<br>Ambil sampel 2 kegiatan untuk masing-masing:<br>• Terkait UKM dan UKP, lihat dokumen-dokumen di atas apakah lengkap dan isinya relevan. </p>


            <select class="form-control" name="penggerakkan1" id="penggerakkan1">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan kegiatan di Puskesmas mempunyai jadwal yang jelas dan disosialisasikan ke sasaran<a href="#" onclick="toggle_visibility('foo1');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo1" style="display:none; font-size:12px; margin-left:20px;">1. Tersedia jadwal pelaksanaan kegiatan Puskesmas<br> 2. Tersedia bukti sosialisasi jadwal, kepada:<br> • Lintas program dengan bukti adanya dokumen kesepakatan keterpaduan lintas program<br>• Lintas sektor terkait, dengan bukti adanya dokumen dukungan pemecahan masalah yang penyebab dan latar belakangnya diluar kendali Puskesmas<br>• Sasaran/masyarakat dengan bukti dokumen peranserta aktif masyarakat dalam mengatasi sebagian masalahnya secara mandiri. </p>
            <select class="form-control" name="penggerakkan2" id="penggerakkan2">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan kegiatan mendapatkan dukungan dari lintas program, lintas sektor dan masyarakat sasaran di Puskesmas <a href="#" onclick="toggle_visibility('foo2');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo2" style="display:none; font-size:12px; margin-left:20px;">Tersedia dukungan dari sasaran di Puskesmas: <br> • Lintas program dengan bukti adanya kesepakatan keterpaduan lintas program <br> • Lintas sektor terkait, dengan bukti adanya dukungan pemecahan masalah yang penyebab dan latar belakangnya diluar kendali Puskesmas <br>• Masyarakat dengan bukti adanya peran serta aktif masyarakat dalam mengatasi sebagian masalahnya secara mandiri. </p>
            <select class="form-control" name="penggerakkan3" id="penggerakkan3">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan kegiatan di Puskesmas dimonitor oleh Kepala Puskesmas dan penanggung jawab terkait. <a href="#" onclick="toggle_visibility('foo3');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo3" style="display:none; font-size:12px; margin-left:20px;">1. Tersedia bukti pelaksanaan monitoring kegiatan Puskesmas oleh Kepala Puskesmas dan penanggung jawab terkait. <br> 2. Tersedia analisis hasil monitoring pelaksana-an kegiatan dan rumusan rencana tindak lanjutnya yang dilakukan oleh penanggung jawab terkait, yang dilihat dari laporan lokakarya mini</p>
            <select class="form-control" name="penggerakkan4" id="penggerakkan4">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Terdapat upaya Puskesmas untuk memperoleh masukan dari pelanggan/sasaran mengenai kualitas dan kepuasan terhadap pelaksanaan kegiatan <a href="#" onclick="toggle_visibility('foo4');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo4" style="display:none; font-size:12px; margin-left:20px;">Ada upaya yang dilakukan oleh Puskesmas untuk mendapatkan umpan balik dari masyarakat tentang layanan yang diterimanya, yaitu: <br> 1. Secara pasif, melalui kotak saran, SMS Cen-ter, Hotline, Media Sosial, FB, dll <br> 2. Secara aktif melalui antara lain: survei kepu-asan pelanggan sesuai ketentuan yang berlaku (Permenpan RB nomor 14/2017, tentang Pedoman Penyusunan Survei Kepuasan Masyarakat Unit Penyelenggara Pelayanan Publik) atau secara periodik untuk menampung keluhan, masukan, harapan dan permintaan pengguna layanan, pelanggan/ sasaran/penerima manfaat terhadap kualitas dan kepuasan pelayanan.</p>
            <select class="form-control" name="penggerakkan5" id="penggerakkan5">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Terdapat upaya perbaikan yang dilaksanakan oleh Puskesmas terhadap masalah pelayanan yg dianggap penting atau prioritas untuk diperbaiki berdasarkan masukan pengguna layanan/ pelanggan/dinas kesehatan kabupaten/kota<a href="#" onclick="toggle_visibility('foo5');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo5" style="display:none; font-size:12px; margin-left:20px;">1. Ada bukti nyata upaya perbaikan/ peningkatan/percepatan yang dilakukan oleh Puskesmas untuk memperbaiki/ meningkatkan kinerja/kualitas dan mengurangi risiko/potensi risiko akibat kesenjangan kinerja dan mutu pelayanan misalnya dengan memperbaiki sarana prasarana, perbaikan metode, perbaikan dokumen-dokumen acuan, perbaikan alur pelayanan, dan lain-lain mengacu pada instrumen akreditasi.<br> 2. Ada urutan prioritas perbaikan yang dilaku-kan relevan dengan urutan prioritas perma-salahan yang ada. <br> 3. Ada upaya Puskesmas untuk melakukan tindak lanjut dari umpan balik yang telah disampaikan oleh dinas kesehatan kabupaten/kota <br> 4. Upaya perbaikan yang dilakukan me-rupakan hasil pembahasan Tim manajemen Puskesmas & penanggung jawab program sebagai rumusan rencana tindak lanjut yang dilaporkan kepada kepala Puskesmas untuk ditelaah dan selanjutnya ditetapkan. <br>5. Pelaksanaan perbaikan/peningkatan mau-pun percepatan mutu pelayanan yang dilaksanakan Puskesmas dipantau oleh Tim Audit Internal. </p>
            <select class="form-control" name="penggerakkan6" id="penggerakkan6">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
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