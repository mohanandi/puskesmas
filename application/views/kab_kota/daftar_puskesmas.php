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
                    <th>IDENTITAS UMUM</th>
                    <th>PEMBINA TERPADU</th>
                    <th>ORGANISASI MANAJEMEN</th>
                    <th>LOKASI PUSKESMAS</th>
                    <th>BANGUNAN PUSKESMAS</th>
                    <th>PRASARANA PUSKESMAS</th>
                    <th>PERALATAN PUSKESMAS</th>
                    <th>PENGISIAN ASPAK</th>
                    <th>SDM PUSKESMAS</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($puskesmas as $a) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <?php if ($this->db->get_where('identitas_puskesmas', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('tim_pembina_terpadu', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('organisasi_manajemen', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('lokasi_puskesmas', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('bangunan_puskesmas', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('prasarana_puskesmas', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('peralatan_puskesmas', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('pengisian_aspak', ['kode' => $a['kode']])->row_array()) : ?>
                            <td>TERISI</td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                        <?php endif; ?>
                        <?php if ($this->db->get_where('sumber_daya_manusia', ['kode' => $a['kode']])->row_array()) : ?>
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