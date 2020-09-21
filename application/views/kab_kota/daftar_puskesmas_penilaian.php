<div class="site-section" id="menu">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading">Table Menu</span>
                <h2 class="heading"><strong class="text-primary">Identitas Umum</strong>Puskesmas Percontohan</h2>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%;  text-align: center; vertical-align: middle;">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PUSKESMAS</th>
                    <th>TOTAL SCORE</th>
                    <th>KETERANGAN</th>
                    <!-- <th>PEMENUHAN SUMBER DAYA PUSKESMAS</th>
                    <th>PERENCANAAN PUSKESMAS</th>
                    <th>PENGGERAKKAN DAN PELAKSANAAN KEGIATAN PUSKESMAS </th>
                    <th>PENGAWASAN, PENGENDALIAN DAN PENILAIAN KINERJA PUSKESMAS</th>
                    <th>PENINGKATAN MUTU PUSKESMAS</th>
                    <th>PENCEGAHAN DAN PENGENDALIAN INFEKSI dan KESEHATAN LINGKUNGAN</th>
                    <th>PELAKSANAAN SISTEM KEWASPADAAN DINI DAN RESPONS TERHADAP PENYAKIT MENULAR POTENSIAL KLB/ WABAH</th>
                    <th>CAKUPAN INDIKATOR PROGRAM</th> -->

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($puskesmas as $a) : ?>
                    <tr>
                        <?php
                        if ($this->db->get_where('pemenuhan_sdm_puskesmas', ['kode' => $a['kode']])->row_array() == NULL) {
                            echo "Tidak bisa";
                            $n1 = 0;
                        } else {
                            $n1 = pemenuhan_sd('pemenuhan_sdm_puskesmas', $a['kode']);
                        }
                        if ($this->db->get_where('perencanaan_puskesmas', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n2 = 0;
                        } else {
                            $n2 = perencanaan_puskesmas('perencanaan_puskesmas', $a['kode']);
                        }
                        if ($this->db->get_where('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n3 = 0;
                        } else {
                            $n3 = ppkp('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', $a['kode']);
                        }
                        if ($this->db->get_where('pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n4 = 0;
                        } else {
                            $n4 = pppp('pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas', $a['kode']);
                        }
                        if ($this->db->get_where('peningkatan_mutu', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n5 = 0;
                        } else {
                            $n5 = mutu('peningkatan_mutu', $a['kode']);
                        }
                        if ($this->db->get_where('pencegahan_dan_pengendalian_infeksi', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n6 = 0;
                        } else {
                            $n6 = pengendalian_infeksi('pencegahan_dan_pengendalian_infeksi', $a['kode']);
                        }
                        if ($this->db->get_where('pelaksanaan_sistem_kewaspadaan_dini', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n7 = 0;
                        } else {
                            $n7 = kewaspadaan_dini('pelaksanaan_sistem_kewaspadaan_dini', $a['kode']);
                        }
                        if ($this->db->get_where('cakupan_indikator_program', ['kode' => $a['kode']])->row_array() == NULL) {
                            $n8 = 0;
                        } else {
                            $n8 = indikator_program('cakupan_indikator_program', $a['kode']);
                        }
                        ?>
                        <?php
                        $persen1 = $n1 / 80 * 100;
                        $persen2 = $n2 / 290 * 100;
                        $persen3 = $n3 / 60 * 100;
                        $persen4 = $n4 / 20 * 100;
                        $persen5 = $n5 / 50 * 100;
                        $persen6 = $n6 / 120 * 100;
                        $persen7 = $n7 / 30 * 100;
                        $persen8 = $n8 / 1600 * 100;
                        $total = $persen1 + $persen2 + $persen3 + $persen4 + $persen5 + $persen6 + $persen7 + $persen8;  ?>
                        <td><?= $no++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $total; ?></td>
                        <td><a href="<?= base_url(); ?>Daftar_Puskesmas/detail/<?= $a['kode']; ?>">Detail</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>