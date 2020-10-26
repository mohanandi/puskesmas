<div class="site-section col-md-9">
    <div class="container" style="margin-top:-100px;">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong> A. Pelaksanaan Langkah-Langkah Pembinaan Terpau</strong>
                    <label for="exampleFormControlInput1">Pembagian cluter binaan dinas kesehatan kab/kota
                        <label for="exampleFormControlInput1">Seluruh puskesmas telah masuk ke dalam cluster binaan dinkes kab/kota
                            <br>
                            <span><strong> Penilaian</strong> </span>
                            <br>
                            <p style="font-size:12px;">
                                1. Ya = 10 <br>
                                2. Sebagian = 5 <br>
                                3. Tidak = 0

                            </p>
                            <input type="text" class="form-control" value="<?= $data['cluster_binaan']; ?>" placeholder="" name="pemantauan1" id="pemantauan1" readonly>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pembentukan TPCB dengan keterwakilan seluruh bidang dan sekretariat di Dinkes kab/kota
                    <label for="exampleFormControlInput1">a. Tersedia SK Tim Pembina Cluster Binaan (TPCB) yang ditandatangani Kadinkes Kab/Kota
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Sebagian = 5 <br>
                            3. Tidak = 0

                        </p>
                        <input type="text" class="form-control" value="<?= $data['sk_tim']; ?>" placeholder="" name="pemantauan1a" id="pemantauan1a" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Setiap cluster binaan terdiri atas perwakilan seluruh bidang dan sekretariat
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['cluster_perwakilan']; ?>" placeholder="" name="pemantauan1b" id="pemantauan1b" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Peningkatan Kompetensi TPCB
                    <label for="exampleFormControlInput1">a. Dilaksanakannya pengenalan peran, tugas dan fungsi antar bidang dan sekretariat dalam organisasi dinkes kab/kota oleh Kadinkes kab/kota
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Sebagian = 5 <br>
                            3. Tidak = 0

                        </p>
                        <input type="text" class="form-control" value="<?= $data['pengenalan_peran']; ?>" placeholder="" name="pemantauan2a" id="pemantauan2a" readonly>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Dilaksanakannya pengenalan NSPK, program dan manajemen sumber daya oleh masing2 kepala bidang
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['nspk']; ?>" placeholder="" name="pemantauan2b" id="pemantauan2b" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Dilaksanakannya peningkatan kemampuan dalam pengolahan dan analisis data
                    <br><span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['pengolahan_analisis']; ?>" placeholder="" name="pemantauan2c" id="pemantauan2c" readonly>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Dilakukan Analisis Situasi Puskesmas
                    <label for="exampleFormControlInput1">a. Dilakukan analisis terhadap pencapaian target kinerja program Puskesmas dan kecenderungannya (trend analysis)
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Sebagian = 5 <br>
                            3. Tidak = 0

                        </p>
                        <input type="text" class="form-control" value="<?= $data['trend_analysis']; ?>" placeholder="" name="pemantauan3a" id="pemantauan3a" readonly>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Dilakukan analisis keterlibatan lintas sektor dan tokoh masyarakat
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['lintas_sektor']; ?>" placeholder="" name="pemantauan3b" id="pemantauan3b" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Dilakukan analisis keterpaduan lintas program dalam pelayanan Puskesmas
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['lintas_program']; ?>" placeholder="" name="pemantauan3c" id="pemantauan3c" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Persiapan Pelaksanaan Pembinaan, rincian kegiatan
                    <label for="exampleFormControlInput1">a. Tersusunnya dokumen perencanaan pelaksanaan pembinaan oleh TPCB
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Sebagian = 5 <br>
                            3. Tidak = 0

                        </p>
                        <input type="text" class="form-control" value="<?= $data['tpt']; ?>" placeholder="" name="pemantauan4a" id="pemantauan4a" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Tersusunnya rincian kegiatan pembinaan oleh masing-masing anggota TPCB mencakup gambaran strategis Puskesmas, tujuan, metode, sasaran, rincian kegiatan, dukungan sumber daya, jadwal pelaksanaan dan proses pemantauan dan evaluasi.
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['rincian_tpt']; ?>" placeholder="" name="pemantauan4b" id="pemantauan4b" readonly>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Dilakukan simulasi pembinaan </label><br>
                <label for="exampleFormControlInput1">Simulasi pembinaan dilakukan sebelum pelaksanaan pembinaan oleh TPCB </label>
                <br>
                <span><strong> Penilaian</strong> </span>

                <p style="font-size:12px;">
                    1. Ya = 10 <br>
                    2. Sebagian = 5 <br>
                    3. Tidak = 0

                </p>
                <input type="text" class="form-control" value="<?= $data['simulasi_pembinaan']; ?>" placeholder="" name="pemantauan5" id="pemantauan5" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Pelaksanaan pembinaan
                    <label for="exampleFormControlInput1">a. Dilakukan pembinaan tidak langsung dalam bentuk pemberian umpan balik oleh TPCB terhadap laporan Puskesmas setiap bulan
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya, dilakukan oleh semua TPCB. Nilai = 10<br>
                            2. Ya, dilakukan oleh sebagian TPCB. Nilai = 5<br>
                            3. Tidak dilakukan. Nilai =0

                        </p>
                        <input type="text" class="form-control" value="<?= $data['setiap_bulan']; ?>" placeholder="" name="pemantauan6a" id="pemantauan6a" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Dilakukan pembinaan tidak langsung dalam bentuk pertemuan internal untuk masing-masing TPCB secara berkala setiap 3 bulan
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['internal']; ?>" placeholder="" name="pemantauan6b" id="pemantauan6b" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Pembinaan langsung ke seluruh Puskesmas dilakukan minimal 1x dalam setahun
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['1x_setahun']; ?>" placeholder="" name="pemantauan6c" id="pemantauan6c" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">d. Pembinaan langsung menggunakan instrumen monitoring dan evaluasi Pembinaan ke Puskemas
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['monitoring_evaluasi']; ?>" placeholder="" name="pemantauan6d" id="pemantauan6d" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Monitoring dan Evaluasi Pembinaan
                    <label for="exampleFormControlInput1">a. Tersusunnya Instrumen Monitoring Pelaksanaan Pembinaan TPCB untuk melihat kesesuaian pelaksanaan pembinaan dengan perencanaan pembinaan.
                        <br>
                        <span><strong> Penilaian</strong> </span>

                        <p style="font-size:12px;">
                            1. Ya = 10 <br>
                            2. Sebagian = 5 <br>
                            3. Tidak = 0

                        </p>
                        <input type="text" class="form-control" value="<?= $data['tersusunnya_instrumen']; ?>" placeholder="" name="pemantauan7a" id="pemantauan7a" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">b. Tersusunnya laporan monitoring dan evaluasi pembinaan
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya, dilakukan oleh semua TPCB. Nilai = 10<br>
                        2. Ya, dilakukan oleh sebagian TPCB. Nilai = 5<br>
                        3. Tidak dilakukan. Nilai =0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['tersusunnya_laporan']; ?>" placeholder="" name="pemantauan7b" id="pemantauan7b" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">c. Seluruh rencana tindak lanjut pembinaan (langsung dan tidak langsung) dilaksanakan oleh dinas kesehatan kabupaten/kota
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya, dilakukan oleh semua TPCB. Nilai = 10<br>
                        2. Ya, dilakukan oleh sebagian TPCB. Nilai = 5<br>
                        3. Tidak dilakukan. Nilai =0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['kesehatan_kabupaten']; ?>" placeholder="" name="pemantauan7c" id="pemantauan7c" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">d. Dilaksanakannya pertemuan evaluasi pembinaan di akhir tahun yang dihadiri oleh Kadinkes kab/kota
                    <br>
                    <span><strong> Penilaian</strong> </span>

                    <p style="font-size:12px;">
                        1. Ya = 10 <br>
                        2. Sebagian = 5 <br>
                        3. Tidak = 0

                    </p>
                    <input type="text" class="form-control" value="<?= $data['akhir_tahun']; ?>" placeholder="" name="pemantauan7d" id="pemantauan7d" readonly>


            </div>
            <a class="btn float-right btn-danger" href="<?= base_url('Provinsi/') ?>penilaian_kabupaten_ubah/<?= $data['kode'] ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
        </form>
    </div>
</div>