<div class="site-section col-md-9">
    <div class="container" style="margin-top:-100px;">
        <?php if ($data) {
            $link = '';
            $button = 'Simpan Edit';
        } else {
            $link = base_url('Provinsi/tambah_penilaian_pembinaan');
            $button = 'Simpan';
        }
        ?>
        <form style="padding:20px;" method="POST" action="<?= $link; ?>">
            <?php if ($kode_kabupaten) : ?>
                <input type="hidden" class="form-control" placeholder="" name="kode_kabupaten" id="kode_kabupaten" value="<?= $kode_kabupaten; ?>">
            <?php else : ?>
                <input type="hidden" class="form-control" placeholder="" name="kode_kabupaten" id="kode_kabupaten" value="<?= set_value('kode_kabupaten'); ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong> A. Pelaksanaan Langkah-Langkah Pembinaan Terpau</strong>
                    <label for="exampleFormControlInput1">Pembagian cluter binaan dinas kesehatan kab/kota
                        <label for="exampleFormControlInput1">Seluruh puskesmas telah masuk ke dalam cluster binaan dinkes kab/kota
                            <br>
                            <span><strong> Penilaian</strong> </span>
                            <br>
                            <p style="font-size:12px;">
                                1. Ya = 10 <br>
                                2. Tidak = 0

                            </p>
                            <select class="form-control" name="pemantauan1" id="pemantauan1">
                                <?php is_terisi($data['cluster_binaan'], set_value('pemantauan1')); ?>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <?= form_error('pemantauan1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pembentukan TPT dengan keterwakilan seluruh bidang dan sekretariat di Dinkes kab/kota
                    <label for="exampleFormControlInput1">a. Tersedia SK Tim Pembina Terpadu (TPT) yang ditandatangani Kadinkes Kab/Kota
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Tidak = 0

                        </p>
                        <select class="form-control" name="pemantauan1a" id="pemantauan1a">
                            <?php is_terisi($data['sk_tim'], set_value('pemantauan1a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('pemantauan1a', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Setiap cluster binaan terdiri atas perwakilan seluruh bidang dan sekretariat
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan1b" id="pemantauan1b">
                        <?php is_terisi($data['cluster_perwakilan'], set_value('pemantauan1b')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan1b', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Peningkatan Kompetensi TPT
                    <label for="exampleFormControlInput1">a. Dilaksanakannya pengenalan peran, tugas dan fungsi antar bidang dan sekretariat dalam organisasi dinkes kab/kota oleh Kadinkes kab/kota
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Tidak = 0

                        </p>
                        <select class="form-control" name="pemantauan2a" id="pemantauan2a">
                            <?php is_terisi($data['pengenalan_peran'], set_value('pemantauan2a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('pemantauan2a', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Dilaksanakannya pengenalan NSPK, program dan manajemen sumber daya oleh masing2 kepala bidang
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan2b" id="pemantauan2b">
                        <?php is_terisi($data['nspk'], set_value('pemantauan2b')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan2b', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Dilaksanakannya peningkatan kemampuan dalam pengolahan dan analisis data
                    <br><span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan2c" id="pemantauan2c">
                        <?php is_terisi($data['pengolahan_analisis'], set_value('pemantauan2c')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan2c', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Dilakukan Analisis Situasi Puskesmas
                    <label for="exampleFormControlInput1">a. Dilakukan analisis terhadap pencapaian target kinerja program Puskesmas dan kecenderungannya (trend analysis)
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Tidak = 0

                        </p>
                        <select class="form-control" name="pemantauan3a" id="pemantauan3a">
                            <?php is_terisi($data['trend_analysis'], set_value('pemantauan3a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('pemantauan3a', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Dilakukan analisis keterlibatan lintas sektor dan tokoh masyarakat
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan3b" id="pemantauan3b">
                        <?php is_terisi($data['lintas_sektor'], set_value('pemantauan3b')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan3b', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Dilakukan analisis keterpaduan lintas program dalam pelayanan Puskesmas
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan3c" id="pemantauan3c">
                        <?php is_terisi($data['lintas_program'], set_value('pemantauan3c')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan3c', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Persiapan Pelaksanaan Pembinaan, rincian kegiatan
                    <label for="exampleFormControlInput1">a. Tersusunnya dokumen perencanaan pelaksanaan pembinaan oleh TPT
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Tidak = 0

                        </p>
                        <select class="form-control" name="pemantauan4a" id="pemantauan4a">
                            <?php is_terisi($data['tpt'], set_value('pemantauan4a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('pemantauan4a', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Tersusunnya rincian kegiatan pembinaan oleh masing-masing anggota TPT mencakup gambaran strategis Puskesmas, tujuan, metode, sasaran, rincian kegiatan, dukungan sumber daya, jadwal pelaksanaan dan proses pemantauan dan evaluasi.
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan4b" id="pemantauan4b">
                        <?php is_terisi($data['rincian_tpt'], set_value('pemantauan4b')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan4b', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Dilakukan simulasi pembinaan</label>
                <label for="exampleFormControlInput1">Simulasi pembinaan dilakukan sebelum pelaksanaan pembinaan oleh TPT</label>
                <br>
                <span><strong> Penilaian</strong> </span>

                <p style="font-size:12px;">
                    1. Ya = 10 <br>
                    2. Tidak = 0

                </p>
                <select class="form-control" name="pemantauan5" id="pemantauan5">
                    <?php is_terisi($data['simulasi_pembinaan'], set_value('pemantauan5')); ?>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <?= form_error('pemantauan5', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pelaksanaan pembinaan
                    <label for="exampleFormControlInput1">a. Dilakukan pembinaan tidak langsung dalam bentuk pemberian umpan balik oleh TPT terhadap laporan Puskesmas setiap bulan
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya, dilakukan oleh semua TPT. Nilai = 10<br>
                            2. Ya, dilakukan oleh sebagian TPT. Nilai = 5<br>
                            3. Tidak dilakukan. Nilai =0

                        </p>
                        <select class="form-control" name="pemantauan6a" id="pemantauan6a">
                            <?php is_terisi($data['setiap_bulan'], set_value('pemantauan6a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <?= form_error('pemantauan6a', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Dilakukan pembinaan tidak langsung dalam bentuk pertemuan internal untuk masing-masing TPT secara berkala setiap 3 bulan
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan6b" id="pemantauan6b">
                        <?php is_terisi($data['internal'], set_value('pemantauan6b')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan6b', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Pembinaan langsung ke seluruh Puskesmas dilakukan minimal 1x dalam setahun
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan6c" id="pemantauan6c">
                        <?php is_terisi($data['1x_setahun'], set_value('pemantauan6c')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan6c', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">d. Pembinaan langsung menggunakan instrumen monitoring dan evaluasi Pembinaan ke Puskemas
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan6d" id="pemantauan6d">
                        <?php is_terisi($data['monitoring_evaluasi'], set_value('pemantauan6d')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan6d', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Monitoring dan Evaluasi Pembinaan
                    <label for="exampleFormControlInput1">a. Tersusunnya Instrumen Monitoring Pelaksanaan Pembinaan TPT untuk melihat kesesuaian pelaksanaan pembinaan dengan perencanaan pembinaan.
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Tidak = 0

                        </p>
                        <select class="form-control" name="pemantauan7a" id="pemantauan7a">
                            <?php is_terisi($data['tersusunnya_instrumen'], set_value('pemantauan7a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('pemantauan7a', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Tersusunnya laporan monitoring dan evaluasi pembinaan
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya, dilakukan oleh semua TPT. Nilai = 10<br>
                        2. Ya, dilakukan oleh sebagian TPT. Nilai = 5<br>
                        3. Tidak dilakukan. Nilai =0

                    </p>
                    <select class="form-control" name="pemantauan7b" id="pemantauan7b">
                        <?php is_terisi($data['tersusunnya_laporan'], set_value('pemantauan7b')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <?= form_error('pemantauan7b', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Seluruh rencana tindak lanjut pembinaan (langsung dan tidak langsung) dilaksanakan oleh dinas kesehatan kabupaten/kota
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya, dilakukan oleh semua TPT. Nilai = 10<br>
                        2. Ya, dilakukan oleh sebagian TPT. Nilai = 5<br>
                        3. Tidak dilakukan. Nilai =0

                    </p>
                    <select class="form-control" name="pemantauan7c" id="pemantauan7c">
                        <?php is_terisi($data['kesehatan_kabupaten'], set_value('pemantauan7c')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <?= form_error('pemantauan7c', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">d. Dilaksanakannya pertemuan evaluasi pembinaan di akhir tahun yang dihadiri oleh Kadinkes kab/kota
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Tidak = 0

                    </p>
                    <select class="form-control" name="pemantauan7d" id="pemantauan7d">
                        <?php is_terisi($data['akhir_tahun'], set_value('pemantauan7d')); ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?= form_error('pemantauan7d', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>


            <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
        </form>
    </div>
</div>