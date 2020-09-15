<div class="col-md-9" style="top:-110px;">
  <div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">

    <div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">

      <form method="POST" action="<?= base_url('Bangunan_Puskesmas'); ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Koefisien Dasar Bangunan (KDB) Puskesmas maksimal 60%</label>
          <select class="form-control" name="bangunan1" id="bangunan1">
            <?php is_terisi($data['kdb'], set_value('bangunan1')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Koefisien lantai bangunan (KLB) Puskesmas maksimal 1,8</label>
          <select class="form-control" name="bangunan2" id="bangunan2">
            <?php is_terisi($data['klb'], set_value('bangunan2')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Koefisien daerah hijau (KDH) Puskesmas minimal 15%</label>
          <select class="form-control" name="bangunan4" id="bangunan4">
            <?php is_terisi($data['kdh'], set_value('bangunan4')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan4', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tata letak ruang pelayanan pada bangunan puskesmas diatur berdasarkan zona privasi kegiatan dan zona infeksius atau zona non infeksius serta zona pelayanan.</label>
          <select class="form-control" name="bangunan5" id="bangunan5">
            <?php is_terisi($data['tataletak'], set_value('bangunan5')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan5', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Pencahayaan dan penghawaan Puskesmas nyaman dan aman di semua bagian.</label>
          <select class="form-control" name="bangunan6" id="bangunan6">
            <?php is_terisi($data['pencahayaan'], set_value('bangunan6')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan6', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lebar koridor puskesmas minimal 2,4 meter, rapi dan bersih</label>
          <select class="form-control" name="bangunan7" id="bangunan7">
            <?php is_terisi($data['lebar_koridor'], set_value('bangunan7')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan7', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tinggi langit-langit puskesmas minimal 2,8 meter, rapi dan bersih</label>
          <select class="form-control" name="bangunan8" id="bangunan8">
            <?php is_terisi($data['tingi_langit'], set_value('bangunan8')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan8', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Bila antar bangunan/ruangan di dalam Puskesmas menggunakan RAM, kemiringan tidak melebihi 7o.</label>
          <select class="form-control" name="bangunan9" id="bangunan9">
            <?php is_terisi($data['bila_antar'], set_value('bangunan9')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan9', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Bangunan Puskesmas permanen, rapi, bersih tidak pengap dan tidak berbau
          </label>
          <select class="form-control" name="bangunan10" id="bangunan10">
            <?php is_terisi($data['bangunan_puskesmas'], set_value('bangunan10')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan10', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lambang Puskesmas sesuai dengan PMK 43 tahun 2019 dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan11" id="bangunan11">
            <?php is_terisi($data['lambang_puskesmas'], set_value('bangunan11')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan11', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lambang Puskesmas diletakkan di depan bangunan yang mudah terlihat dari jarak jauh </label>
          <select class="form-control" name="bangunan12" id="bangunan12">
            <?php is_terisi($data['lambang_jauh'], set_value('bangunan12')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan12', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Papan nama Puskesmas dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan13" id="bangunan13">
            <?php is_terisi($data['papannama'], set_value('bangunan13')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan13', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Posisi bangunan terpisah dari bangunan lain</label>
          <select class="form-control" name="bangunan14" id="bangunan14">
            <?php is_terisi($data['posisi_bangunan'], set_value('bangunan14')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Atap Puskesmas kuat, tidak bocor, tahan lama dalam kondisi baik, rapi dan bersih
          </label>
          <select class="form-control" name="bangunan15" id="bangunan15">
            <?php is_terisi($data['atap_puskesmas'], set_value('bangunan15')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan15', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Langit-langit Puskesmas kuat, berwarna terang dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan16" id="bangunan16">
            <?php is_terisi($data['langit_langit'], set_value('bangunan16')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan16', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Material dinding Puskesmas keras, rata, tidak berpori, tidak menyebabkan silau, kedap air, dan dalam kondisi baik, rapi dan bersih.</label>
          <select class="form-control" name="bangunan17" id="bangunan17">
            <?php is_terisi($data['material_dinding'], set_value('bangunan17')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan17', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Dinding KM/WC Puskesmas kedap air, dilapisi keramik minimal setinggi 150 cm dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan18" id="bangunan18">
            <?php is_terisi($data['dinding_wc'], set_value('bangunan18')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan18', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Dinding laboratorium Puskesmas tahan bahan kimia, tidak berpori dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan19" id="bangunan19">
            <?php is_terisi($data['dinding_lab'], set_value('bangunan19')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan19', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Material lantai Puskesmas kuat, kedap air, permukaan rata, tidak licin, bewarna terang, dan dalam kondisi baik, rapi dan bersih.</label>
          <select class="form-control" name="bangunan20" id="bangunan20">
            <?php is_terisi($data['material_lantai'], set_value('bangunan20')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan20', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lantai KM/WC Puskesmas dari bahan yang tidak licin, air buangan tidak menggenang dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan21" id="bangunan21">
            <?php is_terisi($data['lantai_wc'], set_value('bangunan21')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan21', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lebar bukaan pintu utama Puskesmas minimal 120 cm dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan22" id="bangunan22">
            <?php is_terisi($data['lebar_bukaan'], set_value('bangunan22')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan22', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Lebar bukaan pintu ruang gawat darurat Puskesmas minimal 120 cm dan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan23" id="bangunan23">
            <?php is_terisi($data['lebar_pintu'], set_value('bangunan23')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan23', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Pintu KM/WC pasien terbuka keluar dan lebar daun pintu minimal 90 cm serta mudah untuk di buka dan ditutup serta dalam kondisi baik, rapi, bersih</label>
          <select class="form-control" name="bangunan24" id="bangunan24">
            <?php is_terisi($data['pintu_wc'], set_value('bangunan24')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan24', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Material pintu untuk KM/WC kedap air</label>
          <select class="form-control" name="bangunan25" id="bangunan25">
            <?php is_terisi($data['material_pintu'], set_value('bangunan25')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan25', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Mempunyai KM/WC untuk penyandang disabilitas dilengkapi dengan handrail yang memiliki posisi dan ketinggian disesuaikan dengan pengguna kursi roda dan penyandang disabilitas lain dan simbol penyandang disabilitas dalam kondisi baik, rapi dan bersih.</label>
          <select class="form-control" name="bangunan26" id="bangunan26">
            <?php is_terisi($data['wc_disabilitas'], set_value('bangunan26')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan26', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Halaman Puskesmas tidak banjir/tergenang air saat hujan dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan27" id="bangunan27">
            <?php is_terisi($data['halaman_puskesmas'], set_value('bangunan27')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan27', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tersedia drainase yang baik sehingga tidak membuat banjir saat hujan turun.</label>
          <select class="form-control" name="bangunan28" id="bangunan28">
            <?php is_terisi($data['drainase'], set_value('bangunan28')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan28', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Kursi ruang tunggu cukup/memadai untuk jumlah pasien yang datang, tidak sempit dan tidak menganggu alur pelayanan/koridor serta rapi dan bersih</label>
          <select class="form-control" name="bangunan29" id="bangunan29">
            <?php is_terisi($data['kursi_tunggu'], set_value('bangunan29')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan29', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Meubelair Puskesmas dalam kondisi baik, rapi dan bersih</label>
          <select class="form-control" name="bangunan30" id="bangunan30">
            <?php is_terisi($data['meubelair'], set_value('bangunan30')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan30', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat tempat poster penyuluhan yang tertata rapi dan bersih di bangunan Puskesmas</label>
          <select class="form-control" name="bangunan31" id="bangunan31">
            <?php is_terisi($data['tmpt_poster'], set_value('bangunan31')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan31', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat tempat khusus pemasangan spanduk edukasi kesehatan yang rapi dan di halaman Puskesmas</label>
          <select class="form-control" name="bangunan32" id="bangunan32">
            <?php is_terisi($data['tmpt_spanduk'], set_value('bangunan32')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan32', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat taman obat yang tertata rapi di area Puskesmas

          </label>
          <select class="form-control" name="bangunan33" id="bangunan33">
            <?php is_terisi($data['taman_obat'], set_value('bangunan33')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan33', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Puskesmas bebas dari asap rokok

          </label>
          <select class="form-control" name="bangunan34" id="bangunan34">
            <?php is_terisi($data['bebas_rokok'], set_value('bangunan34')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan34', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Semua ruang Puskesmas harus bebas dari tanda keberadaan kecoa</label>
          <select class="form-control" name="bangunan35" id="bangunan35">
            <?php is_terisi($data['bebas_kecoa'], set_value('bangunan35')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan35', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Semua ruang Puskesmas harus bebas dari tanda keberadaan tikus</label>
          <select class="form-control" name="bangunan36" id="bangunan36">
            <?php is_terisi($data['bebas_tikus'], set_value('bangunan36')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan36', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Semua ruang Puskesmas harus bebas dari kucing</label>
          <select class="form-control" name="bangunan37" id="bangunan37">
            <?php is_terisi($data['bebas_kucing'], set_value('bangunan37')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan37', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Angka Bebas Jentik 100%</label>
          <select class="form-control" name="bangunan38" id="bangunan38">
            <?php is_terisi($data['bebas_jentik'], set_value('bangunan38')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan38', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Angka rata-rata populasi lalat < 2 ekor</label> <select class="form-control" name="bangunan39" id="bangunan39">
              <?php is_terisi($data['populasi_lalat'], set_value('bangunan39')); ?>
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              </select>
              <?= form_error('bangunan39', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Angka rata-rata populasi kecoa < 2 ekor</label> <select class="form-control" name="bangunan40" id="bangunan40">
              <?php is_terisi($data['populasi_kecoa'], set_value('bangunan40')); ?>
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              </select>
              <?= form_error('bangunan40', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Terdapat KIR (kartu inventaris ruangan) pada setiap ruangan puskesmas yang telah diisi lengkap</label>
          <select class="form-control" name="bangunan41" id="bangunan41">
            <?php is_terisi($data['kir'], set_value('bangunan41')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan41', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Ketersediaan ruang kantor</strong></label> <br>
          <label for="exampleFormControlInput1">a. Ruang Administrasi</label>
          <select class="form-control" name="bangunan41a" id="bangunan41a">
            <?php is_terisi($data['ruang_admin'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan41a', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">b. Ruang Kantor untuk Karyawan </label>
          <select class="form-control" name="bangunan41b" id="bangunan41b">
            <?php is_terisi($data['ruang_karyawan'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan41b', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">c. Ruang Kepala Puskesmas </label>
          <select class="form-control" name="bangunan41c" id="bangunan41c">
            <?php is_terisi($data['ruang_kepala'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan41c', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">d. Ruang Rapat/Diskusi</label>
          <select class="form-control" name="bangunan41d" id="bangunan41d">
            <?php is_terisi($data['ruang_rapat'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan41d', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Ketersediaan ruang pelayanan</strong></label> <br>
          <label for="exampleFormControlInput1">Ruang Pendaftaran dan Rekam Medis</label>
          <select class="form-control" name="bangunan42.1" id="bangunan42.1">
            <?php is_terisi($data['ruang_pendaftaran'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Pemeriksaan Umum</label>
          <select class="form-control" name="bangunan42.2" id="bangunan42.2">
            <?php is_terisi($data['ruang_pemeriksaaan'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Tindakan dan Gawat Darurat</label>
          <select class="form-control" name="bangunan42.3" id="bangunan42.3">
            <?php is_terisi($data['ruang_tindakan'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.3', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang KIA, KB dan Imunisasi</label>
          <select class="form-control" name="bangunan42.4" id="bangunan42.4">
            <?php is_terisi($data['ruang_kia'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.4', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Pemeriksaan Khusus</label>
          <select class="form-control" name="bangunan42.5" id="bangunan42.5">
            <?php is_terisi($data['ruang_khusus'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.5', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Kesehatan Gigi dan Mulut</label>
          <select class="form-control" name="bangunan42.6" id="bangunan42.6">
            <?php is_terisi($data['ruang_gigi'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.6', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruangan Komunikasi Informasi dan Edukasi (KIE)</label>
          <select class="form-control" name="bangunan42.7" id="bangunan42.7">
            <?php is_terisi($data['ruang_kie'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.7', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Farmasi</label>
          <select class="form-control" name="bangunan42.8" id="bangunan42.8">
            <?php is_terisi($data['ruang_farmasi'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.8', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Farmasi meliputi sarana sebagai berikut:</label><br>
          <label for="exampleFormControlInput1">a. Ruang penerimaan resep</label>
          <select class="form-control" name="bangunan42.9a" id="bangunan42.9a">
            <?php is_terisi($data['ruang_resep'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.9a', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">b. Ruang pelayanan resep dan peracikan</label>
          <select class="form-control" name="bangunan42.9b" id="bangunan42.9b">
            <?php is_terisi($data['ruang_racik'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.9b', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">c. Ruang penyerahan obat</label>
          <select class="form-control" name="bangunan42.9c" id="bangunan42.9c">
            <?php is_terisi($data['ruang_obat'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.9c', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">d. Ruang konseling</label>
          <select class="form-control" name="bangunan42.9d" id="bangunan42.9d">
            <?php is_terisi($data['ruang_konseling'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.9d', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">e. Ruang penyimpanan obat dan BMHP</label>
          <select class="form-control" name="bangunan42.9e" id="bangunan42.9e">
            <?php is_terisi($data['ruang_bmhp'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.9e', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">f. Ruang arsip</label>
          <select class="form-control" name="bangunan42.9f" id="bangunan42.9f">
            <?php is_terisi($data['ruang_arsip'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.9f', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Persalinan </label>
          <select class="form-control" name="bangunan42.10" id="bangunan42.10">
            <?php is_terisi($data['ruang_persalinan'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.10', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Rawat Pasca Persalinan </label>
          <select class="form-control" name="bangunan42.11" id="bangunan42.11">
            <?php is_terisi($data['ruang_pasca'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.11', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Laboratorium</label>
          <select class="form-control" name="bangunan42.12" id="bangunan42.12">
            <?php is_terisi($data['ruang_lab'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.12', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Unit Rawat Inap ditambah dengan:</label><br>
          <label for="exampleFormControlInput1">Ruang KIA KB dan Imunisasi menjadi 2 ruang:</label><br>
          <label for="exampleFormControlInput1">a. Ruang Kesehatan Ibu dan KB</label>
          <select class="form-control" name="bangunan42.13a" id="bangunan42.13a">
            <?php is_terisi($data['ruang_kb'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.13a', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">b. Ruang Kesehatan Anak dan Imunisasi</label>
          <select class="form-control" name="bangunan42.13b" id="bangunan42.13b">
            <?php is_terisi($data['ruang_anak'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.13b', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Rawat Inap</label>
          <select class="form-control" name="bangunan42.14" id="bangunan42.14">
            <?php is_terisi($data['ruang_inap'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.14"', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Kamar mandi/WC ((terpisah laki-laki dan perempuan, dikondisikan untuk dapat digunakan oleh penyandang disabilitas dan lansia)</label>
          <select class="form-control" name="bangunan42.15" id="bangunan42.15">
            <?php is_terisi($data['wc'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan42.15', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Ketersediaan Ruang Penunjang</strong></label><br>
          <label for="exampleFormControlInput1">Ruang Tunggu</label>
          <select class="form-control" name="bangunan43.1" id="bangunan43.1">
            <?php is_terisi($data['ruang_tunggu'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang ASI</label>
          <select class="form-control" name="bangunan43.2" id="bangunan43.2">
            <?php is_terisi($data['ruang_asi'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Sterilisasi</label>
          <select class="form-control" name="bangunan43.3" id="bangunan43.3">
            <?php is_terisi($data['ruang_steril'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.3"', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Cuci Linen</label>
          <select class="form-control" name="bangunan43.4" id="bangunan43.4">
            <?php is_terisi($data['ruang_linen'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.4', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Penyelenggaraan makanan (dapur/pantry)</label>
          <select class="form-control" name="bangunan43.5" id="bangunan43.5">
            <?php is_terisi($data['ruang_dapur'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.5', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Unit Rawat Inap ditambah dengan</label><br>
          <label for="exampleFormControlInput1">a. Ruang Jaga Petugas</label>
          <select class="form-control" name="bangunan43.6a" id="bangunan43.6a">
            <?php is_terisi($data['ruang_jaga'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.6a"', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Gudang Umum</label>
          <select class="form-control" name="bangunan43.7" id="bangunan43.7">
            <?php is_terisi($data['gudang_umum'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.7', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Kamar mandi/WC Pasien/pengunjung (terpisah laki-laki dan perempuan, dikondisikan untuk dapat digunakan oleh penyandang disabilitas dan lansia)</label>
          <select class="form-control" name="bangunan43.8" id="bangunan43.8">
            <?php is_terisi($data['wc_pasien'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.8"', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Rumah dinas tenaga kesehatan</label>
          <select class="form-control" name="bangunan43.9" id="bangunan43.9">
            <?php is_terisi($data['rumah_dinas'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.9', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Parkir kendaraan roda 2</label>
          <select class="form-control" name="bangunan43.10" id="bangunan43.10">
            <?php is_terisi($data['roda_2'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.10', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Parkir Kendaraan Roda 4</label>
          <select class="form-control" name="bangunan43.11" id="bangunan43.11">
            <?php is_terisi($data['roda_4'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.11', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Garasi Ambulans/Pusling</label>
          <select class="form-control" name="bangunan43.12" id="bangunan43.12">
            <?php is_terisi($data['garasi_ambulan'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.12', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Area khusus penyimpanan Tabung O2 </label>
          <select class="form-control" name="bangunan43.13" id="bangunan43.13">
            <?php is_terisi($data['area_tabung'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.13', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ruang Lainnya …………………………… (selain yang tertulis diatas) </label>
          <input type="text" class="form-control" value="<?= set_value('bangunan43.14') ?>" placeholder="ruang lainnya" name="bangunan43.14" id="bangunan43.14">
          <?= form_error('bangunan43.14', '<small class="text-danger pl-3">', '</small>'); ?>
          <select class="form-control" name="bangunan43.15" id="bangunan43.15">
            <?php is_terisi($data['ruang_lain'], set_value('bangunan')); ?>
            <option value="1">Ya</option>
            <option value="2">Tidak</option>
          </select>
          <?= form_error('bangunan43.15', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</button>
      </form>
    </div>
  </div>
</div>