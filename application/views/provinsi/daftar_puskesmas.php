<div class="col-md-9">
	<div class="container1" style="margin-top:10px !important;">
		<div class='multitab-section'>
			<ul class='multitab-widget multitab-widget-content-tabs-id'>
				<li class='multitab-tab'><a href='#multicolumn-widget-id1'>Data Puskesmas</a></li>
				<li class='multitab-tab' active><a href='#multicolumn-widget-id2'>Penilaian Puskesmas</a></li>
			</ul>
			<div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1'>
				<br>
				<span class='sidebar' id='sidebartab1' preferred='yes'>
					<table class="table table-striped table-bordered" style="width:100%; padding:20px; text-align: center; vertical-align: middle; margin-top:50px; ">
						<thead style="background-color:#16b3ac; color:white;">
							<tr>
								<th>JUDUL BAB</th>
								<th>STATUS</th>
								<th>KETERANGAN</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Identitas Puskesmas</th>
								<?php if ($this->db->get_where('identitas_puskesmas', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Tim Pembina Terpadu</th>
								<?php if ($this->db->get_where('tim_pembina_terpadu', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Organisasi Manajemen</th>
								<?php if ($this->db->get_where('organisasi_manajemen', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Lokasi Puskesmas</th>
								<?php if ($this->db->get_where('lokasi_puskesmas', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Bangunan Puskesmas</th>
								<?php if ($this->db->get_where('bangunan_puskesmas', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Prasarana Puskesmas</th>
								<?php if ($this->db->get_where('prasarana_puskesmas', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Peralatan Puskesmas</th>
								<?php if ($this->db->get_where('peralatan_puskesmas', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Pengisian ASPAK</th>
								<?php if ($this->db->get_where('pengisian_aspak', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
							<tr>
								<th>Penilaian Kinerja Puskesmas</th>
								<?php if ($this->db->get_where('sumber_daya_manusia', ['kode' => $puskesmas['kode']])->row_array()) : ?>
									<td>TERISI</td>
								<?php else : ?>
									<td>BELUM TERISI</td>
								<?php endif; ?>
								<td><a href="##"><i class="fa fa-check-square-o" style="color:#228c22;"></i> </a></td>
							</tr>
						</tbody>
					</table>
				</span>
			</div>
			<div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id2'>
				<br>
				<span class='sidebar' id='sidebartab1' preferred='yes'>
					<table class="table table-striped table-bordered" style="width:100%; padding:20px; text-align: center; vertical-align: middle; margin-top:50px; ">
						<thead style="background-color:#16b3ac; color:white;">
							<tr>
								<th>JUDUL BAB</th>
								<th>SKOR</th>
								<th>INDIKATOR</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($this->db->get_where('pemenuhan_sdm_puskesmas', ['kode' => $puskesmas['kode']])->row_array() == NULL) {
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
							$persen8 = $n8 / 160 * 100; ?>
							<tr>
								<th>Pemenuhan Sumber Daya</th>
								<td><?= $persen1; ?></td>
								<td><?= indikator($persen1); ?></td>
							</tr>
							<tr>
								<th>Perencanaan Puskesmas</th>
								<td><?= $persen2; ?></td>
								<td><?= indikator($persen2); ?></td>
							</tr>
							<tr>
								<th>Penggerakan dan Pelakasanaan Kegiatan Puskesmas</th>
								<td><?= $persen3; ?></td>
								<td><?= indikator($persen3); ?></td>
							</tr>
							<tr>
								<th>Pengawasan, Pengendalian dan Penilaian Kinerja Puskesmas</th>
								<td><?= $persen4; ?></td>
								<td><?= indikator($persen4); ?></td>
							</tr>
							<tr>
								<th>Penningkatan Mutu Puskesmas</th>
								<td><?= $persen5; ?></td>
								<td><?= indikator($persen5); ?></td>
							</tr>
							<tr>
								<th>Pencegahan dan Pengendalian Infeksi Dan Kesehatan Lingkungan</th>
								<td><?= $persen6; ?></td>
								<td><?= indikator($persen6); ?></td>
							</tr>
							<tr>
								<th>Pelaksanaan Sistem Kewaspadaan Dini dan Respons Terhadap Penyakit Menular Potensial KLB / Wabah</th>
								<td><?= $persen7; ?></td>
								<td><?= indikator($persen7); ?></td>
							</tr>
							<tr>
								<th>Cakupan Indikator Program</th>
								<td><?= $persen8; ?></td>
								<td><?= indikator($persen8); ?></td>
							</tr>
						</tbody>
					</table>
				</span>
			</div>
		</div>
	</div>
</div>