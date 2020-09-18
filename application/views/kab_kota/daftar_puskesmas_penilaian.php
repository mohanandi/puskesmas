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
                <?php $no = 1; ?>
                <?php foreach ($puskesmas as $a) : ?>
                    <tr>
                        <?php $nilai = pemenuhan_sd('pemenuhan_sdm_puskesmas', $a['kode']); ?>
                        <?php $nilai = perencanaan_puskesmas('perencanaan_puskesmas', $a['kode']); ?>
                        <?php $nilai = ppkp('penggerakan_dan_pelaksanaan_kegiatan_puskesmas', $a['kode']); ?>
                        <?php $nilai = pppp('pengawasan_pengendalian_dan_penilaian_kinerja_puskesmas', $a['kode']); ?>
                        <?php $nilai = mutu('peningkatan_mutu', $a['kode']); ?>
                        <?php $nilai = mutu('pencegahan_dan_pengendalian_infeksi', $a['kode']); ?>
                        <?php $nilai = mutu('peningkatan_mutu', $a['kode']); ?>
                        <td><?= $no++; ?></td>
                        <td><?= $a['nama']; ?></td>




                        <?php if ($this->db->get_where('pencegahan_dan_pengendalian_infeksi', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('pelaksanaan_sistem_kewaspadaan_dini', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('cakupan_indikator_program', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>