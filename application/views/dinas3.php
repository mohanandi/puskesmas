<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">

<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Pemenuhan Sumber Daya</strong> Puskesmas</h2>
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


        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>III. PENGGERAKKAN DAN PELAKSANAAN KEGIATAN PUSKESMAS </strong></label><br>
            <label for="exampleFormControlInput1">1. Pelaksanaan Kegiatan di Puskesmas dipandu dengan kebijakan, pe-doman dan prosedur yang jelas <a href="#" onclick="toggle_visibility('foo');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo" style="display:none; font-size:12px; margin-left:20px;">Tersedia dokumen-dokumen, untuk kegiatan-kegiatan yang diselenggarakan Puskesmas: <br> • Kebijakan, <br> • Manual Mutu<br>• RUK atau rencana strategis 5 Tahunan<br>• PTP (RUK dan RPK) tahunan<br>• Pedoman/Panduan<br>• KAK<br>• SOP<br>• Pengendalian Dokumen<br>• Rekaman hasil-hasil kegiatan<br>Ambil sampel 2 kegiatan untuk masing-masing:<br>• Terkait UKM dan UKP, lihat dokumen-dokumen di atas apakah lengkap dan isinya relevan. </p>


            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">2. Pelaksanaan kegiatan di Puskesmas mempunyai jadwal yang jelas dan disosialisasikan ke sasaran<a href="#" onclick="toggle_visibility('foo1');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo1" style="display:none; font-size:12px; margin-left:20px;">1. Tersedia jadwal pelaksanaan kegiatan Puskesmas<br> 2. Tersedia bukti sosialisasi jadwal, kepada:<br> • Lintas program dengan bukti adanya dokumen kesepakatan keterpaduan lintas program<br>• Lintas sektor terkait, dengan bukti adanya dokumen dukungan pemecahan masalah yang penyebab dan latar belakangnya diluar kendali Puskesmas<br>• Sasaran/masyarakat dengan bukti dokumen peranserta aktif masyarakat dalam mengatasi sebagian masalahnya secara mandiri. </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Pelaksanaan kegiatan mendapatkan dukungan dari lintas program, lintas sektor dan masyarakat sasaran di Puskesmas <a href="#" onclick="toggle_visibility('foo2');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo2" style="display:none; font-size:12px; margin-left:20px;">Tersedia dukungan dari sasaran di Puskesmas: <br> • Lintas program dengan bukti adanya kesepakatan keterpaduan lintas program <br> • Lintas sektor terkait, dengan bukti adanya dukungan pemecahan masalah yang penyebab dan latar belakangnya diluar kendali Puskesmas <br>• Masyarakat dengan bukti adanya peran serta aktif masyarakat dalam mengatasi sebagian masalahnya secara mandiri. </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">4. Pelaksanaan kegiatan di Puskesmas dimonitor oleh Kepala Puskesmas dan penanggung jawab terkait. <a href="#" onclick="toggle_visibility('foo3');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo3" style="display:none; font-size:12px; margin-left:20px;">1. Tersedia bukti pelaksanaan monitoring kegiatan Puskesmas oleh Kepala Puskesmas dan penanggung jawab terkait. <br> 2. Tersedia analisis hasil monitoring pelaksana-an kegiatan dan rumusan rencana tindak lanjutnya yang dilakukan oleh penanggung jawab terkait, yang dilihat dari laporan lokakarya mini</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">5. Terdapat upaya Puskesmas untuk memperoleh masukan dari pelanggan/sasaran mengenai kualitas dan kepuasan terhadap pelaksanaan kegiatan <a href="#" onclick="toggle_visibility('foo4');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo4" style="display:none; font-size:12px; margin-left:20px;">Ada upaya yang dilakukan oleh Puskesmas untuk mendapatkan umpan balik dari masyarakat tentang layanan yang diterimanya, yaitu: <br> 1. Secara pasif, melalui kotak saran, SMS Cen-ter, Hotline, Media Sosial, FB, dll <br> 2. Secara aktif melalui antara lain: survei kepu-asan pelanggan sesuai ketentuan yang berlaku (Permenpan RB nomor 14/2017, tentang Pedoman Penyusunan Survei Kepuasan Masyarakat Unit Penyelenggara Pelayanan Publik) atau secara periodik untuk menampung keluhan, masukan, harapan dan permintaan pengguna layanan, pelanggan/ sasaran/penerima manfaat terhadap kualitas dan kepuasan pelayanan.</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">6. Terdapat upaya perbaikan yang dilaksanakan oleh Puskesmas terhadap masalah pelayanan yg dianggap penting atau prioritas untuk diperbaiki berdasarkan masukan pengguna layanan/ pelanggan/dinas kesehatan kabupaten/kota<a href="#" onclick="toggle_visibility('foo5');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo5" style="display:none; font-size:12px; margin-left:20px;">1. Ada bukti nyata upaya perbaikan/ peningkatan/percepatan yang dilakukan oleh Puskesmas untuk memperbaiki/ meningkatkan kinerja/kualitas dan mengurangi risiko/potensi risiko akibat kesenjangan kinerja dan mutu pelayanan misalnya dengan memperbaiki sarana prasarana, perbaikan metode, perbaikan dokumen-dokumen acuan, perbaikan alur pelayanan, dan lain-lain mengacu pada instrumen akreditasi.<br> 2. Ada urutan prioritas perbaikan yang dilaku-kan relevan dengan urutan prioritas perma-salahan yang ada. <br> 3. Ada upaya Puskesmas untuk melakukan tindak lanjut dari umpan balik yang telah disampaikan oleh dinas kesehatan kabupaten/kota <br> 4. Upaya perbaikan yang dilakukan me-rupakan hasil pembahasan Tim manajemen Puskesmas & penanggung jawab program sebagai rumusan rencana tindak lanjut yang dilaporkan kepada kepala Puskesmas untuk ditelaah dan selanjutnya ditetapkan. <br>5. Pelaksanaan perbaikan/peningkatan mau-pun percepatan mutu pelayanan yang dilaksanakan Puskesmas dipantau oleh Tim Audit Internal. </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>IV. PENGAWASAN, PENGENDALIAN DAN PENILAIAN KINERJA PUSKESMAS</strong></label>
            <label for="exampleFormControlInput1">Dilakukan penilaian kinerja Puskesmas.<a href="#" onclick="toggle_visibility('foo6');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo6" style="display:none; font-size:12px; margin-left:20px;">1. Aspek penilaian kinerja Puskesmas terdiri dari hasil pencapaian pelaksanaan Pelayanan Kesehatan dan Manajemen Puskesmas <br> 2. Penilaian kinerja Puskesmas termasuk kategori baik bila tingkat pencapaian hasil pelaksanaan pelayanan kesehatan > 91% dan cakupan hasil manajemen ≥ 8,5 </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Bila aspek pelayanan kesehatan ≥ 91% dan cakupan hasil manajemen ≥ 8,5 nilai 10</option>
              <option value="2">Bila aspek pelayanan kesehatan < 91%, hasil manajemen ≥ 8,5 atau aspek pelayanan kesehatan ≥ 91% dan hasil manajemen < 8,5 nilai 5</option> <option value="3">Bila aspek pelayanan kesehatan < 91%, hasil manajemen < 8,5 nilai 0</option> </select> </div> <div class="form-group">
                    <label for="exampleFormControlInput1">Penilaian kinerja Puskesmas diverifikasi dan diberikan umpan balik (feedback) <a href="#" onclick="toggle_visibility('foo7');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
                    <br>
                    <p id="foo7" style="display:none; font-size:12px; margin-left:20px;">1. Dinas kesehatan kabupaten/kota melakukan verifikasi dan memberikan umpan balik terhadap penilaian kinerja Puskesmas dalam bentuk tertulis setiap akhir tahun berjalan atau pada awal tahun berikutnya</p>
                    <select class="form-control">
                      <option selected>Pilih ...</option>
                      <option value="1">Bila terdapat umpan balik secara tertulis dan tepat waktu, nilai 10</option>
                      <option value="2">Bila terdapat umpan balik secara tertulis tetapi tidak tepat waktu, nilai 5</option>
                      <option value="3">Bila tidak terdapat umpan balik secara tertulis, nilai 0</option>
                    </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>V. PENINGKATAN MUTU PUSKESMAS</strong></label><br>
            <label for="exampleFormControlInput1">1. Terlaksananya pengukuran indikator mutu<a href="#" onclick="toggle_visibility('foo8');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo8" style="display:none; font-size:12px; margin-left:20px;">Melakukan pengukuran indikator mutu secara periodik sesuai dengan ketentuan yang ditetapkan oleh kepala Puskesmas. </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Kegiatan audit internal dilaksanakan untuk memantau mutu dan kinerja puskesmas <a href="#" onclick="toggle_visibility('foo9');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo9" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan rencana audit (audit plan) <br> 2. Dilaksanakannya audit internal sesuai rencana<br> 3. Dilaksanakan tindak lanjut audit internal<br>4. Disusun laporan pelaksanaan audit internal </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Pertemuan tim mutu (Rapat Tinjauan Manajemen), sebagai wadah untuk evaluasi minimal setiap semester <a href="#" onclick="toggle_visibility('foo10');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo10" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan jadwal RTM <br> 2. Dilaksanakan RTM<br>3. Dilakukan tindak lanjut RTM </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">4. Melaksanakan PPS (Perencanaan Program Strategi) sebagai bentuk upaya perbaikan dan peningkatan mutu secara berkesinambungan <a href="#" onclick="toggle_visibility('foo11');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo11" style="display:none; font-size:12px; margin-left:20px;">1. Disusun PPS berdasarkan rekomendasi survey akreditasi <br> 2. Dilaksanakan tindak lanjut PPS yang sudah disusun <br> 3. Dilakukan evaluasi tindak lanjut PPS</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">5. Ada pelaporan Insiden Keselamatan Pasien <a href="#" onclick="toggle_visibility('foo12');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo12" style="display:none; font-size:12px; margin-left:20px;">1. Pelaporan harus tepat waktu <br> 2. Semua kasus dilaporkan </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Laporan tepat waktu tetapi kasus yang dilaporkan 80- < 100%, nilai 5 </option> <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VI. PENCEGAHAN DAN PENGENDALIAN INFEKSI dan KESEHATAN LINGKUNGAN</strong></label><br>
            <label for="exampleFormControlInput1"><strong>VI.A ELEMEN PENILAIAN PENERAPAN KEWASPADAAN STANDAR</strong></label><br>
            <label for="exampleFormControlInput1">1. Membangun budaya cuci tangan dan tersedia sarana prasarana cuci tangan <a href="#" onclick="toggle_visibility('foo13');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo13" style="display:none; font-size:12px; margin-left:20px;">Minta petugas simulasikan:Minta petugas simulasikan: <br> • Memenuhi standar <br> • Tidak memenuhi standar </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Menggunakan APD (sarung tangan, masker, sepatu boot, apron, kaca mata/google, dll) ketika melakukan tindakan/kegiatan tertentu<a href="#" onclick="toggle_visibility('foo14');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo14" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan terutama: <br> • di unit Laboratorium, <br> • Ruang Persalinan,<br>• Ruang Tindakan, <br>• Ruang Sterilisasi, <br> • Poli Gigi, <br>• Insersi IUD, dan lainnya</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <<option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
                <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
                <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Penerapan Dekontaminasi Alat Kesehatan <a href="#" onclick="toggle_visibility('foo15');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo15" style="display:none; font-size:12px; margin-left:20px;">Lihat proses sterilisasi alat</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">4. Pengendalian Kesehatan Lingkungan <a href="#" onclick="toggle_visibility('foo16');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo16" style="display:none; font-size:12px; margin-left:20px;">Lihat laporan Inspeksi Kesehatan Lingkungan (IKL) Puskesmas (dilakukan minimal 1 kali setahun) <br> Ada laporan IKL dan rekomendasi ditindaklanjuti, nilai 10. <br> Ada laporan IKL, tidak ditindaklanjuti, nilai 5. <br> Tidak ada laporan, nilai 0 </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">5. Pengelolaan Limbah Medis (termasuk dalam IKL) <a href="#" onclick="toggle_visibility('foo17');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo17" style="display:none; font-size:12px; margin-left:20px;">Lihat bagaimana pengelolaan limbah medis di Puskesmas <br> 1. Ada pemilahan limbah medis dan non medis. <br> 2. Limbah dimasukkan ke warna kantong yang sesuai.<br>3. Limbah padat tajam dimasukkan ke dalam safety box <br>4. Limbah ditempatkan di TPS B3 berijin <br>5. Diolah dengan pengolahan limbah B3 berizin dan atau kerja sama dengan pihak ketiga pengolah limbah B3 berizin<br>Memenuhi semua kriteria, nilai 10.<br>Memenuhi sebagian kriteria (1,3,5) nilai 5<br>Tidak memenuhi semua kriteria, nilai 0 </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">6. Perlindungan Kesehatan Petugas <br>a. Tatalaksana Pajanan<br>b. Tatalaksana Pajanan bahan infeksius ditempat kerja<br>c. Langkah Dasar Tatalaksana Klinis Profilaksis Pasca Pajanan (PPP) HIV Pada kasus kecelakaan kerja<a href="#" onclick="toggle_visibility('foo18');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo18" style="display:none; font-size:12px; margin-left:20px;">Lihat:<br>1. Ada/tidak ada kebijakan dan SOP dan lainnya <br> 2. Dilaksanakan atau tidak </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">7. Pemisahan Pasien <a href="#" onclick="toggle_visibility('foo19');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo19" style="display:none; font-size:12px; margin-left:20px;">Lihat:<br> 1. Ada Kebijakan, SOP, lainnya, untuk memisahkan pasien infeksius dengan pasien non infeksius, misal ruang TB, ruang isolasi untuk rawat inap<br> 2. Tidak ada kebijakan, SOP, lainnya </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">8. Etika batuk <a href="#" onclick="toggle_visibility('foo20');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo20" style="display:none; font-size:12px; margin-left:20px;">Edukasi etika batuk: <br>• Ada, kebijakan, SOP edukasi etika batuk<br> • Tidak ada</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">9. Praktik Menyuntik yang Aman <a href="#" onclick="toggle_visibility('foo21');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo21" style="display:none; font-size:12px; margin-left:20px;">SOP injeksi</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VI.B ELEMEN PENILAIAN PENERAPAN KEWASPADAAN BERDASARKAN TRANSMISI</strong></label><br>
            <label for="exampleFormControlInput1">1. Kewaspadaan Transmisi Melalui Kontak <a href="#" onclick="toggle_visibility('foo22');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo22" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Kewaspadaan Transmisi Melalui Droplet <a href="#" onclick="toggle_visibility('foo23');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo23" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Kewaspadaan Transmisi Melalui Udara (Air-Borne Precautions) <a href="#" onclick="toggle_visibility('foo24');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo24" style="display:none; font-size:12px; margin-left:20px;">Lihat pelaksanaan SOP </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">• DILAKSANAKAN SESUAI SOP (10)</option>
              <option value="2">• DILAKSANAKAN TIDAK SESUAI SOP (5)</option>
              <option value="3">• TIDAK ADA SOP (0) </option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VII. PELAKSANAAN SISTEM KEWASPADAAN DINI DAN RESPONS TERHADAP PENYAKIT MENULAR POTENSIAL KLB/ WABAH</strong></label><br>
            <label for="exampleFormControlInput1">1. Kelengkapan laporan SKDR <a href="#" onclick="toggle_visibility('foo25');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo25" style="display:none; font-size:12px; margin-left:20px;">Lihat kelengkapan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Kelengkapan ≥ 80%, nilai 10</option>
              <option value="2">Kelengkapan antara 61% - 79%, nilai 5</option>
              <option value="3">Kelengkapan ≤ 60%, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Ketepatan Laporan SKDR <a href="#" onclick="toggle_visibility('foo26');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo26" style="display:none; font-size:12px; margin-left:20px;">Lihat ketepatan laporan SKDR kumulatif dari minggu ke-1 sampai dengan minggu berjalan. Koordinasi dengan tenaga surveilans kabupaten/kota utk melihat ke sistem SKDR </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Kelengkapan ≥ 80%, nilai 10</option>
              <option value="2">Kelengkapan antara 61% - 79%, nilai 5</option>
              <option value="3">Kelengkapan ≤ 60%, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Analisa Trend Mingguan Penyakit Potensial KLB <a href="#" onclick="toggle_visibility('foo27');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo27" style="display:none; font-size:12px; margin-left:20px;">Grafik trend mingguan beberapa penyakit potensial KLB di Puskesmas </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Ada (diberi skor 10)</option>
              <option value="2">Tidak ada (diberi skor 0)</option>

            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VIII. CAKUPAN INDIKATOR PROGRAM</strong></label><br>
            <label for="exampleFormControlInput1"><strong>VIII.A. KIA</strong></label><br>
            <label for="exampleFormControlInput1">1. Ibu hamil mendapatkan pelayanan antenatal sesuai standar DO:<br> Pelayanan antenatal sesuai standar yaitu ibu hamil yang mendapatkan pelayanan paling sedikit 4 kali selama kehamilannya dengan distribusi waktu yaitu 1 kali pada trimester ke-1, 1 kali pada trimester ke-2, dan 2 kali pada trimester ke-3 <a href="#" onclick="toggle_visibility('foo28');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo28" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program pelayanan antenatal (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) <br>| Ya=25% Tidak=0 <br> c. Persentase ibu hamil yang mendapatkan pelayanan sesuai standar. (Jumlah ibu hamil yang mendapatkan pelayanan antenatal sesuai standar dibagi dengan jumlah ibu hamil yang ada di wilayah kerja Puskesmas, dikali 100%)<br> | % ibu hamil mendapatkan pelayanan antenatal sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Bayi baru lahir memperoleh pelayanan neonatal esensial DO:<br>Jumlah bayi baru baru lahir yang mendapatkan pelayanan neonatal esensial sesuai standar meliputi pada saat lahir (0 – 6 jam) dan setelah lahir (6 jam – 28 hari) terdiri dari:<br>● Saat Lahir (0-6 jam) <br> 1) Perawatan neonatal 0-30 detik<br> 2) Perawatan neonatal 30 detik – 90 menit <br>3) Perawatan neonatal 90 menit – 6 jam<br>● Setelah lahir (6 Jam – 28 hari)<br>1) Kunjungan Neonatal 1 (6 – 48 jam)<br>2) Kunjungan Neonatal 2 (3 hari – 7 hari)<br>3) Kunjungan Neonatal 3 (8 hari – 28 hari)
              <a href="#" onclick="toggle_visibility('foo29');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo29" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program pelayanan bayi baru lahir (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut)<br> | Ya=25% Tidak=0 <br> c. Persentase bayi baru lahir yang mendapatkan pelayanan neonatal esensial sesuai standar. (Jumlah bayi baru lahir yang mendapatkan pelayanan neonatal esensial sesuai standar dibagi dengan jumlah bayi baru lahir yang ada di wilayah kerja Puskesmas, dikali 100%) <br>| % bayi baru lahir mendapatkan pelayanan neonatal esensial sesuai standar dikali 50% </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Bayi baru lahir memperoleh pelayanan sesuai standar DO:<br>Bayi baru lahir yang memperoleh pelayanan sesuai standar meliputi:<br>1) Menjaga bayi tetap hangat<br>2) Mengisap lendir dari mulut dan hidung (jika perlu)<br>3) Keringkan<br>4) Memantau tanda bahaya<br>5) Klem, potong dan ikat tali pusat tanpa membubuhi apapun, kira-kira 2 menit* setelah lahir<br>6) Melakukan Inisiasi Menyusu Dini<br>7) Memberikan suntikan vitamin K1 1 mg itramuskular, di paha kiri anterolateral setelah Inisiasi Menyusu Dini<br>8) Memberikan salep mata antibiotika pada kedua mata<br>9) Melakukan pemeriksaan fisis<br>10) Memberi imunisasi Hepatitis B 0,5 mL intramuskular, di paha.
              <a href="#" onclick="toggle_visibility('foo30');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label><br>
            <p id="foo30" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program pelayanan bayi baru lahir (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)<br> | Ya=25% Tidak=0 <br> c. Persentase bayi baru lahir yang mendapatkan pelayanan sesuai standar. (Jumlah bayi baru lahir yang mendapatkan pelayanan sesuai standar dibagi dengan jumlah bayi baru lahir yang ada di wilayah kerja Puskesmas, dikali 100%) | % bayi baru lahir mendapatkan pelayanan neonatal esensial sesuai standar dikali 50% </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VIII.B. Imunisasi</strong></label><br>
            <label for="exampleFormControlInput1">1. Bayi mendapatkan imunisasi dasar lengkap DO:<br>• Jumlah bayi yang mendapatkan imunisasi dasar lengkap adalah jumlah bayi yang telah berusia 9-11 bulan di wilayah kerja Puskesmas dalam waktu 1 tahun telah mendapatkan imunisasi dasar lengkap meliputi:<br>1) Hb0 1 kali<br>2) BCG 1 kali<br>3) Polio tetes 4 kali<br>4) DPT-HB-HIB 3 kali<br>5) Campak 1 kali<br>6) Rubella 1 kali<br>• Perhitungan pencatatan pemberian imunisasi berdasarkan jenis antigen pada kohort bayi dan atau buku KIA di setiap tempat pelayanan imunisasi (Posyandu, Poskesdes, Pustu, Puskesmas, dll).
              <a href="#" onclick="toggle_visibility('foo31');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo31" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program imunisasi dasar lengkap (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0<br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) <br>| Ya=25% Tidak=0 <br> c. Persentase bayi yang mendapatkan imunisasi dasar lengkap. (Jumlah bayi yang telah mendapatkan imunisasi dasar lengkap dibagi Jumlah bayi berusia 9-11 bulan dalam 1 tahun dalam wilayah kerja Puskesmas, dikali 100%) | % bayi mendapatkan imunisasi dasar lengkap dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VIII.C. Gizi</strong></label><br>
            <label for="exampleFormControlInput1">1. Balita gizi buruk yang mendapatkan penanganan sesuai standar di Puskesmas DO:<br>Tata laksana anak balita dengan BB/TB< -3 SD dan atau dengan gejala klinis yang dirawat inap maupun rawat jalan di fasilitas pelayanan kesehatan atau masyarakat sesuai dengan standar Tata Laksana Gizi Buruk (TAGB) <a href="#" onclick="toggle_visibility('foo32');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo32" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program penanganan balita gizi buruk (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)<br>| Ya=25% Tidak=0 <br> c. Persentase balita gizi buruk yang mendapatkan penanganan sesuai standar. (Jumlah kasus balita gizi buruk yang mendapatkan penanganan sesuai standar di wilayah kerja Puskesmas dibagi jumlah kasus balita gizi buruk yang ditemukan dalam 1 tahun di wilayah kerja Puskesmas, dikali 100%) | % balita gizi buruk yang mendapatkan penanganan sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VIII.D. Pencegahan dan Pengendalian Penyakit</strong></label><br>
            <label for="exampleFormControlInput1">1. Orang terduga TBC mendapatkan pelayanan kesehatan sesuai standar DO:<br>• Orang terduga TBC adalah orang yang kontak erat dengan penderita TBC dan atau yang menunjukkan gejala batuk ≥ 2 minggu diserta dengan gejala lainnya.<br>• Pelayanan orang terduga TBC sesuai standar meliputi:<br>1) Pemeriksaan klinis meliputi pemeriksaan gejala dan tanda<br>2) Pemeriksaan penunjang adalah pemeriksaan dahak dan/atau bakteriologis dan/atau radiologis<br>3) Edukasi perilaku berisiko dan pencegahan penularan.
              <a href="#" onclick="toggle_visibility('foo33');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo33" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program TBC (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)<br> | Ya=25% Tidak=0<br> c. Persentase orang terduga TBC mendapatkan pelayanan kesehatan sesuai standar. (Jumlah orang terduga TBC yang dilakukan pemeriksaan penunjang dibagi jumlah orang terduga TBC dalam kurun waktu satu tahun di wilayah kerja Puskesmas, dikali 100%) | % orang terduga TBC mendapatkan pelayanan sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Orang dengan risiko terinfeksi HIV mendapatkan pelayanan kesehatan sesuai standar DO:<br>• Orang dengan risiko terinfeksi HIV adalah<br>1) Ibu hamil<br>2) Pasien TBC<br>3) Pasien Infeksi Menular Seksual (IMS)<br>4) Penjaja seks<br>5) Lelaki yang berhubungan seks dengan lelaki<br>6) Transgender/waria<br>7) Pengguna napza suntik<br>8) Warga binaan Pemasyarakatan<br>• Pelayanan kesehatan yang diberikan kepada orang dengan risiko terinfeksi HIV sesuai standar meliputi:<br>1) Edukasi perilaku berisiko dan pencegahan penularan<br>2) Skrining dengan pemeriksaan Tes Cepat HIV
              <a href="#" onclick="toggle_visibility('foo34');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo34" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program HIV (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)<br>| Ya=25% Tidak=0 <br> c. Persentase orang dengan risiko terinfeksi HIV mendapatkan pelayanan kesehatan sesuai standar (Jumlah orang dengan risiko terinfeksi HIV yang mendapatkan pelayanan sesuai standar dibagi jumlah orang dengan risiko terinfeksi HIV dalam 1 tahun di wilayah kerja Puskesmas, dikali 100%) | % orang dengan risiko terinfeksi HIV mendapatkan pelayanan kesehatan sesuai standar dikali 50% </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Ibu Hamil yang dilakukan pemeriksaan Hepatitis B DO:<br>Pemeriksaan Hepatitis B dilakukan kepada Ibu Hamil sesuai standar meliputi:<br>1) Edukasi pencegahan dan pengendalian penularan Hepatitis B<br>2) Deteksi dini dilakukan dengan pemeriksaan Tes Cepat HbSAg<br>3) Deteksi dini Hepatitis B minimal 1 kali selama kehamilan di fasilitas pelayanan kesehatan
              <a href="#" onclick="toggle_visibility('foo35');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo35" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program pemeriksaan Hepatitis B pada ibu hamil (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) | Ya=25% Tidak=0 <br> c. Persentase ibu hamil yang dilakukan pemeriksaan Hepatitis B. (Jumlah Ibu Hamil yang mendapatkan pemeriksaan Hepatitis B sesuai standar dibagi jumlah Ibu Hamil dalam 1 tahun di wilayah kerja Puskesmas, dikali 100%) | % ibu hamil yang dilakukan pemeriksaan Hepatitis B dikali 50% </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">4. Persentase ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar DO:<br>Pelayanan kesehatan pada ODGJ berat sesuai standar bagi psikotik akut dan Skizofrenia meliputi:<br>1) Pemeriksaan kesehatan jiwa meliputi pemeriksaan status mental dan wawancara<br>2) Edukasi kepatuhan minum obat<br>3) Rujukan jika diperlukan
              <a href="#" onclick="toggle_visibility('foo36');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo36" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program ODGJ Berat (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) | Ya=25% Tidak=0 <br> c. Persentase ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar. (Jumlah ODGJ berat di wilayah kerja kab/kota yang mendapatkan pelayanan kesehatan jiwa sesuai standar dalam kurun waktu satu tahun dibagi jumlah ODGJ berat dalam 1 tahun di wilayah kerja Puskesmas, dikali 100) | % ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">5. Orang usia ≥ 15 tahun, yang mendapatkan pelayanan terpadu (PANDU) di Puskesmas. DO:<br>• Skrining faktor resiko PTM adalah skrining yang dilakukan minimal 1 kali setahun meliputi:<br>- pengukuran TB, BB, Lingkar Perut<br>- pengukuran TD, Pemeriksaan gula darah, anamnesa perilaku beresiko (merokok)<br>- penggunaan CHARTA PREDIKSI PTM<br>• membina Posbindu di wilayah kerjanya<br>• Tindaklanjut hasil skrining kesehatan meliputi:<br>- Penanganan sesuai standard<br>- Konseling Upaya Berhenti Merokok (UBM)<br>- memberikan penyuluhan Kesehatan<br>- Melakukan rujukan ke Fasyankes jika diperlukan
              <a href="#" onclick="toggle_visibility('foo37');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo37" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program PANDU PTM (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) | Ya=25% Tidak=0 <br> c. Persentase orang usia ≥ 15 tahun, yang mendapatkan pelayanan terpadu (PANDU) di Puskesmas. (Jumlah orang usia ≥ 15 tahun yang mendapatkan pelayanan terpadu (PANDU) di Puskesmas dibagi jumlah orang usia ≥ 15 tahun di wilayah kerja Puskesmas, dikali 100%). | % ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">6. Wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS, DO:<br>• Jumlah wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS<br>• Tersedianya SDM kesehatan yang terlatih<br>• Tindaklanjut IVA positif dengan krioterapi di FKTP atau merujuk ke FKTP yang mempunyai krioterapi<br>• Rujukan ke FKRTL untuk kasus yang tidak dapat ditangani di FKTP<a href="#" onclick="toggle_visibility('foo38');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo38" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0<br> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) | Ya=25% Tidak=0<br> c. Persentase wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS. (Jumlah wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS dibagi jumlah wanita usia 30 – 50 tahun di wilayah kerja Puskesmas, dikali 100%. | % wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">7. Penderita DM usia 15 tahun ke atas yang mendapatkan pelayanan sesuai standar DO:<br>Pelayanan kesehatan DM sesuai standar meliputi:<br>1) Pengukuran gula darah minimal 1 kali sebulan di fasilitas pelayanan kesehatan<br>2) Edukasi perubahan gaya hidup dana tau mutrisi<br>3) Terapi farmakologi<br>4) Melakukan rujukan jika diperlukan.
              <a href="#" onclick="toggle_visibility('foo39');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo39" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program DM (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br>b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) | Ya=25% Tidak=0 <br> c. Persentase penderita DM usia 15 tahun ke atas yang mendapatkan pelayanan sesuai standar (Jumlah penderita DM usia ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar dibagi jumlah penderita DM usia ≥ 15 tahun dalam 1 tahun di wilayah kerja Puskesmas dikali 100%) | % penderita DM usia 15 tahun ke atas yang mendapatkan pelayanan sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">8. Persentase penderita Hipertensi ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar DO:<br>Pelayanan kesehatan hipertensi sesuai standar meliputi:<br>1) Pengukuran tekanan darah minimal 1 kali sebulan di fasilitas pelayanan kesehatan<br>2) Edukasi perubahan gaya hidup dan/atau kepatuhan minum obat<br>3) Terapi farmakologi
              <a href="#" onclick="toggle_visibility('foo40');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo40" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal program Hipertensi (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br>b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) | Ya=25% Tidak=0 <br> c. Persentase penderita Hipertensi ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar (Jumlah penderita hipertensi usia ≥ 15 tahun yang mendapakan pelayanan kesehatan sesuai standar dibagi jumlah penderita hipertensi dalam 1 tahun di wilayah kerja Puskesmas, dikali 100% | % penderita Hipertensi ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>VIII.E. Progam Indonesia Sehat dengan Pendekatan Keluarga (PIS-PK)</strong></label><br>
            <label for="exampleFormControlInput1">1. Keluarga yang telah dikunjungi dan intervensi awal DO:<br>Keluarga yang telah dikunjungi dan diintervensi awal adalah keluarga yang telah mendapatkan kunjungan Tim Pembina Keluarga yang memantau kondisi kesehatan keluarga berdasarkan 12 indikator keluarga sehat dan dilakukan intervensi awal.
              <a href="#" onclick="toggle_visibility('foo41');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo41" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal PIS-PK terkait kunjungan keluarga dan intervensi awal (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0<br>b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) | Ya=25% Tidak=0 <br> c. Persentase keluarga yang telah dikunjungi dan diintervensi awal (Jumlah keluarga yang telah dikunjungi dan diintervensi awal dibagi jumlah seluruh keluarga di wilayah kerja Puskesmas, dikali 100%) | % keluarga yang telah dikunjungi dan intervensi awal dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">2. Keluarga yang telah dikunjungi dan dilakukan intervensi lanjut DO:<br>Keluarga yang telah dikunjungi dan diintervensi awal direncanakan Puskesmas untuk dilakukan intervensi lanjut sesuai dengan permasalahan kesehatan yang ada di keluarga tersebut berdasarkan 12 indikator keluarga sehat.
              <a href="#" onclick="toggle_visibility('foo42');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo42" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal PIS-PK terkait intervensi lanjut (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0<br>b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) | Ya=25% Tidak=0<br> c. Persentase keluarga yang telah dikunjungi dan dilakukan intervensi lanjut (jumlah keluarga yang dilakukan intervensi lanjut dibagi jumlah seluruh keluarga yang direncanakan untuk dilakukan intervensi lanjut di wilayah kerja Puskesmas, dikali 100% Keluarga) | % keluarga yang telah dikunjungi dan dilakukan intervensi lanjut dikali 50%</p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">3. Peningkatan IKS di Puskesmas DO:<br>• Peningkatan IKS di Puskesmas merupakan selisih nilai IKS wilayah Puskesmas pada saat dilakukan monitoring dan evaluasi Puskesmas dengan nilai IKS pada awal tahun berjalan.<br>• Penilaian peningkatan IKS dilakukan jika cakupan kunjungan keluarga >50%.
              <a href="#" onclick="toggle_visibility('foo43');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo43" style="display:none; font-size:12px; margin-left:20px;">a. Tersedia regulasi internal PIS-PK terkait peningkatan IKS (SK, SOP, Pedoman, Panduan) | Ya=25% Tidak=0 <br>b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) | Ya=25% Tidak=0 <br> c. Persentase peningkatan IKS (Nilai IKS pada saat monitoring evaluasi Puskesmas dibagi dengan nilai IKS pada awal tahun berjalan, dikali 100%) | % peningkatan IKS dikali 50% </p>
            <select class="form-control">
              <option selected>Pilih ...</option>
              <option value="1">Tercapai ≥ 80% nilainya 10 </option>
              <option value="2">Tercapai 61% - 79% nilainya 5</option>
              <option value="3">Tercapai ≤ 60% nilainya 0</option>
            </select>
          </div><br>
          <div class="form-group">
            <div class="con">
              <label for="exampleFormControlInput1"><strong>IX. UPAYA INOVASI</strong></label><br>
              <label for="exampleFormControlInput1"><strong> PUSKESMAS MEMPUNYAI UPAYA INOVASI ?</strong></label><br>
              <label for="exampleFormControlInput1">Inovasi dikembangkan karena adanya kebutuhan:</label><br>
              <label for="exampleFormControlInput1">1. Karena adanya ketertinggalan dalam pencapaian target yang telah ditetapkan, untuk segera dikejar pencapaiannya, sehingga tidak terjadi kesenjangan di akhir tahun (dalam arti target kinerja dapat dicapai).</label><br>
              <label for="exampleFormControlInput1">2. Karena adanya kesempatan dan kekuatan untuk mencapai target lebih cepat atau di akhir tahun mencapai target lebih tinggi dari rencana semula</label><br><br>
              <label for="exampleFormControlInput1">Yang dirancang, berupa:</label><br>
              <label for="exampleFormControlInput1">1. Penetapan strategi, melalui mapping, hasil segmentasi sasaran, penetapan target sasaran, dan pemosisian dalam upaya merancang langkah-langkah kegiatan</label><br>
              <label for="exampleFormControlInput1">2. Menetapkan target kinerja dan waktu pencapaiannya, secara jelas</label><br>
              <label for="exampleFormControlInput1">3. Menyusun KAK Inovasi, mencakup rincian 6W2H1E</label><br><br>
              <label for="exampleFormControlInput1"><strong> SESUAI DENGAN KRITERIA UNTUK MERANCANG INOVASI, MAKA DALAM TABEL DIBAWAH ISIKAN</strong></label><br>
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
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="3">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="3">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="3">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="4">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="4">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="4">
                </div>
              </div>
            </div>
          </div><br>
          <div class="form-group">
            <div class="con">
              <label for="exampleFormControlInput1"><strong>X. REKAPITULASI SKOR</strong></label><br>
              <div class="row">
                <div class="col-md-4">
                  <label for="exampleFormControlInput1"><strong> No. </strong></label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1"><strong> Parameter </strong></label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1"><strong>Nilai Akhir </strong></label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">1.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PEMENUHAN SUMBER DAYA</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 80 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">2.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PERENCANAAN PUSKESMAS</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 290 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">3.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PELAKSANAAN KEGIATAN PUSKESMAS</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 60 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">4.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PENILAIAN KINERJA PUSKESMAS</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 20 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">5.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PENINGKATAN MUTU PUSKESMAS</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 50 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">6.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PENCEGAHAN DAN PENGENDALIAN INFEKSI</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 120 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">7.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">PELAKSANAAN SKDR TERHADAP PENYAKIT MENULAR POTENSIAL KLB/WABAH</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 30 dikali 100%</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">8.</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">CAKUPAN INDIKATOR PROGRAM</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1">Skor diperoleh dibagi 160 dikali 100%</label>
                </div>
              </div>
            </div><br>
            <div class="form-group">
              <label for="exampleFormControlInput1">Kesimpulan Nilai Akhir: (Lingkari salah satu penilaian)<br>1. Baik<br>2. Cukup<br>3. Kurang</label>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Interpretasi<br>1. Baik, bila setiap parameter bernilai ≥ 80%<br>2. Cukup, bila ada satu atau dua parameter bernilai 61% - 79% dan parameter yang lain bernilai ≥ 80%.<br>3. Kurang, bila tidak memenuhi kriteria 1 dan 2</label>
            </div><br>
            <div class="form-group">
              <label for="exampleFormControlInput1"><strong>XI. RENCANA TINDAK LANJUT</strong></label>
              <div class="con">
                <div class="row">
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1"><strong>NO.</strong></label>
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1"><strong>RENCANA TINDAK LANJUT</strong></label>
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1"><strong>TANGGAL PELAKSANAAN</strong></label>
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1">1.</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1">2.</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1">3.</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1">4.</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1">5.</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="DST">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="DST">
                  </div>
                </div>
              </div>
            </div><br>


            <a class="btn" href="table.html" style="background-color: #16b3ac; color: white;">Submit</a>

        </form>
      </div>
    </div>


  </div>
</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/') ?>js/tooltip.js"></script>
<script src="<?= base_url('assets/') ?>js/para.js"></script>