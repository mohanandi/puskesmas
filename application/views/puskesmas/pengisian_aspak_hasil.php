<div class="site-section" id="menu">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading">Form Menu</span>
                <h2 class="heading"><strong class="text-primary">Pengisian Aspak</strong></h2>
            </div>
        </div>



        <form>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success" role="alert">
                    Data Telah Berhasil
                    <?= $this->session->flashdata('flash'); ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="exampleFormControlInput1">Melaksanakan Pengisian Aplikasi Sarana, Prasarana, dan Peralatan Kesehatan (ASPAK)</label>
                <input type="text" class="form-control" value="<?= $data['aspak']; ?>" placeholder="" name="aspak1" id="aspak1" readonly>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut. berapa pemenuhan Standar ASPAK menurut PMK 43/2019 </label>
                <input type="text" class="form-control" value="<?= $data['aspak_pmk']; ?>" placeholder="" name="aspak2" id="aspak2" readonly>


            </div>
            <a class="btn float-right btn-success" href="<?= base_url('Pengisian_Aspak/ubah') ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
        </form>
    </div>
</div>
</div>