<div class="site-section" id="menu">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-7 mx-auto text-center">
				<span class="subheading">Form Menu</span>
				<h2 class="heading"><strong class="text-primary">Organisasi Manajemen</strong></h2>
			</div>
		</div>
		<div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">
			<div class="container1">
				<form>
					<?php if ($this->session->flashdata('flash')) : ?>
						<div class="alert alert-success" role="alert">
							Data Berhasil <?= $this->session->flashdata('flash'); ?>
						</div>
					<?php endif; ?>
					<div class="form-group">
						<label for="exampleFormControlInput1">Nomor izin operasional Puskesmas</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="<?= $data['niop']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Tanggal terbit izin operasional Puskesmas</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi2" id="organisasi2" value="<?= date('d F Y', $data['tgl_izin']); ?>" readonly>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Kategori Puskesmas</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi3" id="organisasi3" value="<?= $data['kategori']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Status Akreditasi</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi4" id="organisasi4" value="<?= $data['status']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Puskesmas mempunyai dokumen pengelolaan lingkungan (UKL/UPL atau PPLH)</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi5" id="organisasi5" value="<?= $data['pplh']; ?>" readonly>
					</div>
					<a class="btn float-right btn-danger" href="<?= base_url('Organisasi_Manajemen/ubah'); ?>" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
				</form>
			</div>
		</div>
	</div>