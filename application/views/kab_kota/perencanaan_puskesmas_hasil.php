<div class="col-md-9">
  <form style="height:350px; overflow-y:auto; padding:20px;">
    <div class="alert alert-success" role="alert">
      Data Berhasil dimasukan !
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>1. Perencanaan Puskesmas berdasarkan analisis masalah kesehatan untuk memenuhi kebutuhan & harapan masyarakat:</strong> </label><br>
      <label for="exampleFormControlInput1" style="font-size:14px;">KRITERIA:</label><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>a. Puskesmas mempunyai Rencana Pelaksanaan Kegiatan (RPK) tahun berjalan. Tahun berjalan akan disebut sebagai tahun N.</strong></label>
      <select class="form-control" name="perencanaan1_a" id="perencanaan1_a" disabled>
        <option value="<?= $data['rpk_n']; ?>" selected><?= $data['rpk_n']; ?></option>
      </select><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Dokumen RPK tahun N</strong></label><br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.1 Dilakukan penyesuaian Rencana Usulan Kegiatan (RUK) tahun N menjadi RPK tahun N berdasarkan ketersediaan sumber daya yang dialokasikan untuk Puskesmas (APBN, APBD, Dana Kapitasi, dana lain), jika terdapat ketidaksesuaian antara usulan anggaran dengan anggaran yang diterima oleh Puskesmas</label>
      <select class="form-control" name="perencanaan1_b1" id="perencanaan1_b1" disabled>
        <option value="<?= $data['ruk']; ?>" selected><?= $data['ruk']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.2 RPK disusun secara rinci (Januari s.d Desember) berdasarkan usulan pengelola program dengan memperhatikan kondisi dan situasi lokal (contoh: bulan puasa, musim, dll) </label>
      <select class="form-control" name="perencanaan1_b2" id="perencanaan1_b2" disabled>
        <option value="<?= $data['rpk_rinci']; ?>" selected><?= $data['rpk_rinci']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">b.3 RPK dan draft RKA tahun (N) diserahkan Puskesmas ke Dinkes Kab/Kota untuk mendapatkan persetujuan rincian anggaran RKA</label>
      <select class="form-control" name="perencanaan1_b3" id="perencanaan1_b3" disabled>
        <option value="<?= $data['draft_rka']; ?>" selected><?= $data['draft_rka']; ?></option>
      </select><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Puskesmas mempunyai RUK tahun mendatang. Tahun mendatang akan dilambangkan dengan N+1.</strong></label>
      <select class="form-control" name="perencanaan1_c" id="perencanaan1_c" disabled>
        <option value="<?= $data['ruk_mendatang']; ?>" selected><?= $data['ruk_mendatang']; ?></option>
      </select><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>d. Dokumen RUK</strong></label>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.1 Ada hasil analisis masalah kesehatan masyarakat dari data Puskesmas (profil, Program Indonesia Sehat dengan Pendekatan Keluarga, pencapaian program,SMD,dll), dengan memperhatikan hasil Penilaian Kinerja Puskesmas tahun sebelumnya.</label>
      <select class="form-control" name="perencanaan1_d1" id="perencanaan1_d1" disabled>
        <option value="<?= $data['ada_hasil']; ?>" selected><?= $data['ada_hasil']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.2 Ada laporan Puskesmas dalam mendampingi dan membimbing masyarakat melakukan Survei Mawas Diri, yang meliputi:</label>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada umpan balik hasil analisis masalah kesehatan kepada masyarakat, untuk menyadarkan masyarakat tentang adanya masalah di lingkungannya yang perlu diatasi, termasuk oleh masyarakat secara mandiri, dengan memperhatikan ketersediaan sumber daya dan potensi sumber daya di masyarakat yang dapat digerakkan</label>
      <br>
      <select class="form-control" name="perencanaan1_d2a" id="perencanaan1_d2a" disabled>
        <option value="<?= $data['umpan_balik']; ?>" selected><?= $data['umpan_balik']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada tabulasi hasil wawancara yang dilaksanakan oleh kader kesehatan masyarakat pelaksana SMD kepada masyarakat lainnya, dengan menggunakan kuesioner yang disusun masyarakat, untuk mendapatkan umpan balik masyarakat tentang pelayanan Puskesmas dan hal yang perlu diperbaiki, termasuk harapan dan permintaan masyarakat dalam hidup sehat</label>
      <select class="form-control" name="perencanaan1_d2b" id="perencanaan1_d2b" disabled>
        <option value="<?= $data['tabulasi_wawancara']; ?>" selected><?= $data['tabulasi_wawancara']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:12px; text-align:justify;">- Ada pembahasan hasil SMD dalam forum MMD, sebagai bahan yg akan diusulkan dlm Musrenbang Desa/ Kelurahan;</label>
      <select class="form-control" name="perencanaan1_d2c" id="perencanaan1_d2c" disabled>
        <option value="<?= $data['hasil_smd']; ?>" selected><?= $data['hasil_smd']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.3 Ada penyelarasan antara hasil MMD dengan perencanaan Puskesmas dibuktikan dengan draft RUK</label>
      <select class="form-control" name="perencanaan1_d3" id="perencanaan1_d3" disabled>
        <option value="<?= $data['penyelarasan_mmd']; ?>" selected><?= $data['penyelarasan_mmd']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.4 Ada Berita Acara/Laporan hasil Musrenbang Desa/Kelurahan yang dilaporkan ke Kepala Puskesmas</label>
      <select class="form-control" name="perencanaan1_d4" id="perencanaan1_d4" disabled>
        <option value="<?= $data['berita_acara']; ?>" selected><?= $data['berita_acara']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.5 Laporan penanggung jawab daerah binaan dilaporkan ke kepala Puskesmas dan diteruskan ke penanggung jawab program untuk diolah dan dilakukan analisis. Hasil analisis dibahas dalam lokakarya mini bulanan rutin untuk keterpaduan lintas program dalam usulan kegiatan Puskesmas</label>
      <select class="form-control" name="perencanaan1_d5" id="perencanaan1_d5" disabled>
        <option value="<?= $data['laporan_penanggung']; ?>" selected><?= $data['laporan_penanggung']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.6 Ada laporan lokakarya mini bulanan kedua, yang menjadi bahan masukan dalam melengkapi rancangan RUK Puskesmas tahun (N+1), dengan kegiatan yang terpadu lintas program, dan dijadikan bahan lokakarya mini lintas sektor pertama</label>
      <select class="form-control" name="perencanaan1_d6" id="perencanaan1_d6" disabled>
        <option value="<?= $data['laporan_lokakarya']; ?>" selected><?= $data['laporan_lokakarya']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.7 Dalam lokakarya mini lintas sektor pertama, ada pembahasan dengan lintas sektor untuk mendapatkan dukungan penyelesaian masalah yang berada diluar kendali kesehatan/Puskesmas, dibuktikan dengan dokumen hasil rapat dan notulen.</label>
      <select class="form-control" name="perencanaan1_d7" id="perencanaan1_d7" disabled>
        <option value="<?= $data['lokakarya_mini']; ?>" selected><?= $data['lokakarya_mini']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.8 Hasil lokakarya mini lintas sektor pertama dibahas dlm Musrenbang Kecamatan. </label>
      <select class="form-control" name="perencanaan1_d8" id="perencanaan1_d8" disabled>
        <option value="<?= $data['hasil_lokakarya']; ?>" selected><?= $data['hasil_lokakarya']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.9 Draft RUK tahun (N+1) hasil kesepakatan dalam Musrenbangmat diserahkan ke Dinkes Kab/Kota sebelum Musrenbangkab selengkapnya dengan Kerangka Acuan Kegiatan </label>
      <select class="form-control" name="perencanaan1_d9" id="perencanaan1_d9" disabled>
        <option value="<?= $data['draft_ruk']; ?>" selected><?= $data['draft_ruk']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">d.10 Draft RUK Thn (N+1) disesuaikan dengan saran Dinkes Kab/kota dan hasil pembahasan Musrenbang Kab/kota, sebagai perbaikan draft RUK. </label>
      <select class="form-control" name="perencanaan1_d10" id="perencanaan1_d10" disabled>
        <option value="<?= $data['ruk_dinkes']; ?>" selected><?= $data['ruk_dinkes']; ?></option>
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
        <option value="<?= $data['rankaian_menunjang']; ?>" selected><?= $data['rankaian_menunjang']; ?></option>
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
        <option value="<?= $data['upaya_tercapai']; ?>" selected><?= $data['upaya_tercapai']; ?></option>
      </select><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Pelaksanaan UKP memenuhi semua unsur kegiatan sebagai berikut:</strong></label><br>
      <label for="exampleFormControlInput1">Unsur:</label><br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.1 peningkatan kinerja & mutu Yankes Individu</label>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.2 peningkatan Keselamatan Pasien/Patient Safety, sekaligus pencegahan risiko</label>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.3 pencegahan dan penanggulangan infeksi (PPI)</label> <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.4 Pemberdayaan individu untuk hidup sehat mandiri</label> <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.5 Peningkatan kepuasan pelanggan (customized)</label>
      <select class="form-control" name="perencanaan2c" id="perencanaan" 2c disabled>
        <option value="<?= $data['pelaksanaan_ukp']; ?>" selected><?= $data['pelaksanaan_ukp']; ?></option>
      </select>
      <hr>
      <label for="exampleFormControlInput1"><strong>3. Perencanaan Puskesmas terdokumentasikan dalam RUK dan RPK juga mencakup pengelolaan sumber daya</strong> </label><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>a. Dibuat formasi berdasarkan ABK dan peta jabatan</strong></label>
      <select class="form-control" name="perencanaan3a" id="perencanaan3a" disabled>
        <option value="<?= $data['formasi_abk']; ?>" selected><?= $data['formasi_abk']; ?></option>
      </select><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>b. Perencanaan Kebutuhan SDM Kesehatan sesuai dengan ABK dibuktikan dalam bentuk dokumen</strong></label>
      <select class="form-control" name="perencanaan3b" id="perencanaan3b" disabled>
        <option value="<?= $data['sdm_abk']; ?>" selected><?= $data['sdm_abk']; ?></option>
      </select><br>
      <label for="exampleFormControlInput1" style="font-size:14px;"><strong>c. Ada upaya penambahan terkait sumber daya, terdiri dari:</strong></label>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.1 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan kebutuhan SDM Kesehatan yang telah disusun (baik usulan penambahan atau redistribusi tenaga)</label>
      <select class="form-control" name="perencanaan3c_1" id="perencanaan3c_1" disabled>
        <option value="<?= $data['tindak_lanjut']; ?>" selected><?= $data['tindak_lanjut']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.2 Perencanaan kebutuhan peralatan Puskesmas (alat kesehatan dan non alat kesehatan) sesuai persyaratan di PMK 43 tahun 2019, PMK 31 tahun 2018, dan PMK 54 tahun 2015 (jenis lengkap, Jumlah cukup & kondisi alat , jenis lengkap tetapi jumlah masih kurang, jenis & jumlah masih kurang, dsb) </label>
      <select class="form-control" name="perencanaan3c_2" id="perencanaan3c_2" disabled>
        <option value="<?= $data['perencanaan_peralatan']; ?>" selected><?= $data['perencanaan_peralatan']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.3 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan peralatan Puskesmas yang disusun</label>
      <select class="form-control" name="perencanaan3c_3" id="perencanaan3c_3" disabled>
        <option value="<?= $data['ada_tindak']; ?>" selected><?= $data['ada_tindak']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.4 Perencanaan kebutuhan sarana prasarana Puskesmas sesuai persyaratan di PMK 43 tahun 2019, PMK 31 tahun 2018 (memuat penilaian kondisi sarana prasarana)</label>
      <select class="form-control" name="perencanaan3c_4" id="perencanaan3c_4" disabled>
        <option value="<?= $data['kondisi_sarana']; ?>" selected><?= $data['kondisi_sarana']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.5 Ada tindak lanjut yang dilakukan Puskesmas terhadap hasil dokumen perencanaan sarana prasarana Puskesmas sesuai rencana yang disusun</label>
      <select class="form-control " name="perencanaan3c_5" id="perencanaan3c_5" disabled>
        <option value="<?= $data['dokumen_perencanaan']; ?>" selected><?= $data['dokumen_perencanaan']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.6 Alokasi anggaran dapat membiayai semua kebutuhan Puskesmas</label>
      <select class="form-control" name="perencanaan3c_6" id="perencanaan3c_6" disabled>
        <option value="<?= $data['alokasi_kebutuhan']; ?>" selected><?= $data['alokasi_kebutuhan']; ?></option>
      </select>
      <br>
      <label for="exampleFormControlInput1" style="font-size:14px; margin-left:5px; text-align:justify;">c.7 usulan pengadaan, perbaikan atau pengembangan sistem informasi kesehatan dan/atau teknologi tepat guna</label>
      <select class="form-control" name="perencanaan3c_7" id="perencanaan3c_7" disabled>
        <option value="<?= $data['usulan_pengadaan']; ?>" selected><?= $data['usulan_pengadaan']; ?></option>
      </select>
    </div>
  </form>
  <br>
  <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; border-radius:5px;">Masukan</a>
  <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; border-radius:5px;">Hapus</a>
</div>