<div class="col-md-9" style="top:-110px;">
	<div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">
		<div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">
			<form>
				<?php if ($this->session->flashdata('flash')) : ?>
					<div class="alert alert-success" role="alert">
						Data Telah Berhasil
						<?= $this->session->flashdata('flash'); ?>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<label for="exampleFormControlInput1">Nomor izin operasional Puskesmas</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="" readonly>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Melaksanakan Pengisian Aplikasi Sarana, Prasarana, dan Peralatan Kesehatan (ASPAK)</label>
					<select class="form-control" name="aspak1" id="aspak1" disabled>
						<option selected>Pilih ...</option>
						<option value="1">Ya</option>
						<option value="2">Tidak</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Jika Ya, jawab pertanyaan berikut. berapa pemenuhan Standar ASPAK menurut PMK 43/2019 </label>
					<select class="form-control" name="aspak2" id="aspak2" disabled>
						<option selected>Pilih ...</option>
						<option value="1">≥ 80%</option>
						<option value="2">70 - 79%</option>
						<option value="3">61 – 69%</option>
						<option value="4">≤ 60%</option>
					</select>
				</div>
				<a class="btn float-right btn-danger" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Edit</a>
			</form>
		</div>
	</div>
</div>