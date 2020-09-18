<div class="site-section" id="menu">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading">Table Menu</span>
                <h2 class="heading"><strong class="text-primary">Nilai</strong><?= $puskesmas['nama']; ?></h2>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%;  text-align: center; vertical-align: middle;">
            <thead>
                <tr>
                    <th>PEMENUHAN SUMBER DAYA PUSKESMAS</th>
                    <th>PERENCANAAN PUSKESMAS</th>
                    <th>PENGGERAKKAN DAN PELAKSANAAN KEGIATAN PUSKESMAS </th>
                    <th>PENGAWASAN, PENGENDALIAN DAN PENILAIAN KINERJA PUSKESMAS</th>
                    <th>PENINGKATAN MUTU PUSKESMAS</th>
                    <th>PENCEGAHAN DAN PENGENDALIAN INFEKSI dan KESEHATAN LINGKUNGAN</th>
                    <th>PELAKSANAAN SISTEM KEWASPADAAN DINI DAN RESPONS TERHADAP PENYAKIT MENULAR POTENSIAL KLB/ WABAH</th>
                    <th>CAKUPAN INDIKATOR PROGRAM</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    if ($this->db->get_where('pemenuhan_sdm_puskesmas', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        echo "Tidak bisa";
                        $n1 = 0;
                    } else {
                        $n1 = pemenuhan_sd('pemenuhan_sdm_puskesmas', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('perencanaan_puskesmas', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n2 = 0;
                    } else {
                        $n2 = perencanaan_puskesmas('perencanaan_puskesmas', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n3 = 0;
                    } else {
                        $n3 = ppkp('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n4 = 0;
                    } else {
                        $n4 = pppp('pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('peningkatan_mutu', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n5 = 0;
                    } else {
                        $n5 = mutu('peningkatan_mutu', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('pencegahan_dan_pengendalian_infeksi', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n6 = 0;
                    } else {
                        $n6 = pengendalian_infeksi('pencegahan_dan_pengendalian_infeksi', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('pelaksanaan_sistem_kewaspadaan_dini', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n7 = 0;
                    } else {
                        $n7 = kewaspadaan_dini('pelaksanaan_sistem_kewaspadaan_dini', $puskesmas['kode']);
                    }
                    if ($this->db->get_where('cakupan_indikator_program', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
                        $n8 = 0;
                    } else {
                        $n8 = indikator_program('cakupan_indikator_program', $puskesmas['kode']);
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
                    <td><?= $persen1; ?></td>
                    <td><?= $persen2; ?></td>
                    <td><?= $persen3; ?></td>
                    <td><?= $persen4; ?></td>
                    <td><?= $persen5; ?></td>
                    <td><?= $persen6; ?></td>
                    <td><?= $persen7; ?></td>
                    <td><?= $persen8; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>