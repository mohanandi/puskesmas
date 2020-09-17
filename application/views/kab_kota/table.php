<div class="site-section" id="menu">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="heading"><strong class="text-primary"><?= $judul; ?></strong></h2>
            </div>
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="alert alert-success" role="alert">
                Data Telah Berhasil
                <?= $this->session->flashdata('flash'); ?>
            </div>
        <?php endif; ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%;  text-align: center; vertical-align: middle;">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PUSKESMAS</th>
                    <th>STATUS</th>
                    <th>TOTAL SCORE</th>
                    <th>KETERTANGAN</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($puskesmas as $a) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <?php $data = $this->db->get_where($table, ['kode' => $a['kode']])->row_array(); ?>
                        <?php if ($data) : ?>
                            <td>TERISI</td>
                            <td>
                            <td><a href="<?= base_url($link); ?>/data/<?= $a['kode']; ?>">Detail</a></td>
                        <?php else : ?>
                            <td>BELUM TERISI</td>
                            <td>0</td>
                            <td><a href="<?= base_url($link); ?>/data/<?= $a['kode']; ?>">Isi</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>