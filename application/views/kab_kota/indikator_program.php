<div class="site-section" id="menu">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading">Form Menu</span>
                <h2 class="heading"><strong class="text-primary">Cakupan Indikator Program</strong></h2>
            </div>
        </div>
        <?php if ($data) {
            $link = '';
            $button = 'Simpan Edit';
        } else {
            $link = base_url('Indikator_Program/tambah');
            $button = 'Simpan';
        }
        ?>
        <form style=" padding:20px;" method="POST" action="<?= $link; ?>">
            <?php if ($kode_puskesmas) : ?>
                <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= $kode_puskesmas; ?>">
            <?php else : ?>
                <input type="hidden" class="form-control" placeholder="" name="kode_puskesmas" id="kode_puskesmas" value="<?= set_value('kode_puskesmas'); ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>VIII.A. KIA</strong></label><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">1. Ibu hamil mendapatkan pelayanan antenatal sesuai standar<br> DO:<br> Pelayanan antenatal sesuai standar yaitu ibu hamil yang mendapatkan pelayanan paling sedikit 4 kali selama kehamilannya dengan distribusi waktu yaitu 1 kali pada trimester ke-1, 1 kali pada trimester ke-2, dan 2 kali pada trimester ke-3 </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">a. Tersedia regulasi internal program pelayanan antenatal (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_a1a" id="cakupan_a1a">
                            <?php is_terisi($data['kia1a'], set_value('cakupan_a1a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_a1a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_a1b" id="cakupan_a1b">
                            <?php is_terisi($data['kia1b'], set_value('cakupan_a1b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_a1b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">c. Persentase ibu hamil yang mendapatkan pelayanan sesuai standar. (Jumlah ibu hamil yang mendapatkan pelayanan antenatal sesuai standar dibagi dengan jumlah ibu hamil yang ada di wilayah kerja Puskesmas, dikali 100%)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % ibu hamil mendapatkan pelayanan antenatal sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['kia1c']; ?>" placeholder="" name="cakupan_a1c" id="cakupan_a1c">

                        <?= form_error('cakupan_a1c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">2. Bayi baru lahir memperoleh pelayanan neonatal esensial<br> DO:<br>Jumlah bayi baru baru lahir yang mendapatkan pelayanan neonatal esensial sesuai standar meliputi pada saat lahir (0 – 6 jam) dan setelah lahir (6 jam – 28 hari) terdiri dari:<br>● Saat Lahir (0-6 jam) <br> 1) Perawatan neonatal 0-30 detik<br> 2) Perawatan neonatal 30 detik – 90 menit <br>3) Perawatan neonatal 90 menit – 6 jam<br>● Setelah lahir (6 Jam – 28 hari)<br>1) Kunjungan Neonatal 1 (6 – 48 jam)<br>2) Kunjungan Neonatal 2 (3 hari – 7 hari)<br>3) Kunjungan Neonatal 3 (8 hari – 28 hari) </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">a. Tersedia regulasi internal program pelayanan bayi baru lahir (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_a2a" id="cakupan_a2a">
                            <?php is_terisi($data['kia2a'], set_value('cakupan_a2a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_a2a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_a2b" id="cakupan_a2b">
                            <?php is_terisi($data['kia2b'], set_value('cakupan_a2b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_a2b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">c. Persentase bayi baru lahir yang mendapatkan pelayanan neonatal esensial sesuai standar. (Jumlah bayi baru lahir yang mendapatkan pelayanan neonatal esensial sesuai standar dibagi dengan jumlah bayi baru lahir yang ada di wilayah kerja Puskesmas, dikali 100%) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % bayi baru lahir mendapatkan pelayanan neonatal esensial sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['kia2c']; ?>" placeholder="" name="cakupan_a2c" id="cakupan_a2c">

                        <?= form_error('cakupan_a2c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">3. Bayi baru lahir memperoleh pelayanan sesuai standar<br> DO:<br>Bayi baru lahir yang memperoleh pelayanan sesuai standar meliputi:<br>1) Menjaga bayi tetap hangat<br>2) Mengisap lendir dari mulut dan hidung (jika perlu)<br>3) Keringkan<br>4) Memantau tanda bahaya<br>5) Klem, potong dan ikat tali pusat tanpa membubuhi apapun, kira-kira 2 menit* setelah lahir<br>6) Melakukan Inisiasi Menyusu Dini<br>7) Memberikan suntikan vitamin K1 1 mg itramuskular, di paha kiri anterolateral setelah Inisiasi Menyusu Dini<br>8) Memberikan salep mata antibiotika pada kedua mata<br>9) Melakukan pemeriksaan fisis<br>10) Memberi imunisasi Hepatitis B 0,5 mL intramuskular, di paha.</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">a. Tersedia regulasi internal program pelayanan bayi baru lahir (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_a3a" id="cakupan_a3a">
                            <?php is_terisi($data['kia3a'], set_value('cakupan_a3a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_a3a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_a3b" id="cakupan_a3b">
                            <?php is_terisi($data['kia3b'], set_value('cakupan_a3b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_a3b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">c. Persentase bayi baru lahir yang mendapatkan pelayanan sesuai standar. (Jumlah bayi baru lahir yang mendapatkan pelayanan sesuai standar dibagi dengan jumlah bayi baru lahir yang ada di wilayah kerja Puskesmas, dikali 100%)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % bayi baru lahir mendapatkan pelayanan neonatal esensial sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['kia3c']; ?>" placeholder="" name="cakupan_a3c" id="cakupan_a3c">

                        <?= form_error('cakupan_a3c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>VIII.B. Imunisasi</strong></label><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">1. Bayi mendapatkan imunisasi dasar lengkap <br>DO:<br>• Jumlah bayi yang mendapatkan imunisasi dasar lengkap adalah jumlah bayi yang telah berusia 9-11 bulan di wilayah kerja Puskesmas dalam waktu 1 tahun telah mendapatkan imunisasi dasar lengkap meliputi:<br>1) Hb0 1 kali<br>2) BCG 1 kali<br>3) Polio tetes 4 kali<br>4) DPT-HB-HIB 3 kali<br>5) Campak 1 kali<br>6) Rubella 1 kali<br>• Perhitungan pencatatan pemberian imunisasi berdasarkan jenis antigen pada kohort bayi dan atau buku KIA di setiap tempat pelayanan imunisasi (Posyandu, Poskesdes, Pustu, Puskesmas, dll). </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">a. Tersedia regulasi internal program imunisasi dasar lengkap (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_b1a" id="cakupan_b1a">
                            <?php is_terisi($data['imunisasi1a'], set_value('cakupan_b1a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_b1a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_b1b" id="cakupan_b1b">
                            <?php is_terisi($data['imunisasi1b'], set_value('cakupan_b1b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_b1b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase bayi yang mendapatkan imunisasi dasar lengkap. (Jumlah bayi yang telah mendapatkan imunisasi dasar lengkap dibagi Jumlah bayi berusia 9-11 bulan dalam 1 tahun dalam wilayah kerja Puskesmas, dikali 100%) | % bayi mendapatkan imunisasi dasar lengkap dikali 50%</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % bayi mendapatkan imunisasi dasar lengkap dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['imunisasi1c']; ?>" placeholder="" name="cakupan_b1c" id="cakupan_b1c">

                        <?= form_error('cakupan_b1c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>VIII.C. Gizi</strong></label><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>1. Balita gizi buruk yang mendapatkan penanganan sesuai standar di Puskesmas<br> DO:</strong><br>Tata laksana anak balita dengan BB/TB< -3 SD dan atau dengan gejala klinis yang dirawat inap maupun rawat jalan di fasilitas pelayanan kesehatan atau masyarakat sesuai dengan standar Tata Laksana Gizi Buruk (TAGB) </label> <br>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">a. Tersedia regulasi internal program penanganan balita gizi buruk (SK, SOP, Pedoman, Panduan) </label>
                                <br>
                                <span><strong> Penilaian</strong> </span>
                                <p style="font-size:12px;">
                                    1. Ya<br>
                                    2. Tidak
                                </p>
                                <select class="form-control" name="cakupan_c1a" id="cakupan_c1a">
                                    <?php is_terisi($data['gizi1a'], set_value('cakupan_c1a')); ?>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <?= form_error('cakupan_c1a', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                                <br>
                                <span><strong> Penilaian</strong> </span>
                                <p style="font-size:12px;">
                                    1. Ya<br>
                                    2. Tidak
                                </p>
                                <select class="form-control" name="cakupan_c1b" id="cakupan_c1b">
                                    <?php is_terisi($data['gizi1b'], set_value('cakupan_c1b')); ?>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <?= form_error('cakupan_c1b', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">c. Persentase balita gizi buruk yang mendapatkan penanganan sesuai standar. (Jumlah kasus balita gizi buruk yang mendapatkan penanganan sesuai standar di wilayah kerja Puskesmas dibagi jumlah kasus balita gizi buruk yang ditemukan dalam 1 tahun di wilayah kerja Puskesmas, dikali 100%) </label>
                                <br>
                                <span><strong> Penilaian</strong> </span>
                                <p style="font-size:12px;">
                                    % balita gizi buruk yang mendapatkan penanganan sesuai standar dikali 50%
                                </p>
                                <input type="number" step=any class="form-control" value="<?= $data['gizi1c']; ?>" placeholder="" name="cakupan_c1c" id="cakupan_c1c">

                                <?= form_error('cakupan_c1c', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>VIII.D. Pencegahan dan Pengendalian Penyakit</strong></label><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>1. Orang terduga TBC mendapatkan pelayanan kesehatan sesuai standar<br> DO:</strong><br>• Orang terduga TBC adalah orang yang kontak erat dengan penderita TBC dan atau yang menunjukkan gejala batuk ≥ 2 minggu diserta dengan gejala lainnya.<br>• Pelayanan orang terduga TBC sesuai standar meliputi:<br>1) Pemeriksaan klinis meliputi pemeriksaan gejala dan tanda<br>2) Pemeriksaan penunjang adalah pemeriksaan dahak dan/atau bakteriologis dan/atau radiologis<br>3) Edukasi perilaku berisiko dan pencegahan penularan. </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">a. Tersedia regulasi internal program TBC (SK, SOP, Pedoman, Panduan)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d1a" id="cakupan_d1a">
                            <?php is_terisi($data['pencegahan1a'], set_value('cakucakupan_d1apan_')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d1a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d1b" id="cakupan_d1b">
                            <?php is_terisi($data['pencegahan1b'], set_value('cakupan_d1b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d1b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase orang terduga TBC mendapatkan pelayanan kesehatan sesuai standar. (Jumlah orang terduga TBC yang dilakukan pemeriksaan penunjang dibagi jumlah orang terduga TBC dalam kurun waktu satu tahun di wilayah kerja Puskesmas, dikali 100%) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % orang terduga TBC mendapatkan pelayanan sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan1c']; ?>" placeholder="" name="cakupan_d1c" id="cakupan_d1c">

                        <?= form_error('cakupan_d1c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>2. Orang dengan risiko terinfeksi HIV mendapatkan pelayanan kesehatan sesuai standar<br> DO:</strong><br>• Orang dengan risiko terinfeksi HIV adalah<br>1) Ibu hamil<br>2) Pasien TBC<br>3) Pasien Infeksi Menular Seksual (IMS)<br>4) Penjaja seks<br>5) Lelaki yang berhubungan seks dengan lelaki<br>6) Transgender/waria<br>7) Pengguna napza suntik<br>8) Warga binaan Pemasyarakatan<br>• Pelayanan kesehatan yang diberikan kepada orang dengan risiko terinfeksi HIV sesuai standar meliputi:<br>1) Edukasi perilaku berisiko dan pencegahan penularan<br>2) Skrining dengan pemeriksaan Tes Cepat HIV</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program HIV (SK, SOP, Pedoman, Panduan)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d2a" id="cakupan_d2a">
                            <?php is_terisi($data['pencegahan2a'], set_value('cakupan_d2a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d2a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d2b" id="cakupan_d2b">
                            <?php is_terisi($data['pencegahan2b'], set_value('cakupan_d2b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d2b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase orang dengan risiko terinfeksi HIV mendapatkan pelayanan kesehatan sesuai standar (Jumlah orang dengan risiko terinfeksi HIV yang mendapatkan pelayanan sesuai standar dibagi jumlah orang dengan risiko terinfeksi HIV dalam 1 tahun di wilayah kerja Puskesmas, dikali 100%)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % orang dengan risiko terinfeksi HIV mendapatkan pelayanan kesehatan sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan2c']; ?>" placeholder="" name="cakupan_d2c" id="cakupan_d2c">

                        <?= form_error('cakupan_d2c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>3. Ibu Hamil yang dilakukan pemeriksaan Hepatitis B<br> DO:</strong><br>Pemeriksaan Hepatitis B dilakukan kepada Ibu Hamil sesuai standar meliputi:<br>1) Edukasi pencegahan dan pengendalian penularan Hepatitis B<br>2) Deteksi dini dilakukan dengan pemeriksaan Tes Cepat HbSAg<br>3) Deteksi dini Hepatitis B minimal 1 kali selama kehamilan di fasilitas pelayanan kesehatan</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program pemeriksaan Hepatitis B pada ibu hamil (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d3a" id="cakupan_d3a">
                            <?php is_terisi($data['pencegahan3a'], set_value('cakupan_d3a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d3a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d3b" id="cakupan_d3b">
                            <?php is_terisi($data['pencegahan3b'], set_value('cakupan_d3b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d3b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase ibu hamil yang dilakukan pemeriksaan Hepatitis B. (Jumlah Ibu Hamil yang mendapatkan pemeriksaan Hepatitis B sesuai standar dibagi jumlah Ibu Hamil dalam 1 tahun di wilayah kerja Puskesmas, dikali 100%) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % ibu hamil yang dilakukan pemeriksaan Hepatitis B dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan3c']; ?>" placeholder="" name="cakupan_d3c" id="cakupan_d3c">
                        <?= form_error('cakupan_d3c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>4. Persentase ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar<br> DO:</strong><br>Pelayanan kesehatan pada ODGJ berat sesuai standar bagi psikotik akut dan Skizofrenia meliputi:<br>1) Pemeriksaan kesehatan jiwa meliputi pemeriksaan status mental dan wawancara<br>2) Edukasi kepatuhan minum obat<br>3) Rujukan jika diperlukan</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program ODGJ Berat (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d4a" id="cakupan_d4a">
                            <?php is_terisi($data['pencegahan4a'], set_value('cakupan_d4a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d4a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d4b" id="cakupan_d4b">
                            <?php is_terisi($data['pencegahan4b'], set_value('cakupan_d4b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d4b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar. (Jumlah ODGJ berat di wilayah kerja kab/kota yang mendapatkan pelayanan kesehatan jiwa sesuai standar dalam kurun waktu satu tahun dibagi jumlah ODGJ berat dalam 1 tahun di wilayah kerja Puskesmas, dikali 100) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan4c']; ?>" placeholder="" name="cakupan_d4c" id="cakupan_d4c">

                        <?= form_error('cakupan_d4c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>5. Orang usia ≥ 15 tahun, yang mendapatkan pelayanan terpadu (PANDU) di Puskesmas.<br> DO:</strong><br>• Skrining faktor resiko PTM adalah skrining yang dilakukan minimal 1 kali setahun meliputi:<br>- pengukuran TB, BB, Lingkar Perut<br>- pengukuran TD, Pemeriksaan gula darah, anamnesa perilaku beresiko (merokok)<br>- penggunaan CHARTA PREDIKSI PTM<br>• membina Posbindu di wilayah kerjanya<br>• Tindaklanjut hasil skrining kesehatan meliputi:<br>- Penanganan sesuai standard<br>- Konseling Upaya Berhenti Merokok (UBM)<br>- memberikan penyuluhan Kesehatan<br>- Melakukan rujukan ke Fasyankes jika diperlukan </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program PANDU PTM (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d5a" id="cakupan_d5a">
                            <?php is_terisi($data['pencegahan5a'], set_value('cakupan_d5a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d5a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d5b" id="cakupan_d5b">
                            <?php is_terisi($data['pencegahan5b'], set_value('cakupan_d5b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d5b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase orang usia ≥ 15 tahun, yang mendapatkan pelayanan terpadu (PANDU) di Puskesmas. (Jumlah orang usia ≥ 15 tahun yang mendapatkan pelayanan terpadu (PANDU) di Puskesmas dibagi jumlah orang usia ≥ 15 tahun di wilayah kerja Puskesmas, dikali 100%).</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % ODGJ berat yang mendapatkan pelayanan kesehatan jiwa sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan5c']; ?>" placeholder="" name="cakupan_d5c" id="cakupan_d5c">

                        <?= form_error('cakupan_d5c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>6. Wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS,<br> DO:</strong><br>• Jumlah wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS<br>• Tersedianya SDM kesehatan yang terlatih<br>• Tindaklanjut IVA positif dengan krioterapi di FKTP atau merujuk ke FKTP yang mempunyai krioterapi<br>• Rujukan ke FKRTL untuk kasus yang tidak dapat ditangani di FKTP </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d6a" id="cakupan_d6a">
                            <?php is_terisi($data['pencegahan6a'], set_value('cakupan_d6a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d6a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d6b" id="cakupan_d6b">
                            <?php is_terisi($data['pencegahan6b'], set_value('cakupan_d6b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d6b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS. (Jumlah wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS dibagi jumlah wanita usia 30 – 50 tahun di wilayah kerja Puskesmas, dikali 100%. </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % wanita usia 30 – 50 tahun yang sudah menikah atau berhubungan seksual yang melakukan deteksi dini kanker leher rahim dengan IVA dan kanker payudara dengan SADANIS dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan6c']; ?>" placeholder="" name="cakupan_d6c" id="cakupan_d6c">

                        <?= form_error('cakupan_d6c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>7. Penderita DM usia 15 tahun ke atas yang mendapatkan pelayanan sesuai standar<br> DO:</strong><br>Pelayanan kesehatan DM sesuai standar meliputi:<br>1) Pengukuran gula darah minimal 1 kali sebulan di fasilitas pelayanan kesehatan<br>2) Edukasi perubahan gaya hidup dana tau mutrisi<br>3) Terapi farmakologi<br>4) Melakukan rujukan jika diperlukan.</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program DM (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d7a" id="cakupan_d7a">
                            <?php is_terisi($data['pencegahan7a'], set_value('cakupan_d7a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d7a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d7b" id="cakupan_d7b">
                            <?php is_terisi($data['pencegahan7b'], set_value('cakupan_d7b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d7b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase penderita DM usia 15 tahun ke atas yang mendapatkan pelayanan sesuai standar (Jumlah penderita DM usia ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar dibagi jumlah penderita DM usia ≥ 15 tahun dalam 1 tahun di wilayah kerja Puskesmas dikali 100%) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % penderita DM usia 15 tahun ke atas yang mendapatkan pelayanan sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan7c']; ?>" placeholder="" name="cakupan_d7c" id="cakupan_d7c">

                        <?= form_error('cakupan_d7c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>8. Persentase penderita Hipertensi ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar<br> DO:<br>Pelayanan kesehatan hipertensi sesuai standar meliputi: </strong><br>1) Pengukuran tekanan darah minimal 1 kali sebulan di fasilitas pelayanan kesehatan<br>2) Edukasi perubahan gaya hidup dan/atau kepatuhan minum obat<br>3) Terapi farmakologi</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal program Hipertensi (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d8a" id="cakupan_d8a">
                            <?php is_terisi($data['pencegahan8a'], set_value('cakupan_d8a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d8a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_d8b" id="cakupan_d8b">
                            <?php is_terisi($data['pencegahan8b'], set_value('cakupan_d8b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_d8b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase penderita Hipertensi ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar (Jumlah penderita hipertensi usia ≥ 15 tahun yang mendapakan pelayanan kesehatan sesuai standar dibagi jumlah penderita hipertensi dalam 1 tahun di wilayah kerja Puskesmas, dikali 100% </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % penderita Hipertensi ≥ 15 tahun yang mendapatkan pelayanan kesehatan sesuai standar dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pencegahan8c']; ?>" placeholder="" name="cakupan_d8c" id="cakupan_d8c">

                        <?= form_error('cakupan_d8c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlInput1"><strong>VIII.E. Progam Indonesia Sehat dengan Pendekatan Keluarga (PIS-PK)</strong></label><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>1. Keluarga yang telah dikunjungi dan intervensi awal<br> DO:</strong><br>Keluarga yang telah dikunjungi dan diintervensi awal adalah keluarga yang telah mendapatkan kunjungan Tim Pembina Keluarga yang memantau kondisi kesehatan keluarga berdasarkan 12 indikator keluarga sehat dan dilakukan intervensi awal.</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal PIS-PK terkait kunjungan keluarga dan intervensi awal (SK, SOP, Pedoman, Panduan) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_e1a" id="cakupan_e1a">
                            <?php is_terisi($data['pispk1a'], set_value('cakupan_e1a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_e1a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_e1b" id="cakupan_e1b">
                            <?php is_terisi($data['pispk1b'], set_value('cakupan_e1b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_e1b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase keluarga yang telah dikunjungi dan diintervensi awal (Jumlah keluarga yang telah dikunjungi dan diintervensi awal dibagi jumlah seluruh keluarga di wilayah kerja Puskesmas, dikali 100%) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % keluarga yang telah dikunjungi dan intervensi awal dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pispk1c']; ?>" placeholder="" name="cakupan_e1c" id="cakupan_e1c">

                        <?= form_error('cakupan_e1c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>2. Keluarga yang telah dikunjungi dan dilakukan intervensi lanjut<br> DO:</strong><br>Keluarga yang telah dikunjungi dan diintervensi awal direncanakan Puskesmas untuk dilakukan intervensi lanjut sesuai dengan permasalahan kesehatan yang ada di keluarga tersebut berdasarkan 12 indikator keluarga sehat.</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal PIS-PK terkait intervensi lanjut (SK, SOP, Pedoman, Panduan)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_e2a" id="cakupan_e2a">
                            <?php is_terisi($data['pispk2a'], set_value('cakupan_e2a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_e2a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindak lanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_e2b" id="cakupan_e2b">
                            <?php is_terisi($data['pispk2b'], set_value('cakupan_e2b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_e2b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase keluarga yang telah dikunjungi dan dilakukan intervensi lanjut (jumlah keluarga yang dilakukan intervensi lanjut dibagi jumlah seluruh keluarga yang direncanakan untuk dilakukan intervensi lanjut di wilayah kerja Puskesmas, dikali 100% Keluarga)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % keluarga yang telah dikunjungi dan dilakukan intervensi lanjut dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pispk2c']; ?>" placeholder="" name="cakupan_e2c" id="cakupan_e2c">

                        <?= form_error('cakupan_e2c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>3. Peningkatan IKS di Puskesmas<br> DO:</strong><br>• Peningkatan IKS di Puskesmas merupakan selisih nilai IKS wilayah Puskesmas pada saat dilakukan monitoring dan evaluasi Puskesmas dengan nilai IKS pada awal tahun berjalan.<br>• Penilaian peningkatan IKS dilakukan jika cakupan kunjungan keluarga >50%.</label>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> a. Tersedia regulasi internal PIS-PK terkait peningkatan IKS (SK, SOP, Pedoman, Panduan)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_e3a" id="cakupan_e3a">
                            <?php is_terisi($data['pispk3a'], set_value('cakupan_e3a')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_e3a', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> b. Pelaksanaan program sesuai manajemen Puskesmas (dasar pengusulan-penjadwalan-pelaksanaan-monitoring-evaluasi-tindaklanjut)</label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            1. Ya<br>
                            2. Tidak
                        </p>
                        <select class="form-control" name="cakupan_e3b" id="cakupan_e3b">
                            <?php is_terisi($data['pispk3b'], set_value('cakupan_e3b')); ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <?= form_error('cakupan_e3b', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> c. Persentase peningkatan IKS (Nilai IKS pada saat monitoring evaluasi Puskesmas dibagi dengan nilai IKS pada awal tahun berjalan, dikali 100%) </label>
                        <br>
                        <span><strong> Penilaian</strong> </span>
                        <p style="font-size:12px;">
                            % peningkatan IKS dikali 50%
                        </p>
                        <input type="number" step=any class="form-control" value="<?= $data['pispk3c']; ?>" placeholder="" name="cakupan_e3c" id="cakupan_e3c">

                        <?= form_error('cakupan_e3c', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;"><?= $button; ?></button>
        </form>
    </div>
</div>