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
          <label for="exampleFormControlInput1">Koefisien Dasar Bangunan (KDB) Puskesmas maksimal 60%</label>
          <select class="form-control" name="bangunan1" id="bangunan1" disabled>
            <option value="<?= $data['kdb']; ?>" selected><?= $data['kdb']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Koefisien lantai bangunan (KLB) Puskesmas maksimal 1,8</label>
          <select class="form-control" name="bangunan2" id="bangunan2" disabled>
            <option value="<?= $data['klb']; ?>" selected><?= $data['klb']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Koefisien daerah hijau (KDH) Puskesmas minimal 15%</label>
          <select class="form-control" name="bangunan4" id="bangunan4" disabled>
            <option value="<?= $data['kdh']; ?>" selected><?= $data['kdh']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tata letak ruang pelayanan pada bangunan puskesmas diatur berdasarkan zona privasi kegiatan dan zona infeksius atau zona non infeksius serta zona pelayanan.</label>
          <select class="form-control" name="bangunan5" id="bangunan5" disabled>
            <option value="<?= $data['tataletak']; ?>" selected><?= $data['tataletak']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Pencahayaan dan penghawaan Puskesmas nyaman dan aman di semua bagian.</label>
          <select class="form-control" name="bangunan6" id="bangunan6" disabled>
            <option value="<?= $data['pencahayaan']; ?>" selected><?= $data['pencahayaan']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lebar koridor puskesmas minimal 2,4 meter, rapi dan bersih</label>
          <select class="form-control" name="bangunan7" id="bangunan7" disabled>
            <option value="<?= $data['lebar_koridor']; ?>" selected><?= $data['lebar_koridor']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tinggi langit-langit puskesmas minimal 2,8 meter, rapi dan bersih</label>
          <select class="form-control" name="bangunan8" id="bangunan8" disabled>
            <option value="<?= $data['tingi_langit']; ?>" selected><?= $data['tingi_langit']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Bila antar bangunan/ruangan di dalam Puskesmas menggunakan RAM, kemiringan tidak melebihi 7o.</label>
          <select class="form-control" name="bangunan9" id="bangunan9" disabled>
            <option value="<?= $data['bila_antar']; ?>" selected><?= $data['bila_antar']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Bangunan Puskesmas permanen, rapi, bersih tidak pengap dan tidak berbau
          </label>
          <select class="form-control" name="bangunan10" id="bangunan10" disabled>
            <option value="<?= $data['bangunan_puskesmas']; ?>" selected><?= $data['bangunan_puskesmas']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lambang Puskesmas sesuai dengan PMK 43 tahun 2019 dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan11" id="bangunan11" disabled>
            <option value="<?= $data['lambang_puskesmas']; ?>" selected><?= $data['lambang_puskesmas']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lambang Puskesmas diletakkan di depan bangunan yang mudah terlihat dari jarak jauh </label>
          <select class="form-control" name="bangunan12" id="bangunan12" disabled>
            <option value="<?= $data['lambang_jauh']; ?>" selected><?= $data['lambang_jauh']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Papan nama Puskesmas dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan13" id="bangunan13" disabled>
            <option value="<?= $data['papannama']; ?>" selected><?= $data['papannama']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Posisi bangunan terpisah dari bangunan lain</label>
          <select class="form-control" name="bangunan14" id="bangunan14" disabled>
            <option value="<?= $data['posisi_bangunan']; ?>" selected><?= $data['posisi_bangunan']; ?></option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Atap Puskesmas kuat, tidak bocor, tahan lama dalam kondisi baik, rapi dan bersih
          </label>
          <select class="form-control" name="bangunan15" id="bangunan15" disabled>
            <option value="<?= $data['atap_puskesmas']; ?>" selected><?= $data['atap_puskesmas']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Langit-langit Puskesmas kuat, berwarna terang dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan16" id="bangunan16" disabled>
            <option value="<?= $data['langit_langit']; ?>" selected><?= $data['langit_langit']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Material dinding Puskesmas keras, rata, tidak berpori, tidak menyebabkan silau, kedap air, dan dalam kondisi baik, rapi dan bersih.</label>
          <select class="form-control" name="bangunan17" id="bangunan17" disabled>
            <option value="<?= $data['material_dinding']; ?>" selected><?= $data['material_dinding']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Dinding KM/WC Puskesmas kedap air, dilapisi keramik minimal setinggi 150 cm dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan18" id="bangunan18" disabled>
            <option value="<?= $data['dinding_wc']; ?>" selected><?= $data['dinding_wc']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Dinding laboratorium Puskesmas tahan bahan kimia, tidak berpori dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan19" id="bangunan19" disabled>
            <option value="<?= $data['dinding_lab']; ?>" selected><?= $data['dinding_lab']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Material lantai Puskesmas kuat, kedap air, permukaan rata, tidak licin, bewarna terang, dan dalam kondisi baik, rapi dan bersih.</label>
          <select class="form-control" name="bangunan20" id="bangunan20" disabled>
            <option value="<?= $data['material_lantai']; ?>" selected><?= $data['material_lantai']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lantai KM/WC Puskesmas dari bahan yang tidak licin, air buangan tidak menggenang dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan21" id="bangunan21" disabled>
            <option value="<?= $data['lantai_wc']; ?>" selected><?= $data['lantai_wc']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lebar bukaan pintu utama Puskesmas minimal 120 cm dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan22" id="bangunan22" disabled>
            <option value="<?= $data['lebar_bukaan']; ?>" selected><?= $data['lebar_bukaan']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lebar bukaan pintu ruang gawat darurat Puskesmas minimal 120 cm dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan23" id="bangunan23" disabled>
            <option value="<?= $data['lebar_pintu']; ?>" selected><?= $data['lebar_pintu']; ?></option>
          </select>

        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Pintu KM/WC pasien terbuka keluar dan lebar daun pintu minimal 90 cm serta mudah untuk di buka dan ditutup serta dalam kondisi baik, rapi, bersih</label>
          <select class="form-control" name="bangunan23" id="bangunan23" disabled>
            <option value="<?= $data['pintu_wc']; ?>" selected><?= $data['pintu_wc']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Material pintu untuk KM/WC kedap air</label>
          <select class="form-control" name="bangunan24" id="bangunan24" disabled>
            <option value="<?= $data['material_pintu']; ?>" selected><?= $data['material_pintu']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Mempunyai KM/WC untuk penyandang disabilitas dilengkapi dengan handrail yang memiliki posisi dan ketinggian disesuaikan dengan pengguna kursi roda dan penyandang disabilitas lain dan simbol penyandang disabilitas dalam kondisi baik, rapi dan bersih.</label>
          <select class="form-control" name="bangunan25" id="bangunan25" disabled>
            <option value="<?= $data['wc_disabilitas']; ?>" selected><?= $data['wc_disabilitas']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Halaman Puskesmas tidak banjir/tergenang air saat hujan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan26" id="bangunan26" disabled>
            <option value="<?= $data['halaman_puskesmas']; ?>" selected><?= $data['halaman_puskesmas']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tersedia drainase yang baik sehingga tidak membuat banjir saat hujan turun.</label>
          <select class="form-control" name="bangunan27" id="bangunan27" disabled>
            <option value="<?= $data['drainase']; ?>" selected><?= $data['drainase']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Kursi ruang tunggu cukup/memadai untuk jumlah pasien yang datang, tidak sempit dan tidak menganggu alur pelayanan/koridor serta rapi dan bersih</label>
          <select class="form-control" name="bangunan28" id="bangunan28" disabled>
            <option value="<?= $data['kursi_tunggu']; ?>" selected><?= $data['kursi_tunggu']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Meubelair Puskesmas dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan29" id="bangunan29" disabled>
            <option value="<?= $data['meubelair']; ?>" selected><?= $data['meubelair']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat tempat poster penyuluhan yang tertata rapi dan bersih di bangunan Puskesmas</label>
          <select class="form-control" name="bangunan30" id="bangunan30" disabled>
            <option value="<?= $data['tmpt_poster']; ?>" selected><?= $data['tmpt_poster']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat tempat khusus pemasangan spanduk edukasi kesehatan yang rapi dan di halaman Puskesmas</label>
          <select class="form-control" name="bangunan31" id="bangunan31" disabled>
            <option value="<?= $data['tmpt_spanduk']; ?>" selected><?= $data['tmpt_spanduk']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat taman obat yang tertata rapi di area Puskesmas

          </label>
          <select class="form-control" name="bangunan32" id="bangunan32" disabled>
            <option value="<?= $data['taman_obat']; ?>" selected><?= $data['taman_obat']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas bebas dari asap rokok

          </label>
          <select class="form-control" name="bangunan33" id="bangunan33" disabled>
            <option value="<?= $data['bebas_rokok']; ?>" selected><?= $data['bebas_rokok']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Semua ruang Puskesmas harus bebas dari tanda keberadaan kecoa</label>
          <select class="form-control" name="bangunan34" id="bangunan34" disabled>
            <option value="<?= $data['bebas_kecoa']; ?>" selected><?= $data['bebas_kecoa']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Semua ruang Puskesmas harus bebas dari tanda keberadaan tikus</label>
          <select class="form-control" name="bangunan35" id="bangunan35" disabled>
            <option value="<?= $data['bebas_tikus']; ?>" selected><?= $data['bebas_tikus']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Semua ruang Puskesmas harus bebas dari kucing</label>
          <select class="form-control" name="bangunan36" id="bangunan36" disabled>
            <option value="<?= $data['bebas_kucing']; ?>" selected><?= $data['bebas_kucing']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Angka Bebas Jentik 100%</label>
          <select class="form-control" name="bangunan37" id="bangunan37" disabled>
            <option value="<?= $data['bebas_jentik']; ?>" selected><?= $data['bebas_jentik']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Angka rata-rata populasi lalat < 2 ekor</label> <select class="form-control" name="bangunan38" id="bangunan38" disabled>
              <option value="<?= $data['populasi_lalat']; ?>" selected><?= $data['populasi_lalat']; ?></option>
              </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Angka rata-rata populasi kecoa < 2 ekor</label> <select class="form-control" name="bangunan39" id="bangunan39" disabled>
              <option value="<?= $data['populasi_kecoa']; ?>" selected><?= $data['populasi_kecoa']; ?></option>
              </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat KIR (kartu inventaris ruangan) pada setiap ruangan puskesmas yang telah diisi lengkap</label>
          <select class="form-control" name="bangunan40" id="bangunan40" disabled>
            <option value="<?= $data['kir']; ?>" selected><?= $data['kir']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Ketersediaan ruang kantor</strong></label> <br>
          <label for="exampleFormControlInput1">a. Ruang Administrasi</label>
          <select class="form-control" name="bangunan41a" id="bangunan41a" disabled>
            <option value="<?= $data['ruang_admin']; ?>" selected><?= $data['ruang_admin']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">b. Ruang Kantor untuk Karyawan </label>
          <select class="form-control" name="bangunan41b" id="bangunan41b" disabled>
            <option value="<?= $data['ruang_karyawan']; ?>" selected><?= $data['ruang_karyawan']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">c. Ruang Kepala Puskesmas </label>
          <select class="form-control" name="bangunan41c" id="bangunan41c" disabled>
            <option value="<?= $data['ruang_kepala']; ?>" selected><?= $data['ruang_kepala']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">d. Ruang Rapat/Diskusi</label>
          <select class="form-control" name="bangunan41d" id="bangunan41d" disabled>
            <option value="<?= $data['ruang_rapat']; ?>" selected><?= $data['ruang_rapat']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Ketersediaan ruang pelayanan</strong></label> <br>
          <label for="exampleFormControlInput1">Ruang Pendaftaran dan Rekam Medis</label>
          <select class="form-control" name="bangunan42.1" id="bangunan42.1" disabled>
            <option value="<?= $data['ruang_pendaftaran']; ?>" selected><?= $data['ruang_pendaftaran']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Pemeriksaan Umum</label>
          <select class="form-control" name="bangunan42.2" id="bangunan42.2" disabled>
            <option value="<?= $data['ruang_pemeriksaaan']; ?>" selected><?= $data['ruang_pemeriksaaan']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Tindakan dan Gawat Darurat</label>
          <select class="form-control" name="bangunan42.3" id="bangunan42.3 " disabled>
            <option value="<?= $data['ruang_tindakan']; ?>" selected><?= $data['ruang_tindakan']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang KIA, KB dan Imunisasi</label>
          <select class="form-control" name="bangunan42.4" id="bangunan42.4" disabled>
            <option value="<?= $data['ruang_kia']; ?>" selected><?= $data['ruang_kia']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Pemeriksaan Khusus</label>
          <select class="form-control" name="bangunan42.5" id="bangunan42.5" disabled>
            <option value="<?= $data['ruang_khusus']; ?>" selected><?= $data['ruang_khusus']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Kesehatan Gigi dan Mulut</label>
          <select class="form-control" name="bangunan42.6" id="bangunan42.6" disabled>
            <option value="<?= $data['ruang_gigi']; ?>" selected><?= $data['ruang_gigi']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruangan Komunikasi Informasi dan Edukasi (KIE)</label>
          <select class="form-control" name="bangunan42.7" id="bangunan42.7" disabled>
            <option value="<?= $data['ruang_kie']; ?>" selected><?= $data['ruang_kie']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Farmasi</label>
          <select class="form-control" name="bangunan42.8" id="bangunan42.8" disabled>
            <option value="<?= $data['ruang_farmasi']; ?>" selected><?= $data['ruang_farmasi']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Farmasi meliputi sarana sebagai berikut:</label><br>
          <label for="exampleFormControlInput1">a. Ruang penerimaan resep</label>
          <select class="form-control" name="bangunan42.9a" id="bangunan42.9a" disabled>
            <option value="<?= $data['ruang_resep']; ?>" selected><?= $data['ruang_resep']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">b. Ruang pelayanan resep dan peracikan</label>
          <select class="form-control" name="bangunan42.9b" id="bangunan42.9b" disabled>
            <option value="<?= $data['ruang_racik']; ?>" selected><?= $data['ruang_racik']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">c. Ruang penyerahan obat</label>
          <select class="form-control" name="bangunan42.9c" id="bangunan42.9c" disabled>
            <option value="<?= $data['ruang_obat']; ?>" selected><?= $data['ruang_obat']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">d. Ruang konseling</label>
          <select class="form-control" name="bangunan42.9d" id="bangunan42.9d" disabled>
            <option value="<?= $data['ruang_konseling']; ?>" selected><?= $data['ruang_konseling']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">e. Ruang penyimpanan obat dan BMHP</label>
          <select class="form-control" name="bangunan42.9e" id="bangunan42.9e" disabled>
            <option value="<?= $data['ruang_bmhp']; ?>" selected><?= $data['ruang_bmhp']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">f. Ruang arsip</label>
          <select class="form-control" name="bangunan42.9f" id="bangunan42.9f" disabled>
            <option value="<?= $data['ruang_arsip']; ?>" selected><?= $data['ruang_arsip']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Persalinan </label>
          <select class="form-control" name="bangunan42.10" id="bangunan42.10" disabled>
            <option value="<?= $data['ruang_persalinan']; ?>" selected><?= $data['ruang_persalinan']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Rawat Pasca Persalinan </label>
          <select class="form-control" name="bangunan42.11" id="bangunan42.11" disabled>
            <option value="<?= $data['ruang_pasca']; ?>" selected><?= $data['ruang_pasca']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Laboratorium</label>
          <select class="form-control" name="bangunan42.12" id="bangunan42.12" disabled>
            <option value="<?= $data['ruang_lab']; ?>" selected><?= $data['ruang_lab']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Unit Rawat Inap ditambah dengan:</label><br>
          <label for="exampleFormControlInput1">Ruang KIA KB dan Imunisasi menjadi 2 ruang:</label><br>
          <label for="exampleFormControlInput1">a. Ruang Kesehatan Ibu dan KB</label>
          <select class="form-control" name="bangunan42.13a" id="bangunan42.13a" disabled>
            <option value="<?= $data['ruang_kb']; ?>" selected><?= $data['ruang_kb']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">b. Ruang Kesehatan Anak dan Imunisasi</label>
          <select class="form-control" name="bangunan42.13b" id="bangunan42.13b" disabled>
            <option value="<?= $data['ruang_anak']; ?>" selected><?= $data['ruang_anak']; ?></option>
          </select>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ruang Rawat Inap</label>
            <select class="form-control" name="bangunan42.14" id="bangunan42.14" disabled>
              <option value="<?= $data['ruang_inap']; ?>" selected><?= $data['ruang_inap']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kamar mandi/WC ((terpisah laki-laki dan perempuan, dikondisikan untuk dapat digunakan oleh penyandang disabilitas dan lansia)</label>
            <select class="form-control" name="bangunan42.15" id="bangunan42.15" disabled>
              <option value="<?= $data['wc']; ?>" selected><?= $data['wc']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>Ketersediaan Ruang Penunjang</strong></label><br>
            <label for="exampleFormControlInput1">Ruang Tunggu</label>
            <select class="form-control" name="bangunan43.1" id="bangunan43.1" disabled>
              <option value="<?= $data['ruang_tunggu']; ?>" selected><?= $data['ruang_tunggu']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ruang ASI</label>
            <select class="form-control" name="bangunan43.2" id="bangunan43.2" disabled>
              <option value="<?= $data['ruang_asi']; ?>" selected><?= $data['ruang_asi']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ruang Sterilisasi</label>
            <select class="form-control" name="bangunan43.3" id="bangunan43.3" disabled>
              <option value="<?= $data['ruang_steril']; ?>" selected><?= $data['ruang_steril']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ruang Cuci Linen</label>
            <select class="form-control" name="bangunan43.4" id="bangunan43.4" disabled>
              <option value="<?= $data['ruang_linen']; ?>" selected><?= $data['ruang_linen']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ruang Penyelenggaraan makanan (dapur/pantry)</label>
            <select class="form-control" name="bangunan43.5" id="bangunan43.5" disabled>
              <option value="<?= $data['ruang_dapur']; ?>" selected><?= $data['ruang_dapur']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Unit Rawat Inap ditambah dengan</label><br>
            <label for="exampleFormControlInput1">a. Ruang Jaga Petugas</label>
            <select class="form-control" name="bangunan43.6a" id="bangunan43.6a" disabled>
              <option value="<?= $data['ruang_jaga']; ?>" selected><?= $data['ruang_jaga']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Gudang Umum</label>
            <select class="form-control" name="bangunan43.7" id="bangunan43.7" disabled>
              <option value="<?= $data['gudang_umum']; ?>" selected><?= $data['gudang_umum']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kamar mandi/WC Pasien/pengunjung (terpisah laki-laki dan perempuan, dikondisikan untuk dapat digunakan oleh penyandang disabilitas dan lansia)</label>
            <select class="form-control" name="bangunan43.8" id="bangunan43.8" disabled>
              <option value="<?= $data['wc_pasien']; ?>" selected><?= $data['wc_pasien']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Rumah dinas tenaga kesehatan</label>
            <select class="form-control" name="bangunan43.9" id="bangunan43.9" disabled>
              <option value="<?= $data['rumah_dinas']; ?>" selected><?= $data['rumah_dinas']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Parkir kendaraan roda 2</label>
            <select class="form-control" name="bangunan43.10" id="bangunan43.10" disabled>
              <option value="<?= $data['roda_2']; ?>" selected><?= $data['roda_2']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Parkir Kendaraan Roda 4</label>
            <select class="form-control" name="bangunan43.11" id="bangunan43.11" disabled>
              <option value="<?= $data['roda_4']; ?>" selected><?= $data['roda_4']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Garasi Ambulans/Pusling</label>
            <select class="form-control" name="bangunan43.12" id="bangunan43.12" disabled>
              <option value="<?= $data['garasi_ambulan']; ?>" selected><?= $data['garasi_ambulan']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Area khusus penyimpanan Tabung O2 </label>
            <select class="form-control" name="bangunan43.13" id="bangunan43.13" disabled>
              <option value="<?= $data['area_tabung']; ?>" selected><?= $data['area_tabung']; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ruang Lainnya …………………………… (selain yang tertulis diatas) </label>
            <input type="text" class="form-control" value="<?= $data['selain_diatas']; ?>" placeholder="ruang lainnya" name="bangunan43.14" id="bangunan43.14">
            <select class="form-control" name="bangunan43.15" id="bangunan43.15" disabled>
              <option value="<?= $data['ruang_lain']; ?>" selected><?= $data['ruang_lain']; ?></option>
            </select>
          </div>

          <a class="btn float-right btn-danger" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
      </form>
    </div>
  </div>
</div>