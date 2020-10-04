<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Bangunan Puskesmas</strong></h2>
      </div>
    </div>

    <form>
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success" role="alert">
          Data Telah Berhasil
          <?= $this->session->flashdata('flash'); ?>
        </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Koefisien Dasar Bangunan (KDB) Puskesmas maksimal 60%</label>
        <input type="text" class="form-control" value="<?= $data['kdb']; ?>" placeholder="" name="bangunan1" id="bangunan1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Koefisien lantai bangunan (KLB) Puskesmas maksimal 1,8</label>
        <input type="text" class="form-control" value="<?= $data['klb']; ?>" placeholder="" name="bangunan2" id="bangunan2" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Koefisien daerah hijau (KDH) Puskesmas minimal 15%</label>
        <input type="text" class="form-control" value="<?= $data['kdh']; ?>" placeholder="" name="bangunan4" id="bangunan4" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Tata letak ruang pelayanan pada bangunan puskesmas diatur berdasarkan zona privasi kegiatan dan zona infeksius atau zona non infeksius serta zona pelayanan.</label>
        <input type="text" class="form-control" value="<?= $data['tataletak']; ?>" placeholder="" name="bangunan5" id="bangunan5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Pencahayaan dan penghawaan Puskesmas nyaman dan aman di semua bagian.</label>
        <input type="text" class="form-control" value="<?= $data['pencahayaan']; ?>" placeholder="" name="bangunan6" id="bangunan6" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">6. Lebar koridor puskesmas minimal 2,4 meter, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['lebar_koridor']; ?>" placeholder="" name="bangunan7" id="bangunan7" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">7. Tinggi langit-langit puskesmas minimal 2,8 meter, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['tingi_langit']; ?>" placeholder="" name="bangunan8" id="bangunan8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">8. Bila antar bangunan/ruangan di dalam Puskesmas menggunakan RAM, kemiringan tidak melebihi 7o.</label>
        <input type="text" class="form-control" value="<?= $data['bila_antar']; ?>" placeholder="" name="bangunan9" id="bangunan9" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">9. Bangunan Puskesmas permanen, rapi, bersih tidak pengap dan tidak berbau</label>
        <input type="text" class="form-control" value="<?= $data['bangunan_puskesmas']; ?>" placeholder="" name="bangunan10" id="bangunan10" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">10. Lambang Puskesmas sesuai dengan PMK 43 tahun 2019 dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['lambang_puskesmas']; ?>" placeholder="" name="bangunan11" id="bangunan11" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">11. Lambang Puskesmas diletakkan di depan bangunan yang mudah terlihat dari jarak jauh </label>
        <input type="text" class="form-control" value="<?= $data['lambang_jauh']; ?>" placeholder="" name="bangunan12" id="bangunan12" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">12. Papan nama Puskesmas dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['papannama']; ?>" placeholder="" name="bangunan13" id="bangunan13" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">13. Posisi bangunan terpisah dari bangunan lain</label>
        <input type="text" class="form-control" value="<?= $data['posisi_bangunan']; ?>" placeholder="" name="bangunan14" id="bangunan14" readonly>

      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">14. Atap Puskesmas kuat, tidak bocor, tahan lama dalam kondisi baik, rapi dan bersih </label>
        <input type="text" class="form-control" value="<?= $data['atap_puskesmas']; ?>" placeholder="" name="bangunan15" id="bangunan15" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">15. Langit-langit Puskesmas kuat, berwarna terang dan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['langit_langit']; ?>" placeholder="" name="bangunan16" id="bangunan16" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">16. Material dinding Puskesmas keras, rata, tidak berpori, tidak menyebabkan silau, kedap air, dan dalam kondisi baik, rapi dan bersih.</label>
        <input type="text" class="form-control" value="<?= $data['material_dinding']; ?>" placeholder="" name="bangunan17" id="bangunan17" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">17. Dinding KM/WC Puskesmas kedap air, dilapisi keramik minimal setinggi 150 cm dan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['dinding_wc']; ?>" placeholder="" name="bangunan18" id="bangunan18" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">18. Dinding laboratorium Puskesmas tahan bahan kimia, tidak berpori dan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['dinding_lab']; ?>" placeholder="" name="bangunan19" id="bangunan19" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">19. Material lantai Puskesmas kuat, kedap air, permukaan rata, tidak licin, bewarna terang, dan dalam kondisi baik, rapi dan bersih.</label>
        <input type="text" class="form-control" value="<?= $data['material_lantai']; ?>" placeholder="" name="bangunan20" id="bangunan20" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">20. Lantai KM/WC Puskesmas dari bahan yang tidak licin, air buangan tidak menggenang dan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['lantai_wc']; ?>" placeholder="" name="bangunan21" id="bangunan21" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">21. Lebar bukaan pintu utama Puskesmas minimal 120 cm dan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['lebar_bukaan']; ?>" placeholder="" name="bangunan22" id="bangunan22" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">22. Lebar bukaan pintu ruang gawat darurat Puskesmas minimal 120 cm dan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['lebar_pintu']; ?>" placeholder="" name="bangunan23" id="bangunan23" readonly>


      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">23. Pintu KM/WC pasien terbuka keluar dan lebar daun pintu minimal 90 cm serta mudah untuk di buka dan ditutup serta dalam kondisi baik, rapi, bersih</label>
        <input type="text" class="form-control" value="<?= $data['pintu_wc']; ?>" placeholder="" name="bangunan23" id="bangunan23" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">24. Material pintu untuk KM/WC kedap air</label>
        <input type="text" class="form-control" value="<?= $data['material_pintu']; ?>" placeholder="" name="bangunan24" id="bangunan24" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">25. Mempunyai KM/WC untuk penyandang disabilitas dilengkapi dengan handrail yang memiliki posisi dan ketinggian disesuaikan dengan pengguna kursi roda dan penyandang disabilitas lain dan simbol penyandang disabilitas dalam kondisi baik, rapi dan bersih.</label>
        <input type="text" class="form-control" value="<?= $data['wc_disabilitas']; ?>" placeholder="" name="bangunan25" id="bangunan25" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">26. Halaman Puskesmas tidak banjir/tergenang air saat hujan dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['halaman_puskesmas']; ?>" placeholder="" name="bangunan26" id="bangunan26" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">27. Tersedia drainase yang baik sehingga tidak membuat banjir saat hujan turun.</label>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">28. Kursi ruang tunggu cukup/memadai untuk jumlah pasien yang datang, tidak sempit dan tidak menganggu alur pelayanan/koridor serta rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['kursi_tunggu']; ?>" placeholder="" name="bangunan28" id="bangunan28" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">29. Meubelair Puskesmas dalam kondisi baik, rapi dan bersih</label>
        <input type="text" class="form-control" value="<?= $data['meubelair']; ?>" placeholder="" name="bangunan29" id="bangunan29" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">30. Terdapat tempat poster penyuluhan yang tertata rapi dan bersih di bangunan Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['tmpt_poster']; ?>" placeholder="" name="bangunan30" id="bangunan30" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">31. Terdapat tempat khusus pemasangan spanduk edukasi kesehatan yang rapi dan di halaman Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['tmpt_spanduk']; ?>" placeholder="" name="bangunan31" id="bangunan31" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">32. Terdapat taman obat yang tertata rapi di area Puskesmas</label>
        <input type="text" class="form-control" value="<?= $data['taman_obat']; ?>" placeholder="" name="bangunan32" id="bangunan32" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">33. Puskesmas bebas dari asap rokok </label>
        <input type="text" class="form-control" value="<?= $data['bebas_rokok']; ?>" placeholder="" name="bangunan33" id="bangunan33" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">34. Semua ruang Puskesmas harus bebas dari tanda keberadaan kecoa</label>
        <input type="text" class="form-control" value="<?= $data['bebas_kecoa']; ?>" placeholder="" name="bangunan34" id="bangunan34" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">35. Semua ruang Puskesmas harus bebas dari tanda keberadaan tikus</label>
        <input type="text" class="form-control" value="<?= $data['bebas_tikus']; ?>" placeholder="" name="bangunan35" id="bangunan35" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">36. Semua ruang Puskesmas harus bebas dari kucing</label>
        <input type="text" class="form-control" value="<?= $data['bebas_kucing']; ?>" placeholder="" name="bangunan36" id="bangunan36" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">37. Angka Bebas Jentik 100%</label>
        <input type="text" class="form-control" value="<?= $data['bebas_jentik']; ?>" placeholder="" name="bangunan37" id="bangunan37" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">38. Angka rata-rata populasi lalat < 2 ekor</label> <input type="text" class="form-control" value="<?= $data['populasi_lalat']; ?>" placeholder="" name="bangunan38" id="bangunan38" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">39. Angka rata-rata populasi kecoa < 2 ekor</label> <input type="text" class="form-control" value="<?= $data['populasi_kecoa']; ?>" placeholder="" name="bangunan39" id="bangunan39" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">40. Terdapat KIR (kartu inventaris ruangan) pada setiap ruangan puskesmas yang telah diisi lengkap</label>
        <input type="text" class="form-control" value="<?= $data['kir']; ?>" placeholder="" name="bangunan40" id="bangunan40" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">41. Ketersediaan ruang kantor</label> <br>
        <label for="exampleFormControlInput1">a. Ruang Administrasi</label>
        <input type="text" class="form-control" value="<?= $data['ruang_admin']; ?>" placeholder="" name="bangunan41a" id="bangunan41a" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Ruang Kantor untuk Karyawan </label>
        <input type="text" class="form-control" value="<?= $data['ruang_karyawan']; ?>" placeholder="" name="bangunan41b" id="bangunan41b" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Ruang Kepala Puskesmas </label>
        <input type="text" class="form-control" value="<?= $data['ruang_kepala']; ?>" placeholder="" name="bangunan41c" id="bangunan41c" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Ruang Rapat/Diskusi</label>
        <input type="text" class="form-control" value="<?= $data['ruang_rapat']; ?>" placeholder="" name="bangunan41d" id="bangunan41d" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">42. Ketersediaan ruang pelayanan</label> <br>
        <label for="exampleFormControlInput1">- Ruang Pendaftaran dan Rekam Medis</label>
        <input type="text" class="form-control" value="<?= $data['ruang_pendaftaran']; ?>" placeholder="" name="bangunan42_1" id="bangunan42_1" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Pemeriksaan Umum</label>
        <input type="text" class="form-control" value="<?= $data['ruang_pemeriksaaan']; ?>" placeholder="" name="bangunan42_2" id="bangunan42_2" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Tindakan dan Gawat Darurat</label>
        <input type="text" class="form-control" value="<?= $data['ruang_tindakan']; ?>" placeholder="" name="bangunan42_3" id="bangunan42_3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang KIA, KB dan Imunisasi</label>
        <input type="text" class="form-control" value="<?= $data['ruang_kia']; ?>" placeholder="" name="bangunan42_4" id="bangunan42_4" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Pemeriksaan Khusus</label>
        <input type="text" class="form-control" value="<?= $data['ruang_khusus']; ?>" placeholder="" name="bangunan42_5" id="bangunan42_5" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Kesehatan Gigi dan Mulut</label>
        <input type="text" class="form-control" value="<?= $data['ruang_gigi']; ?>" placeholder="" name="v" id="v" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruangan Komunikasi Informasi dan Edukasi (KIE)</label>
        <input type="text" class="form-control" value="<?= $data['ruang_kie']; ?>" placeholder="" name="bangunan42_7" id="bangunan42_7" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Farmasi</label>
        <input type="text" class="form-control" value="<?= $data['ruang_farmasi']; ?>" placeholder="" name="bangunan42_8" id="bangunan42_8" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Farmasi meliputi sarana sebagai berikut:</label><br>
        <label for="exampleFormControlInput1">a. Ruang penerimaan resep</label>
        <input type="text" class="form-control" value="<?= $data['ruang_resep']; ?>" placeholder="" name="bangunan42_9a" id="bangunan42_9a" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Ruang pelayanan resep dan peracikan</label>
        <input type="text" class="form-control" value="<?= $data['ruang_racik']; ?>" placeholder="" name="bangunan42_9b" id="bangunan42_9b" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">c. Ruang penyerahan obat</label>
        <input type="text" class="form-control" value="<?= $data['ruang_obat']; ?>" placeholder="" name="bangunan42_9c" id="bangunan42_9c" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">d. Ruang konseling</label>
        <input type="text" class="form-control" value="<?= $data['ruang_konseling']; ?>" placeholder="" name="bangunan42_9d" id="bangunan42_9d" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">e. Ruang penyimpanan obat dan BMHP</label>
        <input type="text" class="form-control" value="<?= $data['ruang_bmhp']; ?>" placeholder="" name="bangunan42_9e" id="bangunan42_9e" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">f. Ruang arsip</label>
        <input type="text" class="form-control" value="<?= $data['ruang_arsip']; ?>" placeholder="" name="bangunan42_9f" id="bangunan42_9f" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Persalinan </label>
        <input type="text" class="form-control" value="<?= $data['ruang_persalinan']; ?>" placeholder="" name="bangunan42_10" id="bangunan42_10" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Rawat Pasca Persalinan </label>
        <input type="text" class="form-control" value="<?= $data['ruang_pasca']; ?>" placeholder="" name="bangunan42_11" id="bangunan42_11" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Ruang Laboratorium</label>
        <input type="text" class="form-control" value="<?= $data['ruang_lab']; ?>" placeholder="" name="bangunan42_12" id="bangunan42_12" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">- Unit Rawat Inap ditambah dengan:</label><br>
        <label for="exampleFormControlInput1">Ruang KIA KB dan Imunisasi menjadi 2 ruang:</label><br>
        <label for="exampleFormControlInput1">a. Ruang Kesehatan Ibu dan KB</label>
        <input type="text" class="form-control" value="<?= $data['ruang_kb']; ?>" placeholder="" name="bangunan42_13a" id="bangunan42_13a" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">b. Ruang Kesehatan Anak dan Imunisasi</label>
        <input type="text" class="form-control" value="<?= $data['ruang_anak']; ?>" placeholder="" name="bangunan42_13b" id="bangunan42_13b" readonly>

        <div class="form-group">
          <label for="exampleFormControlInput1">- Ruang Rawat Inap</label>
          <input type="text" class="form-control" value="<?= $data['ruang_inap']; ?>" placeholder="" name="bangunan42_14" id="bangunan42_14" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Kamar mandi/WC ((terpisah laki-laki dan perempuan, dikondisikan untuk dapat digunakan oleh penyandang disabilitas dan lansia)</label>
          <input type="text" class="form-control" value="<?= $data['wc']; ?>" placeholder="" name="bangunan42_15" id="bangunan42_15" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">43. Ketersediaan Ruang Penunjang</label><br>
          <label for="exampleFormControlInput1">- Ruang Tunggu</label>
          <input type="text" class="form-control" value="<?= $data['ruang_tunggu']; ?>" placeholder="" name="bangunan43_1" id="bangunan43_1" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Ruang ASI</label>
          <input type="text" class="form-control" value="<?= $data['ruang_asi']; ?>" placeholder="" name="bangunan43_2" id="bangunan43_2" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Ruang Sterilisasi</label>
          <input type="text" class="form-control" value="<?= $data['ruang_steril']; ?>" placeholder="" name="bangunan43_3" id="bangunan43_3" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Ruang Cuci Linen</label>
          <input type="text" class="form-control" value="<?= $data['ruang_linen']; ?>" placeholder="" name="bangunan43_4" id="bangunan43_4" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Ruang Penyelenggaraan makanan (dapur/pantry)</label>
          <input type="text" class="form-control" value="<?= $data['ruang_dapur']; ?>" placeholder="" name="bangunan43_5" id="bangunan43_5" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Unit Rawat Inap ditambah dengan</label><br>
          <label for="exampleFormControlInput1">a. Ruang Jaga Petugas</label>
          <input type="text" class="form-control" value="<?= $data['ruang_jaga']; ?>" placeholder="" name="bangunan43_6a" id="bangunan43_6a" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Gudang Umum</label>
          <input type="text" class="form-control" value="<?= $data['gudang_umum']; ?>" placeholder="" name="bangunan43_7" id="bangunan43_7" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Kamar mandi/WC Pasien/pengunjung (terpisah laki-laki dan perempuan, dikondisikan untuk dapat digunakan oleh penyandang disabilitas dan lansia)</label>
          <input type="text" class="form-control" value="<?= $data['wc_pasien']; ?>" placeholder="" name="bangunan43_8" id="bangunan43_8" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Rumah dinas tenaga kesehatan</label>
          <input type="text" class="form-control" value="<?= $data['rumah_dinas']; ?>" placeholder="" name="bangunan43_9" id="bangunan43_9" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Parkir kendaraan roda 2</label>
          <input type="text" class="form-control" value="<?= $data['roda_2']; ?>" placeholder="" name="bangunan43_10" id="bangunan43_10" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Parkir Kendaraan Roda 4</label>
          <input type="text" class="form-control" value="<?= $data['roda_4']; ?>" placeholder="" name="bangunan43_11" id="bangunan43_11" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Garasi Ambulans/Pusling</label>
          <input type="text" class="form-control" value="<?= $data['garasi_ambulan']; ?>" placeholder="" name="bangunan43_12" id="bangunan43_12" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Area khusus penyimpanan Tabung O2 </label>
          <input type="text" class="form-control" value="<?= $data['area_tabung']; ?>" placeholder="" name="bangunan43_13" id="bangunan43_13" readonly>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">- Ruang Lainnya …………………………… (selain yang tertulis diatas) </label>
          <input type="text" class="form-control" value="<?= $data['selain_diatas']; ?>" placeholder="ruang lainnya" name="bangunan43_14" id="bangunan43_14" readonly>
          <input type="text" class="form-control" value="<?= $data['ruang_lain']; ?>" placeholder="" name="bangunan43_15" id="bangunan43_15" readonly>
        </div>

        <a class="btn float-right btn-danger" href="<?= base_url('Bangunan_Puskesmas/ubah'); ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
    </form>
  </div>
</div>