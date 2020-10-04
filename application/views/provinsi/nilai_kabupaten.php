<div class="site-section col-md-9">
    <div class="container" style="margin-top:-100px;">
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="alert alert-success" role="alert">
                Data Telah Berhasil
                <?= $this->session->flashdata('flash'); ?>
            </div>
        <?php endif; ?>
        <table class="table table-striped table-bordered" style="width:100%; padding:20px; text-align: center; vertical-align: middle; margin-top:50px; ">
            <thead style="background-color:#16b3ac; color:white;">
                <tr>
                    <th>KABUPATEN/KOTA</th>
                    <th>STATUS</th>
                    <th>SKOR</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= $data_kabupaten['nama']; ?></th>
                    <?php if ($this->db->get_where('penilaian_pembinaan_terpadu', ['kode' => $data_kabupaten['kode']])->row_array()) : ?>
                        <td>TERISI</td>
                        <td><?= penilaian_pembinaan_terpadu($data_kabupaten['kode']); ?></td>
                        <td><a href="<?= base_url(); ?>Provinsi/penilaian_kabupaten/<?= $data_kabupaten['kode']; ?>">DETAIL</a></td>
                    <?php else : ?>
                        <td>BELUM TERISI</td>
                        <td>0</td>
                        <td><a href="<?= base_url(); ?>Provinsi/penilaian_kabupaten/<?= $data_kabupaten['kode']; ?>">ISI</a></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>