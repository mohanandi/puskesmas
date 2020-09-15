<div class="col-md-9" style="top:-110px;">
	<div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">
		<div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">
			<form method="POST" action="<?= base_url('Organisasi_Manajemen/tambah'); ?>">
				<div class="form-group">
					<label for="exampleFormControlInput1">Nomor izin operasional Puskesmas</label>
					<?php if ($data['niop']) : ?>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="<?= $data['niop']; ?>">
					<?php else : ?>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="<?= set_value('organisasi1'); ?>">
					<?php endif; ?>
					<?= form_error('organisasi1', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Tanggal terbit izin operasional Puskesmas</label>
					<?php if ($data['tgl_izin']) : ?>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi2" id="organisasi2" value="<?= $data['tgl_izin']; ?>">
					<?php else : ?>
						<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi2" id="organisasi2" value="<?= set_value('organisasi2'); ?>">
					<?php endif; ?>
					<?= form_error('organisasi2', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class=" form-group">
					<label for="exampleFormControlInput1">Kategori Puskesmas</label>
					<select class="form-control" name="organisasi3" id="organisasi3">
						<?php if ($data['kategori']) : ?>
							<option value="<?= $data['kategori']; ?>"><?= $data['kategori']; ?></option>
						<?php else : ?>
							<option value="<?= set_value('organisasi3'); ?>"><?= set_value('organisasi3'); ?></option>
						<?php endif; ?>
						<option value="Puskesmas Kawasaan Perkotaan">Puskesmas Kawasaan Perkotaan</option>
						<option value="Puskesmas Kawasan Perdesaan">Puskesmas Kawasan Perdesaan</option>
						<option value="Puskesmas Kawasan Terpencil">Puskesmas Kawasan Terpencil</option>
						<option value="Puskesmas Kawasan Sangat Terpencil">Puskesmas Kawasan Sangat Terpencil</option>
						<option value="Puskesmas Non Rawat Inap">Puskesmas Non Rawat Inap</option>
						<option value="Puskesmas Rawat Inap">Puskesmas Rawat Inap</option>
					</select>
					<?= form_error('organisasi3', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Status Akreditasi</label>
					<select class="form-control" name="organisasi4" id="organisasi4">
						<?php if ($data['status']) : ?>
							<option value="<?= $data['status']; ?>"><?= $data['status']; ?></option>
						<?php else : ?>
							<option value="<?= set_value('organisasi4'); ?>"><?= set_value('organisasi4'); ?></option>
						<?php endif; ?>
						<option value="Terakreditasi Dasar">Terakreditasi Dasar</option>
						<option value="Terakreditasi Madya">Terakreditasi Madya</option>
						<option value="Terakreditasi Utama">Terakreditasi Utama</option>
						<option value="Terakreditasi Paripurna">Terakreditasi Paripurna</option>
						<option value="Belum Terakreditasi">Belum Terakreditasi</option>
					</select>
					<?= form_error('organisasi4', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Puskesmas mempunyai dokumen pengelolaan lingkungan (UKL/UPL atau PPLH)</label>
					<select class="form-control" name="organisasi5" id="organisasi5">
						<?php is_terisi($data['pplh'], set_value('organisasi5')); ?>
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
					</select>
					<?= form_error('organisasi5', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<button class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</button>
			</form>
		</div>
	</div>
</div>