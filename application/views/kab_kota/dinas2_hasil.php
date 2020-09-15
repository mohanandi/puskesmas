<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">
      <div class="col-md-9">
        <form style="height:350px; overflow-y:auto; padding:20px;">
		<div class="alert alert-success" role="alert">
							Data Berhasil dimasukan !
						</div>
							<div class="form-group">
							 <label for="exampleFormControlInput1">Nomor izin operasional Puskesmas</label>
							  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="" readonly>
							</div>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>1. Perencanaan Puskesmas berdasarkan analisis masalah kesehatan untuk memenuhi kebutuhan & harapan masyarakat:</strong> </label><br>
            <label for="exampleFormControlInput1" style="font-size:14px;">KRITERIA:</label><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>a. Puskesmas mempunyai Rencana Pelaksanaan Kegiatan (RPK) tahun berjalan. Tahun berjalan akan disebut sebagai tahun N.</strong></label>
            <select class="form-control" name="perencanaan1.a" id="perencanaan1.a" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada dokumen RPK tahun berjalan (N)</option>
              <option value="2">Tidak ada dokumen perencanaan </option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Dokumen RPK tahun N</strong></label><br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.1 Dilakukan penyesuaian Rencana Usulan Kegiatan (RUK) tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas (APBN, APBD, Dana Kapitasi, dana lain), jika terdapat ketidaksesuaian antara usulan anggaran dengan anggaran yang diterima oleh Puskesmas</label>
            <select class="form-control" name="perencanaan1.b1" id="perencanaan1.b1" disabled>
              <option selected>Pilih ...</option>
              <option value="1" title="Dilakukan penyesuaian kegiatan secara keseluruhan dari RUK tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas (APBN, APBD, Dana Kapitasi, dana lain)">Dilakukan penyesuaian kegiatan secara keseluruhan dari RUK tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas (APBN, APBD, Dana Kapitasi, dana lain)</option>
              <option value="2">Tidak semua kegiatan di RUK tahun N yang disesuaikan menjadi RPK tahun N</option>
              <option value="3" title="Tidak dilakukan penyesuaian RUK tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas/ tidak ada kaitan antara RUK tahun N dengan RPK tahun N">Tidak dilakukan penyesuaian RUK tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas/ tidak ada kaitan antara RUK tahun N dengan RPK tahun N</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.2 RPK disusun secara rinci (Januari s.d Desember) berdasarkan usulan pengelola program dengan memperhatikan kondisi dan situasi lokal (contoh: bulan puasa, musim, dll) </label>
            <select class="form-control" name="perencanaan1.b2" id="perencanaan1.b2" disabled>
              <option selected>Pilih ...</option>
              <option value="1" title="RPK disusun secara rinci (Januari s.d Desember), berdasarkan usulan program dengan memperhatikan kondisi dan situasi lokal (contoh: bulan puasa, musim, dan lain-lain)">RPK disusun secara rinci (Januari s.d Desember), berdasarkan usulan program dengan memperhatikan kondisi dan situasi lokal (contoh: bulan puasa, musim, dan lain-lain) </option>
              <option value="2">RPK disusun secara rinci (Januari s.d Desember), tidak berdasarkan usulan pengelola program</option>
              <option value="3">Tidak disusun RPK secara rinci (bulanan) </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.3 RPK dan draft RKA tahun (N) diserahkan Puskesmas ke Dinkes Kab/Kota untuk mendapatkan persetujuan rincian anggaran RKA</label>
            <select class="form-control" name="perencanaan1.b3" id="perencanaan1.b3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">RPK dan draft RKA tahun (N) diserahkan Puskesmas ke Dinkes Kab/Kota untuk mendapatkan persetujuan rincian anggaran RKA secara tepat waktu </option>
              <option value="2">Hanya RPK, atau hanya draft RKA tahun N, yang diserahkan ke Dinkes Kab/Kota </option>
              <option value="3">RPK dan draft RKA tahun (N) tidak diserahkan Puskesmas ke Dinkes Kab/Kota </option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Puskesmas mempunyai RUK tahun mendatang. Tahun mendatang akan dilambangkan dengan N+1.</strong></label>
            <select class="form-control" name="perencanaan1.c" id="perencanaan1.c" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Puskesmas menyusun dokumen RUK tahun mendatang (N+1) </option>
              <option value="2">Puskesmas tidak menyusun dokumen RUK tahun mendatang (N+1)</option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>d. Dokumen RUK</strong></label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.1 Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program,SMD,dll), dengan memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya.</label>
            <select class="form-control" name="perencanaan1.d1" id="perencanaan1.d1" disabled>
              <option selected>Pilih ...</option>
              <option value="1" title="Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program, SMD, dll), dengan memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya">Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program, SMD, dll), dengan memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya</option>
              <option value="2" title="Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program, SMD, dll), tetapi tidak memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya.">Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program, SMD, dll), tetapi tidak memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya.</option>
              <option value="3">Tidak ada hasil analisis masalah kesehatan masyarakat di Puskesmas</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.2 Ada laporan Puskesmas dalam mendampingi dan membimbing masyarakat melakukan Survei Mawas Diri, yang meliputi:</label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada umpan balik hasil analisis masalah kesehatan kepada masyarakat, untuk menyadarkan masyarakat tentang adanya masalah di lingkungannya yang perlu diatasi, termasuk oleh masyarakat secara mandiri, dengan memperhatikan ketersediaan sumber daya dan potensi sumber daya di masyarakat yang dapat digerakkan</label>
            <br>
            <select class="form-control" name="perencanaan1.d2a" id="perencanaan1.d2a" disabled>
              <option selected>Pilih ...</option>
              <option value="1" title="Ada umpan balik ke masyarakat berupa hasil analisis masalah; masyarakat sadar pada masalah kesehatannya yang dibuktikan dengan adanya informasi penggerakkan sumber daya di masyarakat untuk mengatasi masalah kesehatan yang dibuktikan dengan dokumen fisik (pemberitahuan, laporan,foto, dll)">Ada umpan balik ke masyarakat berupa hasil analisis masalah; masyarakat sadar pada masalah kesehatannya yang dibuktikan dengan adanya informasi penggerakkan sumber daya di masyarakat untuk mengatasi masalah kesehatan yang dibuktikan dengan dokumen fisik (pemberitahuan, laporan,foto, dll)</option>
              <option value="2" title="Ada umpan balik ke masyarakat berupa hasil analisis masalah, tetapi belum ada informasi penggerakkan sumber daya di masyarakat untuk mengatasi masalah kesehatan tetapi tidak dapat dibuktikan dengan dokumen fisik (pemberitahuan, laporan,foto, dll)">Ada umpan balik ke masyarakat berupa hasil analisis masalah, tetapi belum ada informasi penggerakkan sumber daya di masyarakat untuk mengatasi masalah kesehatan tetapi tidak dapat dibuktikan dengan dokumen fisik (pemberitahuan, laporan,foto, dll) </option>
              <option value="3">Tidak ada umpan balik ke masyarakat</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada tabulasi hasil wawancara yang dilaksanakan oleh kader kesehatan masyarakat pelaksana SMD kepada masyarakat lainnya, dengan menggunakan kuesioner yang disusun masyarakat, untuk mendapatkan umpan balik masyarakat tentang pelayanan Puskesmas dan hal yang perlu diperbaiki, termasuk harapan dan permintaan masyarakat dalam hidup sehat</label>
            <select class="form-control" name="perencanaan1.d2b" id="perencanaan1.d2b" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada tabulasi hasil wawancara, sesuai dengan kriteria</option>
              <option value="2">Ada tabulasi hasil wawancara, tetapi tidak sesuai dengan kriteria menggunakan kuesioner yang disusun masyarakat dan atau tidak mendapat umpan balik masyarakat</option>
              <option value="3">Tidak ada tabulasi hasil wawancara</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada pembahasan hasil SMD dalam forum MMD, sebagai bahan yg akan diusulkan dlm Musrenbang Desa/ Kelurahan;</label>
            <select class="form-control" name="perencanaan1.d2c" id="perencanaan1.d2c" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada hasil SMD yang dibahas dalam forum MMD, dan hasil MMD yang membutuhkan pembiayaan diusulkan dalam Musrenbang Desa/Kelurahan </option>
              <option value="2">Ada hasil SMD yang dibahas dalam forum MMD, tetapi hasil MMD yang membutuhkan pembiayaan tidak diusulkan dalam Musrenbang Desa/Kelurahan</option>
              <option value="3">Hasil SMD tidak dibahas dalam forum MMD atau forum MMD tidak dilaksanakan</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.3 Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas dibuktikan dengan draft RUK</label>
            <select class="form-control" name="perencanaan1.d3" id="perencanaan1.d3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas dibuktikan dengan draft RUK</option>
              <option value="2">Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas, tetapi tidak seluruhnya/penyelerasan tidak menyeluruh</option>
              <option value="3">Tidak ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.4 Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan yang dilaporkan ke Kepala Puskesmas</label>
            <select class="form-control" name="perencanaan1.d4" id="perencanaan1.d4" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan yang dilaporkan ke Kepala Puskesmas</option>
              <option value="2">Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan, tetapi belum dilaporkan ke Kepala Puskesmas </option>
              <option value="3">Tidak ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.5 Laporan penanggung jawab daerah binaan dilaporkan ke kepala Puskesmas dan diteruskan ke penanggung jawab program untuk diolah dan dilakukan analisis. Hasil analisis dibahas dalam lokakarya mini bulanan rutin untuk keterpaduan lintas program dalam usulan kegiatan Puskesmas</label>
            <select class="form-control" name="perencanaan1.d5" id="perencanaan1.d5" disabled>
              <option selected>Pilih ...</option>
              <option value="1" title="Ada laporan penanggung jawab daerah binaan ke Kepala Puskesmas, dan diteruskan ke penanggung jawab program untuk diolah dan dianalisis. Hasil analisis dibahas dalam lokakarya mini bulanan rutin untuk keterpaduan lintas program dalam usulan kegiatan Puskesmas ">Ada laporan penanggung jawab daerah binaan ke Kepala Puskesmas, dan diteruskan ke penanggung jawab program untuk diolah dan dianalisis. Hasil analisis dibahas dalam lokakarya mini bulanan rutin untuk keterpaduan lintas program dalam usulan kegiatan Puskesmas </option>
              <option value="2" title="Ada laporan penanggung jawab daerah binaan ke Kepala Puskesmas, tetapi tidak diteruskan ke penanggung jawab program untuk diolah dan dianalisis dan/atau tidak dibahas dalam lokakarya mini bulanan">Ada laporan penanggung jawab daerah binaan ke Kepala Puskesmas, tetapi tidak diteruskan ke penanggung jawab program untuk diolah dan dianalisis dan/atau tidak dibahas dalam lokakarya mini bulanan</option>
              <option value="3">Tidak ada laporan/kompilasi laporan</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.6 Ada laporan lokakarya mini bulanan kedua, yang menjadi bahan masukan dalam melengkapi rancangan RUK Puskesmas tahun (N+1), dengan kegiatan yang terpadu lintas program, dan dijadikan bahan lokakarya mini lintas sektor pertama</label>
            <select class="form-control" name="perencanaan1.d6" id="perencanaan1.d6" disabled>
              <option selected>Pilih ...</option>
              <option value="1" title="Ada laporan lokakarya mini bulanan kedua, yang menjadi bahan masukan dalam melengkapi rancangan RUK Puskesmas tahun (N+1), dengan kegiatan yang terpadu Lintas Program , dan dijadikan bahan lokakarya mini lintas sektor ">Ada laporan lokakarya mini bulanan kedua, yang menjadi bahan masukan dalam melengkapi rancangan RUK Puskesmas tahun (N+1), dengan kegiatan yang terpadu Lintas Program , dan dijadikan bahan lokakarya mini lintas sektor </option>
              <option value="2" title="Ada laporan lokakarya mini bulanan kedua, tidak menjadi bahan masukan dalam melengkapi RUK, tidak menggambarkan keterpaduan lintas program, dan atau tidak dijadikan bahan lokakarya mini lintas sektor">Ada laporan lokakarya mini bulanan kedua, tidak menjadi bahan masukan dalam melengkapi RUK, tidak menggambarkan keterpaduan lintas program, dan atau tidak dijadikan bahan lokakarya mini lintas sektor</option>
              <option value="3">Tidak ada laporan lokakarya mini bulanan kedua</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.7 Dalam lokakarya mini lintas sektor pertama, ada pembahasan dengan lintas sektor untuk mendapatkan dukungan penyelesaian masalah yang berada diluar kendali kesehatan/Puskesmas, dibuktikan dengan dokumen hasil rapat dan notulen.</label>
            <select class="form-control" name="perencanaan1.d7" id="perencanaan1.d7" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada pembahasan dengan lintas sektor dan mendapatkan dukungan penyelesaian masalah </option>
              <option value="2">Ada pembahasan dengan lintas sektor, tetapi tidak mendapatkan dukungan penyelesaian masalah </option>
              <option value="3">Tidak ada pembahasan dengan lintas sektor</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.8 Hasil lokakarya mini lintas sektor pertama dibahas dlm Musrenbang Kecamatan. </label>
            <select class="form-control" name="perencanaan1.d8" id="perencanaan1.d8" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada hasil lokakarya mini lintas sektor pertama yang dibahas dalam Musrenbang Kecamatan</option>
              <option value="2">Tidak ada hasil lokakarya mini lintas sektor pertama yang dibahas dalam Musrenbang Kecamatan</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.9 Draft RUK tahun (N+1) hasil kesepakatan dalam Musrenbangmat diserahkan ke Dinkes Kab/Kota sebelum Musrenbangkab selengkapnya dengan Kerangka Acuan Kegiatan </label>
            <select class="form-control" name="perencanaan1.d9" id="perencanaan1.d9" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Draft RUK tahun (N+1) diserahkan ke dinas kab/kota sebelum musrenbangkab, selengkapnya dengan kerangka acuan kegiatan </option>
              <option value="2">Draft RUK diserahkan ke Dinkes Kab/kota, tetapi diserahkan setelah musrenbangkab dan atau diserahkan tanpa adanya Kerangka Acuan Kegiatan </option>
              <option value="3">Draft RUK tidak diserahkan ke dinkes kab/kota </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.10 Draft RUK Thn (N+1) disesuaikan dengan saran Dinkes Kab/kota dan hasil pembahasan Musrenbang Kab/kota, sebagai perbaikan draft RUK. </label>
            <select class="form-control" name="perencanaan1.d10" id="perencanaan1.d10" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada revisi draft RUK Tahun (N+ 1) setelah mendapat saran Dinkes Kab/kota dan hasil pembahasan Musrenbang Kab/Kota </option>
              <option value="2">Tidak seluruhnya direvisi sekalipun ada saran dari Dinkes Kab/kota </option>
              <option value="3">Tidak merevisi sama sekali/Tidak mendapatkan saran dari dinkes kab/kota </option>
            </select>
            <hr>
            <label for="exampleFormControlInput1"><strong>2. Dalam dokumen RPK dan RUK secara garis besar mencakup kegiatan UKM, UKP, dan ditunjang dengan sumber daya yang optimal</strong></label>
            <label for="exampleFormControlInput1"><strong>a. Ada rangkaian kegiatan untuk menunjang upaya Puskesmas yang terdiri dari:</strong></label><br>
            <label for="exampleFormControlInput1">RANGKAIAN :</label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.1 Terpenuhinya sarana, prasarana, alat kesehatan, tenaga (sumber daya manusia), anggaran, sesuai standar </label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.2 Dimanfaatkannya sumber daya secara efisien untuk mencapai target kinerja & mutu Puskesmas</label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.3 Ada dukungan administrasi & manajemen untuk kelancaran kinerja Puskesmas </label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.4 Adanya kerjasama & koordinasi untuk keterpaduan/sinergitas kinerja UKP </label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">a.5 Adanya sistem monitoring evaluasi untuk pemenuhan input, proses, dan output Puskesmas</label>
            <select class="form-control" name="perencanaan2a" id="perencanaan2a" disabled> 
              <option selected>Pilih ...</option>
              <option value="1">Bila semua rangkaian (a.1 s.d a.5) terpenuhi dalam setiap pelaksanaan upaya Puskesmas</option>
              <option value="2">Bila salah satu dari 5 rangkaian tidak terpenuhi </option>
              <option value="3">Bila dalam 5 rangkaian tidak terpenuhi lebih dari 1 (satu) </option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Ada upaya menuju tercapainya derajat kesehatan masyarakat di seluruh wilayah kerja yang ditandai dengan:</strong></label><br>
            <label for="exampleFormControlInput1">UNSUR :</label><br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.1 Puskesmas mengakses semua sasaran dengan pelayanan yang berkualitas</label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.2 Pencegahan resiko dan potensi resiko kesehatan masyarakat</label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.3 Adanya hasil analisis kesenjangan program </label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.4 Adanya keterpaduan layanan Puskesmas</label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.5 Adanya Pemberdayaan masyarakat menuju kemandirian hidup sehat, kemampuan dalam mengatasi sebagian masalah kesehatan masyarakat, menolong diri sendiri dalam batas kewenangan </label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.6 Adanya peningkatan kepuasan masyarakat </label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.7 adanya intervensi lanjut terhadap masalah kesehatan di masyarakat</label>
            <select class="form-control" name="perencanaan2b" id="perencanaan2b" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Bila tujuh (7) unsur (b.1 s.d b.7) terpenuhi dalam setiap pelaksanaan upaya Puskesmas</option>
              <option value="2">Bila 1 atau 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas </option>
              <option value="3">Bila lebih dari 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas </option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Pelaksanaan UKP memenuhi semua unsur kegiatan sebagai berikut:</strong></label><br>
            <label for="exampleFormControlInput1">Unsur:</label><br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.1 peningkatan kinerja & mutu Yankes Individu</label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.2 peningkatan Keselamatan Pasien/Patient Safety, sekaligus pencegahan risiko</label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.3 pencegahan dan penanggulangan infeksi (PPI)</label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.4 Pemberdayaan individu untuk hidup sehat mandiri</label> <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.5 Peningkatan kepuasan pelanggan (customized)</label>
            <select class="form-control" name="perencanaan2c" id="perencanaan" 2c disabled>
              <option selected>Pilih ...</option>
              <option value="1">Bila lima unsur (c.1 s.d c.5) terpenuhi dalam setiap pelaksanaan upaya Puskesmas, </option>
              <option value="2">Bila 1 atau 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas </option>
              <option value="3">Bila lebih dari 2 unsur tidak terpenuhi dalam setiap pelaksanaan upaya Puskesmas </option>
            </select>
            <hr>
            <label for="exampleFormControlInput1"><strong>3. Perencanaan Puskesmas terdokumentasikan dalam RUK dan RPK juga mencakup pengelolaan sumber daya</strong> </label><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>a. Dibuat formasi berdasarkan ABK dan peta jabatan</strong></label>
            <select class="form-control" name="perencanaan3a" id="perencanaan3a" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Dibuat formasi berdasarkan ABK dan peta jabatan</option>
              <option value="2">Dibuat formasi, tetapi tidak berdasarkan ABK atau peta jabatan</option>
              <option value="3">Tidak dibuat formasi</option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Perencanaan Kebutuhan SDM Kesehatan sesuai dengan ABK dibuktikan dalam bentuk dokumen</strong></label>
            <select class="form-control" name="perencanaan3b" id="perencanaan3b" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada Perencanaan Kebutuhan SDM Kesehatan sesuai dengan ABK</option>
              <option value="2">Ada Perencanaan kebutuhan, tidak sesuai dengan ABK</option>
              <option value="3">Tidak ada rencana penambahan tenaga kesehatan</option>
            </select><br>
            <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Ada upaya penambahan terkait sumber daya, terdiri dari:</strong></label>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.1 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan kebutuhan SDM Kesehatan yang telah disusun (baik usulan penambahan atau redistribusi tenaga)</label>
            <select class="form-control" name="perencanaan3c.1" id="perencanaan3c.1" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada tindak lanjut yang dilakukan sesuai rencana yang disusun </option>
              <option value="2">Ada tindak lanjut yang dilakukan, tidak sesuai rencana yang disusun</option>
              <option value="3">Tidak ada tindak lanjut </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.2 Perencanaan kebutuhan peralatan Puskesmas (alat kesehatan dan non alat kesehatan) sesuai persyaratan di PMK 43 tahun 2019, PMK 31 tahun 2018, dan PMK 54 tahun 2015 (jenis lengkap, Jumlah cukup & kondisi alat , jenis lengkap tetapi jumlah masih kurang, jenis & jumlah masih kurang, dsb) </label>
            <select class="form-control" name="perencanaan3c.2" id="perencanaan3c.2" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada perencanaan kebutuhan peralatan Puskesmas, sesuai persyaratan</option>
              <option value="2">Ada perencanaan kebutuhan peralatan Puskesmas, tidak sesuai persyaratan</option>
              <option value="3">Tidak ada perencanaan kebutuhan peralatan Puskesmas </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.3 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan peralatan Puskesmas yang disusun</label>
            <select class="form-control" name="perencanaan3c.3" id="perencanaan3c.3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada dokumen tindak lanjut </option>
              <option value="2">tidak ada dokumen tindak lanjut</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.4 Perencanaan kebutuhan sarana prasarana Puskesmas sesuai persyaratan di PMK 43 tahun 2019, PMK 31 tahun 2018 (memuat penilaian kondisi sarana prasarana)</label>
            <select class="form-control" name="perencanaan3c.4" id="perencanaan3c.4" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Ada perencanaan kebutuhan sarana prasarana Puskesmas, sesuai persyaratan </option>
              <option value="2">Ada perencanaan kebutuhan sarana prasarana Puskesmas, tidak sesuai persyaratan</option>
              <option value="3">Tidak ada perencanaan kebutuhan sarana prasarana Puskesmas </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.5 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan sarana prasarana Puskesmas sesuai rencana yang disusun</label>
            <select class="form-control " name="perencanaan3c.5" id="perencanaan3c.5" disabled>
              <option selected>Pilih ...</option>
              <option value="1">ada dokumen tindak lanjut </option>
              <option value="2">tidak ada dokumen tindak lanjut </option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.6 Alokasi anggaran dapat membiayai semua kebutuhan Puskesmas</label>
            <select class="form-control" name="perencanaan3c.6" id="perencanaan3c.6" disabled>
              <option selected>Pilih ...</option>
              <option value="1">≥ 80 % kebutuhan Puskesmas terpenuhi anggarannya </option>
              <option value="2">61% - 79 % kebutuhan Puskesmas terpenuhi anggarannya</option>
              <option value="3">≤ 60 % kebutuhan Puskesmas terpenuhi anggarannya</option>
            </select>
            <br>
            <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.7 usulan pengadaan, perbaikan atau pengembangan sistem informasi kesehatan dan/atau teknologi tepat guna</label>
            <select class="form-control" name="perencanaan3c.7" id="perencanaan3c.7" disabled>
              <option selected>Pilih ...</option>
              <option value="1">ada dokumen usulan pengadaan, perbaikan atau pengembangan perangkat sistem informasi kesehatan dan/atau teknologi tepat guna </option>
              <option value="2">tidak ada dokumen usulan pengadaan, perbaikan atau pengembangan perangkat sistem informasi kesehatan dan/atau teknologi tepat guna</option>
            </select>
          </div>
        </form>
        <br>
        <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; border-radius:5px;">Masukan</a>
        <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; border-radius:5px;">Hapus</a>
      </div>
    </div>


  </div>
</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/') ?>js/tooltip.js"></script>