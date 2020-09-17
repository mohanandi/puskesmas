<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Perencanaan </strong> Puskesmas</h2>
      </div>
    </div>
    <?php if ($data) {
      $link = '';
      $button = 'Simpan Edit';
    } else {
      $link = base_url('Perencanaan_Puskesmas/tambah');
      $button = 'Simpan';
    }
    ?>
    <form style="padding:20px;" action="<?= $link; ?>" method="POST">
      <?php if ($kode_puskesmas) : ?>
        <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= $kode_puskesmas; ?>">
      <?php else : ?>
        <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= set_value('kode_puskesmas'); ?>">
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1"><strong>1. Perencanaan Puskesmas berdasarkan analisis masalah kesehatan untuk memenuhi kebutuhan & harapan masyarakat:</strong> </label><br>
        <label for="exampleFormControlInput1" style="font-size:14px;">KRITERIA:</label><br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>a. Puskesmas mempunyai Rencana Pelaksanaan Kegiatan (RPK) tahun berjalan. Tahun berjalan akan disebut sebagai tahun N.</strong></label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada dokumen RPK tahun berjalan (N), nilai 10 <br>
          2. Tidak ada dokumen perencanaan , nilai 0
        </p>
        <select class="form-control" name="perencanaan1_a" id="perencanaan1_a">
          <?php is_terisi($data['rpk_n'], set_value('perencanaan1_a')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('perencanaan1_a', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Dokumen RPK tahun N</strong></label><br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.1 Dilakukan penyesuaian Rencana Usulan Kegiatan (RUK) tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas (APBN, APBD, Dana Kapitasi, dana lain), jika terdapat ketidaksesuaian antara usulan anggaran dengan anggaran yang diterima oleh Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dilakukan penyesuaian kegiatan secara keseluruhan dari RUK tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas (APBN, APBD, Dana Kapitasi, dana lain), nilai 10 <br>
          2. Tidak semua kegiatan di RUK tahun N yang disesuaikan menjadi RPK tahun N, nilai 5 <br>
          3. Tidak dilakukan penyesuaian RUK tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas/ tidak ada kaitan antara RUK tahun N dengan RPK tahun N, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_b1" id="perencanaan1_b1">
          <?php is_terisi($data['ruk'], set_value('perencanaan1_b1')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_b1', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.2 RPK disusun secara rinci (Januari s.d Desember) berdasarkan usulan pengelola program dengan memperhatikan kondisi dan situasi lokal (contoh: bulan puasa, musim, dll) </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. RPK disusun secara rinci (Januari s.d Desember), berdasarkan usulan program dengan memperhatikan kondisi dan situasi lokal (contoh: bulan puasa, musim, dan lain-lain), nilai 10 <br>
          2. RPK disusun secara rinci (Januari s.d Desember), tidak berdasarkan usulan pengelola progra, nilai 5 <br>
          3. Tidak disusun RPK secara rinci (bulanan) , nilai 0
        </p>
        <select class="form-control" name="perencanaan1_b2" id="perencanaan1_b2">
          <?php is_terisi($data['rpk_rinci'], set_value('perencanaan1_b2')); ?>
          <option value="1">1 </option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_b2', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.3 RPK dan draft RKA tahun (N) diserahkan Puskesmas ke Dinkes Kab/Kota untuk mendapatkan persetujuan rincian anggaran RKA</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. RPK dan draft RKA tahun (N) diserahkan Puskesmas ke Dinkes Kab/Kota untuk mendapatkan persetujuan rincian anggaran RKA secara tepat waktu , nilai 10 <br>
          2. Hanya RPK, atau hanya draft RKA tahun N, yang diserahkan ke Dinkes Kab/Kota, nilai 5 <br>
          3. RPK dan draft RKA tahun (N) tidak diserahkan Puskesmas ke Dinkes Kab/Kota, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_b3" id="perencanaan1_b3">
          <?php is_terisi($data['draft_rka'], set_value('perencanaan1_b3')); ?>
          <option value="1">1</option>
          <option value="2">2 </option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan1_b3', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Puskesmas mempunyai RUK tahun mendatang. Tahun mendatang akan dilambangkan dengan N+1.</strong></label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Puskesmas menyusun dokumen RUK tahun mendatang (N+1) nilai 10 <br>
          2. Puskesmas tidak menyusun dokumen RUK tahun mendatang (N+1), nilai 0
        </p>
        <select class="form-control" name="perencanaan1_c" id="perencanaan1_c">
          <?php is_terisi($data['ruk_mendatang'], set_value('perencanaan1_c')); ?>
          <option value="1">1 </option>
          <option value="2">2</option>
        </select>
        <?= form_error('perencanaan1_c', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>d. Dokumen RUK</strong></label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.1 Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program,SMD,dll), dengan memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya.</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program, SMD, dll), dengan memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya, nilai 10 <br>
          2. Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program, SMD, dll), tetapi tidak memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya <br>
          3. Tidak ada hasil analisis masalah kesehatan masyarakat di Puskesmas, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d1" id="perencanaan1_d1">
          <?php is_terisi($data['ada_hasil'], set_value('perencanaan1_d1')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d1', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.2 Ada laporan Puskesmas dalam mendampingi dan membimbing masyarakat melakukan Survei Mawas Diri, yang meliputi:</label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada umpan balik hasil analisis masalah kesehatan kepada masyarakat, untuk menyadarkan masyarakat tentang adanya masalah di lingkungannya yang perlu diatasi, termasuk oleh masyarakat secara mandiri, dengan memperhatikan ketersediaan sumber daya dan potensi sumber daya di masyarakat yang dapat digerakkan</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada umpan balik ke masyarakat berupa hasil analisis masalah; masyarakat sadar pada masalah kesehatannya yang dibuktikan dengan adanya informasi penggerakkan sumber daya di masyarakat untuk mengatasi masalah kesehatan yang dibuktikan dengan dokumen fisik (pemberitahuan, laporan,foto, dll), nilai 10 <br>
          2. Ada umpan balik ke masyarakat berupa hasil analisis masalah, tetapi belum ada informasi penggerakkan sumber daya di masyarakat untuk mengatasi masalah kesehatan tetapi tidak dapat dibuktikan dengan dokumen fisik (pemberitahuan, laporan,foto, dll) , nilai 5 <br>
          3. Tidak ada umpan balik ke masyarakat, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d2a" id="perencanaan1_d2a">
          <?php is_terisi($data['umpan_balik'], set_value('perencanaan1_d2a')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d2a', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada tabulasi hasil wawancara yang dilaksanakan oleh kader kesehatan masyarakat pelaksana SMD kepada masyarakat lainnya, dengan menggunakan kuesioner yang disusun masyarakat, untuk mendapatkan umpan balik masyarakat tentang pelayanan Puskesmas dan hal yang perlu diperbaiki, termasuk harapan dan permintaan masyarakat dalam hidup sehat</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1.Ada tabulasi hasil wawancara, sesuai dengan kriteria, nilai 10 <br>
          2. Ada tabulasi hasil wawancara, tetapi tidak sesuai dengan kriteria menggunakan kuesioner yang disusun masyarakat dan atau tidak mendapat umpan balik masyarakat, nilai 5 <br>
          3. Tidak ada tabulasi hasil wawancara, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d2b" id="perencanaan1_d2b">
          <?php is_terisi($data['tabulasi_wawancara'], set_value('perencanaan1_d2b')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d2b', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada pembahasan hasil SMD dalam forum MMD, sebagai bahan yg akan diusulkan dlm Musrenbang Desa/ Kelurahan;</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada hasil SMD yang dibahas dalam forum MMD, dan hasil MMD yang membutuhkan pembiayaan diusulkan dalam Musrenbang Desa/Kelurahan, nilai 10 <br>
          2. Ada hasil SMD yang dibahas dalam forum MMD, tetapi hasil MMD yang membutuhkan pembiayaan tidak diusulkan dalam Musrenbang Desa/Kelurahan, nilai 5 <br>
          3. Hasil SMD tidak dibahas dalam forum MMD atau forum MMD tidak dilaksanakan, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d2c" id="perencanaan1_d2c">
          <?php is_terisi($data[' hasil_smd '], set_value('perencanaan1_d2c')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d2c', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.3 Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas dibuktikan dengan draft RUK</label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas dibuktikan dengan draft RUK, nilai 10 <br>
          2. Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas, tetapi tidak seluruhnya/penyelerasan tidak menyeluruh, nilai 5 <br>
          3. Tidak ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d3" id="perencanaan1_d3">
          <?php is_terisi($data['penyelarasan_mmd'], set_value('perencanaan1_d3')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d3', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.4 Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan yang dilaporkan ke Kepala Puskesmas</label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan yang dilaporkan ke Kepala Puskesmas, nilai 10 <br>
          2. Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan, tetapi belum dilaporkan ke Kepala Puskesmas , nilai 5 <br>
          3. Tidak ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d4" id="perencanaan1_d4">
          <?php is_terisi($data['berita_acara'], set_value('perencanaan1_d4')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d4', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.5 Laporan penanggung jawab daerah binaan dilaporkan ke kepala Puskesmas dan diteruskan ke penanggung jawab program untuk diolah dan dilakukan analisis. Hasil analisis dibahas dalam lokakarya mini bulanan rutin untuk keterpaduan lintas program dalam usulan kegiatan Puskesmas</label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada laporan penanggung jawab daerah binaan ke Kepala Puskesmas, dan diteruskan ke penanggung jawab program untuk diolah dan dianalisis. Hasil analisis dibahas dalam lokakarya mini bulanan rutin untuk keterpaduan lintas program dalam usulan kegiatan Puskesmas, nilai 10 <br>
          2. Ada laporan penanggung jawab daerah binaan ke Kepala Puskesmas, tetapi tidak diteruskan ke penanggung jawab program untuk diolah dan dianalisis dan/atau tidak dibahas dalam lokakarya mini bulanan, nilai 5 <br>
          3. Tidak ada laporan/kompilasi laporan, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d5" id="perencanaan1_d5">
          <?php is_terisi($data['laporan_penanggung'], set_value('perencanaan1_d5')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d5', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.6 Ada laporan lokakarya mini bulanan kedua, yang menjadi bahan masukan dalam melengkapi rancangan RUK Puskesmas tahun (N+1), dengan kegiatan yang terpadu lintas program, dan dijadikan bahan lokakarya mini lintas sektor pertama</label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada laporan lokakarya mini bulanan kedua, yang menjadi bahan masukan dalam melengkapi rancangan RUK Puskesmas tahun (N+1), dengan kegiatan yang terpadu Lintas Program , dan dijadikan bahan lokakarya mini lintas sektor, nilai 10 <br>
          2. Ada laporan lokakarya mini bulanan kedua, tidak menjadi bahan masukan dalam melengkapi RUK, tidak menggambarkan keterpaduan lintas program, dan atau tidak dijadikan bahan lokakarya mini lintas sektor, nilai 5 <br>
          3. Tidak ada laporan lokakarya mini bulanan kedua, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d6" id="perencanaan1_d6">
          <?php is_terisi($data['laporan_lokakarya'], set_value('perencanaan1_d6')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d6', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.7 Dalam lokakarya mini lintas sektor pertama, ada pembahasan dengan lintas sektor untuk mendapatkan dukungan penyelesaian masalah yang berada diluar kendali kesehatan/Puskesmas, dibuktikan dengan dokumen hasil rapat dan notulen.</label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada pembahasan dengan lintas sektor dan mendapatkan dukungan penyelesaian masalah , nilai 10 <br>
          2. Ada pembahasan dengan lintas sektor, tetapi tidak mendapatkan dukungan penyelesaian masalah , nilai 5 <br>
          3. Tidak ada pembahasan dengan lintas sektor, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d7" id="perencanaan1_d7">
          <?php is_terisi($data['lokakarya_mini'], set_value('perencanaan1_d7')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d7', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.8 Hasil lokakarya mini lintas sektor pertama dibahas dlm Musrenbang Kecamatan. </label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada hasil lokakarya mini lintas sektor pertama yang dibahas dalam Musrenbang Kecamatan, nilai 10 <br>
          2. Tidak ada hasil lokakarya mini lintas sektor pertama yang dibahas dalam Musrenbang Kecamatan, nilai 0
        </p>
        <br>

        <select class="form-control" name="perencanaan1_d8" id="perencanaan1_d8">
          <?php is_terisi($data['hasil_lokakarya'], set_value('perencanaan1_d8')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('perencanaan1_d8', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.9 Draft RUK tahun (N+1) hasil kesepakatan dalam Musrenbangmat diserahkan ke Dinkes Kab/Kota sebelum Musrenbangkab selengkapnya dengan Kerangka Acuan Kegiatan </label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Draft RUK tahun (N+1) diserahkan ke dinas kab/kota sebelum musrenbangkab, selengkapnya dengan kerangka acuan kegiatan, nilai 10 <br>
          2. Draft RUK diserahkan ke Dinkes Kab/kota, tetapi diserahkan setelah musrenbangkab dan atau diserahkan tanpa adanya Kerangka Acuan Kegiatan, nilai 5 <br>
          3. Draft RUK tidak diserahkan ke dinkes kab/kota, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d9" id="perencanaan1_d9">
          <?php is_terisi($data['draft_ruk'], set_value('perencanaan1_d9')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d9', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.10 Draft RUK Thn (N+1) disesuaikan dengan saran Dinkes Kab/kota dan hasil pembahasan Musrenbang Kab/kota, sebagai perbaikan draft RUK. </label>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada revisi draft RUK Tahun (N+ 1) setelah mendapat saran Dinkes Kab/kota dan hasil pembahasan Musrenbang Kab/Kota , nilai 10 <br>
          2. Tidak seluruhnya direvisi sekalipun ada saran dari Dinkes Kab/kota, nilai 5 <br>
          3. Tidak merevisi sama sekali/Tidak mendapatkan saran dari dinkes kab/kota, nilai 0
        </p>
        <select class="form-control" name="perencanaan1_d10" id="perencanaan1_d10">
          <?php is_terisi($data['ruk_dinkes'], set_value('perencanaan1_d10')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan1_d10', '<small class="text-danger pl-3">', '</small>'); ?>
        <hr>
        <label for="exampleFormControlInput1"><strong>2. Dalam dokumen RPK dan RUK secara garis besar mencakup kegiatan UKM, UKP, dan ditunjang dengan sumber daya yang optimal</strong></label>
        <label for="exampleFormControlInput1"><strong>a. Ada rangkaian kegiatan untuk menunjang upaya Puskesmas yang terdiri dari:</strong></label><br>
        <label for="exampleFormControlInput1">RANGKAIAN :</label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.1 Terpenuhinya sarana, prasarana, alat kesehatan, tenaga (sumber daya manusia), anggaran, sesuai standar </label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.2 Dimanfaatkannya sumber daya secara efisien untuk mencapai target kinerja & mutu Puskesmas</label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.3 Ada dukungan administrasi & manajemen untuk kelancaran kinerja Puskesmas </label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.4 Adanya kerjasama & koordinasi untuk keterpaduan/sinergitas kinerja UKP </label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.5 Adanya sistem monitoring evaluasi untuk pemenuhan input, proses, dan output Puskesmas</label>
        <span><strong> Penilaian</strong> </span>
        <br>
        <p style="font-size:12px;">
          1. Bila semua rangkaian (a.1 s.d a.5) terpenuhi dalam setiap pelaksanaan upaya Puskesmas, nilai 10 <br>
          2. Bila salah satu dari 5 rangkaian tidak terpenuhi, nilai 5 <br>
          3. Bila dalam 5 rangkaian tidak terpenuhi lebih dari 1 (satu), nilai 0
        </p>
        <select class="form-control" name="perencanaan2a" id="perencanaan2a">
          <?php is_terisi($data['rankaian_menunjang'], set_value('perencanaan2a')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan2a', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Ada upaya menuju tercapainya derajat kesehatan masyarakat di seluruh wilayah kerja yang ditandai dengan:</strong></label><br>
        <label for="exampleFormControlInput1">UNSUR :</label><br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.1 Puskesmas mengakses semua sasaran dengan pelayanan yang berkualitas</label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.2 Pencegahan resiko dan potensi resiko kesehatan masyarakat</label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.3 Adanya hasil analisis kesenjangan program </label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.4 Adanya keterpaduan layanan Puskesmas</label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.5 Adanya Pemberdayaan masyarakat menuju kemandirian hidup sehat, kemampuan dalam mengatasi sebagian masalah kesehatan masyarakat, menolong diri sendiri dalam batas kewenangan </label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.6 Adanya peningkatan kepuasan masyarakat </label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.7 adanya intervensi lanjut terhadap masalah kesehatan di masyarakat</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Bila tujuh (7) unsur (b.1 s.d b.7) terpenuhi dalam setiap pelaksanaan upaya Puskesmas, nilai 10 <br>
          2. Bila 1 atau 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas, nilai 5 <br>
          3. Bila lebih dari 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas, nilai 0
        </p>
        <select class="form-control" name="perencanaan2b" id="perencanaan2b">
          <?php is_terisi($data['upaya_tercapai'], set_value('perencanaan2b')); ?>
          <option value="1">1</option>
          <option value="2">2 </option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan2b', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Pelaksanaan UKP memenuhi semua unsur kegiatan sebagai berikut:</strong></label><br>
        <label for="exampleFormControlInput1">Unsur:</label><br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.1 peningkatan kinerja & mutu Yankes Individu</label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.2 peningkatan Keselamatan Pasien/Patient Safety, sekaligus pencegahan risiko</label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.3 pencegahan dan penanggulangan infeksi (PPI)</label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.4 Pemberdayaan individu untuk hidup sehat mandiri</label> <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.5 Peningkatan kepuasan pelanggan (customized)</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Bila lima unsur (c.1 s.d c.5) terpenuhi dalam setiap pelaksanaan upaya Puskesmas, nilai 10 <br>
          2. Bila 1 atau 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas , nilai 5 <br>
          3. Bila lebih dari 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas, nilai 0
        </p>
        <select class="form-control" name="perencanaan2c" id="perencanaan2c">
          <?php is_terisi($data['pelaksanaan_ukp'], set_value('perencanaan2c')); ?>
          <option value="1">1 </option>
          <option value="2">2</option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan2c', '<small class="text-danger pl-3">', '</small>'); ?>
        <hr>
        <label for="exampleFormControlInput1"><strong>3. Perencanaan Puskesmas terdokumentasikan dalam RUK dan RPK juga mencakup pengelolaan sumber daya</strong> </label><br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>a. Dibuat formasi berdasarkan ABK dan peta jabatan</strong></label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Dibuat formasi berdasarkan ABK dan peta jabatan, nilai 10 <br>
          2. Dibuat formasi, tetapi tidak berdasarkan ABK atau peta jabatan, nilai 5 <br>
          3. Tidak dibuat formasi, nilai 0
        </p>
        <select class="form-control" name="perencanaan3a" id="perencanaan3a">
          <?php is_terisi($data['formasi_abk'], set_value('perencanaan3a')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan3a', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Perencanaan Kebutuhan SDM Kesehatan sesuai dengan ABK dibuktikan dalam bentuk dokumen</strong></label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada Perencanaan Kebutuhan SDM Kesehatan sesuai dengan AB, nilai 10 <br>
          2. Ada Perencanaan kebutuhan, tidak sesuai dengan ABK, nilai 5 <br>
          3. Tidak ada rencana penambahan tenaga kesehatan, nilai 0
        </p>
        <select class="form-control" name="perencanaan3b" id="perencanaan3b">
          <?php is_terisi($data['sdm_abk'], set_value('perencanaan3b')); ?>
          <option value="1">1K</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan3b', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Ada upaya penambahan terkait sumber daya, terdiri dari:</strong></label>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.1 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan kebutuhan SDM Kesehatan yang telah disusun (baik usulan penambahan atau redistribusi tenaga)</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada tindak lanjut yang dilakukan sesuai rencana yang disusun, nilai 10 <br>
          2. Ada tindak lanjut yang dilakukan, tidak sesuai rencana yang disusun, nilai 5 <br>
          3. Tidak ada tindak lanjut, nilai 0
        </p>
        <select class="form-control" name="perencanaan3c_1" id="perencanaan3c_1">
          <?php is_terisi($data['tindak_lanjut'], set_value('perencanaan3c_1')); ?>
          <option value="1">1 </option>
          <option value="2">2</option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan3c_1', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.2 Perencanaan kebutuhan peralatan Puskesmas (alat kesehatan dan non alat kesehatan) sesuai persyaratan di PMK 43 tahun 2019, PMK 31 tahun 2018, dan PMK 54 tahun 2015 (jenis lengkap, Jumlah cukup & kondisi alat , jenis lengkap tetapi jumlah masih kurang, jenis & jumlah masih kurang, dsb) </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada perencanaan kebutuhan peralatan Puskesmas, sesuai persyaratan, nilai 10 <br>
          2. Ada perencanaan kebutuhan peralatan Puskesmas, tidak sesuai persyaratan, nilai 5 <br>
          3. Tidak ada perencanaan kebutuhan peralatan Puskesmas, nilai 0
        </p>
        <select class="form-control" name="perencanaan3c_2" id="perencanaan3c_2">
          <?php is_terisi($data['perencanaan_peralatan'], set_value('perencanaan3c_2')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan3c_2', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.3 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan peralatan Puskesmas yang disusun</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada dokumen tindak lanjut, nilai 10 <br>
          2. tidak ada dokumen tindak lanjut, nilai 0 <br>
        </p>
        <select class="form-control" name="perencanaan3c_3" id="perencanaan3c_3">
          <?php is_terisi($data['ada_tindak'], set_value('perencanaan3c_3')); ?>
          <option value="1"> </option>
          <option value="2">2</option>
        </select>
        <?= form_error('perencanaan3c_3', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.4 Perencanaan kebutuhan sarana prasarana Puskesmas sesuai persyaratan di PMK 43 tahun 2019, PMK 31 tahun 2018 (memuat penilaian kondisi sarana prasarana)</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Ada perencanaan kebutuhan sarana prasarana Puskesmas, sesuai persyaratan, nilai 10 <br>
          2. Ada perencanaan kebutuhan sarana prasarana Puskesmas, tidak sesuai persyaratan, nilai 5 <br>
          3. Tidak ada perencanaan kebutuhan sarana prasarana Puskesmas, nilai 0
        </p>
        <select class="form-control" name="perencanaan3c_4" id="perencanaan3c_4">
          <?php is_terisi($data['kondisi_sarana'], set_value('perencanaan3c_4')); ?>
          <option value="1">1 </option>
          <option value="2">2</option>
          <option value="3">3 </option>
        </select>
        <?= form_error('perencanaan3c_4', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.5 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan sarana prasarana Puskesmas sesuai rencana yang disusun</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. ada dokumen tindak lanjut , nilai 10 <br>
          2. tidak ada dokumen tindak lanjut, nilai 0 <br>
        </p>
        <select class="form-control " name="perencanaan3c_5" id="perencanaan3c_5">
          <?php is_terisi($data['dokumen_perencanaan'], set_value('perencanaan3c_5')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('perencanaan3c_5', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.6 Alokasi anggaran dapat membiayai semua kebutuhan Puskesmas</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. ≥ 80 % kebutuhan Puskesmas terpenuhi anggarannya, nilai 10 <br>
          2. 61% - 79 % kebutuhan Puskesmas terpenuhi anggarannya, nilai 5 <br>
          3. ≤ 60 % kebutuhan Puskesmas terpenuhi anggarannya, nilai 0
        </p>
        <select class="form-control" name="perencanaan3c_6" id="perencanaan3c_6">
          <?php is_terisi($data['alokasi_kebutuhan'], set_value('perencanaan3c_6')); ?>
          <option value="1">1 </option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <?= form_error('perencanaan3c_6', '<small class="text-danger pl-3">', '</small>'); ?>
        <br>
        <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.7 usulan pengadaan, perbaikan atau pengembangan sistem informasi kesehatan dan/atau teknologi tepat guna</label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. ada dokumen usulan pengadaan, perbaikan atau pengembangan perangkat sistem informasi kesehatan dan/atau teknologi tepat guna , nilai 10 <br>
          2. tidak ada dokumen usulan pengadaan, perbaikan atau pengembangan perangkat sistem informasi kesehatan dan/atau teknologi tepat guna, nilai 0
        </p>
        <select class="form-control" name="perencanaan3c_7" id="perencanaan3c_7">
          <?php is_terisi($data['usulan_pengadaan'], set_value('perencanaan3c_7')); ?>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
        <?= form_error('perencanaan3c_7', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; border-radius:5px;"><?= $button; ?></button>
    </form>
  </div>
</div>