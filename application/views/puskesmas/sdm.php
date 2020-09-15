			<div class="col-md-9" style="top:-110px;">
				<div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1' style="margin-bottom:-200px;">
					<div class="container1" style="height:350px; overflow-y:auto; overflow-x:hidden; padding:10px;">
						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1"><strong>Kepala Puskesmas </strong></label>
								<select class="form-control" name="sdm1" id="sdm1">
									<option selected>Pilih ...</option>
									<option value="1">Dokter Umum</option>
									<option value="2">Dokter Gigi</option>
									<option value="2">Sarjana Kesehatan Masyarakat (SKM)</option>
									<option value="2">Lain-lain</option> <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lain-lain">
								</select>
							</div>
							<!-- Tenaga dan Status Kepegawaian -->
							<label for="exampleFormControlInput1"><strong>Tenaga dan Status Kepegawaian</strong></label><br>

							<section class="form-group" id="form-group">
								<div class="form-group">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Dokter</label>
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter1" id="sdmdokter1" value="<?= $data['dokter1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter1" id="sdmdokter1" value="<?= set_value('sdmdokter1') ?>">
												<?php endif; ?>
												<?= form_error('sdmdokter1', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter2" id="sdmdokter2" value="<?= $data['dokter2	']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter2" id="sdmdokter2" value="<?= set_value('sdmdokter2') ?>">
												<?php endif; ?>
												<?= form_error('sdmdokter2', '<small class="text-danger pl-3">', '</small>'); ?>

											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter3" id="sdmdokter3" value="<?= $data['dokter3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter3" id="sdmdokter3" value="<?= set_value('sdmdokter3') ?>">
												<?php endif; ?>
												<?= form_error('sdmdokter3', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter4" id="sdmdokter4" value="<?= $data['dokter4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter4" id="sdmdokter4" value="<?= set_value('sdmdokter4') ?>">
												<?php endif; ?>
												<?= form_error('sdmdokter4', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter5" id="sdmdokter5" value="<?= $data['dokter5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter5" id="sdmdokter5" value="<?= set_value('sdmdokter5) ?>">
												<?php endif; ?>
												<?= form_error('sdmdokter5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmdokter5" id="sdmdokter5">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter6" id="sdmdokter6" value="<?= $data['dokter6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdokter6" id="sdmdokter6" value="<?= set_value('sdmdokter6') ?>">
												<?php endif; ?>
												<?= form_error('sdmdokter6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmdokter6" id="sdmdokter6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Dokter Layanan Primer (DLP)</label>
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp1" id="sdmdlp1" value="<?= $data['dlp1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp1" id="sdmdlp1" value="<?= set_value('sdmdlp1') ?>">
												<?php endif; ?>
												<?= form_error('sdmdlp1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp1" id="sdmdlp1">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp2" id="sdmdlp2" value="<?= $data['dlp2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp2" id="sdmdlp2" value="<?= set_value('sdmdlp2') ?>">
												<?php endif; ?>
												<?= form_error('sdmdlp2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmdlp2" id="sdmdlp2">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp3" id="sdmdlp3" value="<?= $data['dlp3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp3" id="sdmdlp3" value="<?= set_value('sdmdlp3') ?>">
												<?php endif; ?>
												<?= form_error('sdmdlp3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmdlp3" id="sdmdlp3">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp4" id="sdmdlp4" value="<?= $data['dlp4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp4" id="sdmdlp4" value="<?= set_value('sdmdlp4') ?>">
												<?php endif; ?>
												<?= form_error('sdmdlp4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmdlp4" id="sdmdlp4">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp5" id="sdmdlp5" value="<?= $data['dlp5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp5" id="sdmdlp5" value="<?= set_value('sdmdlp5') ?>">
												<?php endif; ?>
												<?= form_error('sdmdlp5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmdlp5" id="sdmdlp5">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp6" id="sdmdlp6" value="<?= $data['dlp6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmdlp6" id="sdmdlp6" value="<?= set_value('sdmdlp6') ?>">
												<?php endif; ?>
												<?= form_error('sdmdlp6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmdlp6" id="sdmdlp6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												
												<label for="exampleFormControlInput1">Dokter Gigi</label>
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi1" id="sdmgigi1" value="<?= $data['gigi1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi1" id="sdmgigi1" value="<?= set_value('sdmgigi1') ?>">
												<?php endif; ?>
												<?= form_error('sdmgigi1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi1" id="sdmgigi1">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi2" id="sdmgigi2" value="<?= $data['gigi2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi2" id="sdmgigi2" value="<?= set_value('sdmgigi2') ?>">
												<?php endif; ?>
												<?= form_error('sdmgigi2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmgigi2" id="sdmgigi2">
											</div>
											<div class="col-md-2">
												<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi3" id="sdmgigi3" value="<?= $data['gigi3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi3" id="sdmgigi3" value="<?= set_value('sdmgigi3') ?>">
												<?php endif; ?>
												<?= form_error('sdmgigi3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmgigi3" id="sdmgigi3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi4" id="sdmgigi4" value="<?= $data['gigi4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi4" id="sdmgigi4" value="<?= set_value('sdmgigi4') ?>">
												<?php endif; ?>
												<?= form_error('sdmgigi4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmgigi4" id="sdmgigi4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi5" id="sdmgigi5" value="<?= $data['gigi5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi5" id="sdmgigi5" value="<?= set_value('sdmgigi5') ?>">
												<?php endif; ?>
												<?= form_error('sdmgigi5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmgigi5" id="sdmgigi5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi6" id="sdmgigi6" value="<?= $data['gigi6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmgigi6" id="sdmgigi6" value="<?= set_value('sdmgigi6') ?>">
												<?php endif; ?>
												<?= form_error('sdmgigi6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmgigi6" id="sdmgigi6">
											</div>
											<div class="col-md-12">
											
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
											
												<label for="exampleFormControlInput1">Perawat</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat1" id="sdmperawat1" value="<?= $data['perawat1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat1" id="sdmperawat1" value="<?= set_value('sdmperawat1') ?>">
												<?php endif; ?>
												<?= form_error('sdmperawat1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat1" id="sdmperawat1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat2" id="sdmperawat2" value="<?= $data['perawat2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat2" id="sdmperawat2" value="<?= set_value('sdmperawat2') ?>">
												<?php endif; ?>
												<?= form_error('sdmperawat2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmperawat2" id="sdmperawat2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat3" id="sdmperawat3" value="<?= $data['perawat3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat3" id="sdmperawat3" value="<?= set_value('sdmperawat3') ?>">
												<?php endif; ?>
												<?= form_error('sdmperawat3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmperawat3" id="sdmperawat3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat4" id="sdmperawat4" value="<?= $data['perawat4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat4" id="sdmperawat4" value="<?= set_value('sdmperawat4') ?>">
												<?php endif; ?>
												<?= form_error('sdmperawat4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmperawat4" id="sdmperawat4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat5" id="sdmperawat5" value="<?= $data['perawat5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat5" id="sdmperawat5" value="<?= set_value('sdmperawat5') ?>">
												<?php endif; ?>
												<?= form_error('sdmperawat5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmperawat5" id="sdmperawat5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat6" id="sdmperawat6" value="<?= $data['perawat6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmperawat6" id="sdmperawat6" value="<?= set_value('sdmperawat6') ?>">
												<?php endif; ?>
												<?= form_error('sdmperawat6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmperawat6" id="sdmperawat6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Bidan</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan1" id="sdmbidan1" value="<?= $data['bidan1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan1" id="sdmbidan1" value="<?= set_value('sdmbidan1') ?>">
												<?php endif; ?>
												<?= form_error('sdmbidan1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan1" id="sdmbidan1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan2" id="sdmbidan2" value="<?= $data['bidan2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan2" id="sdmbidan2" value="<?= set_value('sdmbidan2') ?>">
												<?php endif; ?>
												<?= form_error('sdmbidan2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmbidan2" id="sdmbidan2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan3" id="sdmbidan3" value="<?= $data['bidan3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan3" id="sdmbidan3" value="<?= set_value('sdmbidan3') ?>">
												<?php endif; ?>
												<?= form_error('sdmbidan3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmbidan3" id="sdmbidan3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan4" id="sdmbidan4" value="<?= $data['bidan4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan4" id="sdmbidan4" value="<?= set_value('sdmbidan4') ?>">
												<?php endif; ?>
												<?= form_error('sdmbidan4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmbidan4" id="sdmbidan4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan5" id="sdmbidan5" value="<?= $data['bidan5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan5" id="sdmbidan5" value="<?= set_value('sdmbidan5') ?>">
												<?php endif; ?>
												<?= form_error('sdmbidan5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmbidan5" id="sdmbidan5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan6" id="sdmbidan6" value="<?= $data['bidan6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmbidan6" id="sdmbidan6" value="<?= set_value('sdmbidan6') ?>">
												<?php endif; ?>
												<?= form_error('sdmbidan6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmbidan6" id="sdmbidan6">
											</div>
											<div class="col-md-12">
											
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">

												<label for="exampleFormControlInput1">Tenaga promosi kesehatan dan ilmu perilaku</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi1" id="sdmpromosi1" value="<?= $data['promosi1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi1" id="sdmpromosi1" value="<?= set_value('sdmpromosi1') ?>">
												<?php endif; ?>
												<?= form_error('sdmpromosi1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi1" id="sdmpromosi1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi2" id="sdmpromosi2" value="<?= $data['promosi2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi2" id="sdmpromosi2" value="<?= set_value('sdmpromosi2') ?>">
												<?php endif; ?>
												<?= form_error('sdmpromosi2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmpromosi2" id="sdmpromosi2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi3" id="sdmpromosi3" value="<?= $data['promosi3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi3" id="sdmpromosi3" value="<?= set_value('sdmpromosi3') ?>">
												<?php endif; ?>
												<?= form_error('sdmpromosi3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmpromosi3" id="sdmpromosi3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi4" id="sdmpromosi4" value="<?= $data['promosi4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi4" id="sdmpromosi4" value="<?= set_value('sdmpromosi4') ?>">
												<?php endif; ?>
												<?= form_error('sdmpromosi4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmpromosi4" id="sdmpromosi4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi5" id="sdmpromosi5" value="<?= $data['promosi5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi5" id="sdmpromosi5" value="<?= set_value('sdmpromosi5') ?>">
												<?php endif; ?>
												<?= form_error('sdmpromosi5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmpromosi5" id="sdmpromosi5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi6" id="sdmpromosi6" value="<?= $data['promosi6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpromosi6" id="sdmpromosi6" value="<?= set_value('sdmpromosi6') ?>">
												<?php endif; ?>
												<?= form_error('sdmpromosi6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmpromosi6" id="sdmpromosi6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Tenaga sanitasi lingkungan</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi1" id="sdmsanitasi1" value="<?= $data['sanitasi1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi1" id="sdmsanitasi1" value="<?= set_value('sdmsanitasi1') ?>">
												<?php endif; ?>
												<?= form_error('sdmsanitasi1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi1" id="sdmsanitasi1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi2" id="sdmsanitasi2" value="<?= $data['sanitasi2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi2" id="sdmsanitasi2" value="<?= set_value('sdmsanitasi2') ?>">
												<?php endif; ?>
												<?= form_error('sdmsanitasi2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmsanitasi2" id="sdmsanitasi2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi3" id="sdmsanitasi3" value="<?= $data['sanitasi3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi3" id="sdmsanitasi3" value="<?= set_value('sdmsanitasi3') ?>">
												<?php endif; ?>
												<?= form_error('sdmsanitasi3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmsanitasi3" id="sdmsanitasi3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi4" id="sdmsanitasi4" value="<?= $data['sanitasi4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi4" id="sdmsanitasi4" value="<?= set_value('sdmsanitasi4') ?>">
												<?php endif; ?>
												<?= form_error('sdmsanitasi4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmsanitasi4" id="sdmsanitasi4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi5" id="sdmsanitasi5" value="<?= $data['sanitasi5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi5" id="sdmsanitasi5" value="<?= set_value('sdmsanitasi5') ?>">
												<?php endif; ?>
												<?= form_error('sdmsanitasi5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmsanitasi5" id="sdmsanitasi5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi6" id="sdmsanitasi6" value="<?= $data['sanitasi6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmsanitasi6" id="sdmsanitasi6" value="<?= set_value('sdmsanitasi6') ?>">
												<?php endif; ?>
												<?= form_error('sdmsanitasi6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmsanitasi6" id="sdmsanitasi6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Nutrisionis</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis1" id="sdmnutrisionis1" value="<?= $data['nutrisionis1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis1" id="sdmnutrisionis1" value="<?= set_value('sdmnutrisionis1') ?>">
												<?php endif; ?>
												<?= form_error('sdmnutrisionis1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis1" id="sdmnutrisionis1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis2" id="sdmnutrisionis2" value="<?= $data['nutrisionis2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis2" id="sdmnutrisionis2" value="<?= set_value('sdmnutrisionis2') ?>">
												<?php endif; ?>
												<?= form_error('sdmnutrisionis2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmnutrisionis2" id="sdmnutrisionis2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis3" id="sdmnutrisionis3" value="<?= $data['nutrisionis3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis3" id="sdmnutrisionis3" value="<?= set_value('sdmnutrisionis3') ?>">
												<?php endif; ?>
												<?= form_error('sdmnutrisionis3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmnutrisionis3" id="sdmnutrisionis3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis4" id="sdmnutrisionis4" value="<?= $data['nutrisionis4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis4" id="sdmnutrisionis4" value="<?= set_value('sdmnutrisionis4') ?>">
												<?php endif; ?>
												<?= form_error('sdmnutrisionis4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmnutrisionis4" id="sdmnutrisionis4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis5" id="sdmnutrisionis5" value="<?= $data['nutrisionis5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis5" id="sdmnutrisionis5" value="<?= set_value('sdmnutrisionis5') ?>">
												<?php endif; ?>
												<?= form_error('sdmnutrisionis5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmnutrisionis5" id="sdmnutrisionis5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis6" id="sdmnutrisionis6" value="<?= $data['nutrisionis6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmnutrisionis6" id="sdmnutrisionis6" value="<?= set_value('sdmnutrisionis6') ?>">
												<?php endif; ?>
												<?= form_error('sdmnutrisionis6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmnutrisionis6" id="sdmnutrisionis6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Tenaga Apoteker </label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker1" id="sdmapoteker1" value="<?= $data['apoteker1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker1" id="sdmapoteker1" value="<?= set_value('sdmapoteker1') ?>">
												<?php endif; ?>
												<?= form_error('sdmapoteker1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker1" id="sdmapoteker1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker2" id="sdmapoteker2" value="<?= $data['apoteker2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker2" id="sdmapoteker2" value="<?= set_value('sdmapoteker2') ?>">
												<?php endif; ?>
												<?= form_error('sdmapoteker2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmapoteker2" id="sdmapoteker2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker3" id="sdmapoteker3" value="<?= $data['apoteker3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker3" id="sdmapoteker3" value="<?= set_value('sdmapoteker3') ?>">
												<?php endif; ?>
												<?= form_error('sdmapoteker3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmapoteker3" id="sdmapoteker3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker4" id="sdmapoteker4" value="<?= $data['apoteker4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker4" id="sdmapoteker4" value="<?= set_value('sdmapoteker4') ?>">
												<?php endif; ?>
												<?= form_error('sdmapoteker4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmapoteker4" id="sdmapoteker4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker5" id="sdmapoteker5" value="<?= $data['apoteker5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker5" id="sdmapoteker5" value="<?= set_value('sdmapoteker5') ?>">
												<?php endif; ?>
												<?= form_error('sdmapoteker5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmapoteker5" id="sdmapoteker5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker6" id="sdmapoteker6" value="<?= $data['apoteker6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmapoteker6" id="sdmapoteker6" value="<?= set_value('sdmapoteker6') ?>">
												<?php endif; ?>
												<?= form_error('sdmapoteker6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmapoteker6" id="sdmapoteker6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Tenaga teknis kefarmasian</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian1" id="sdmkefarmasian1" value="<?= $data['kefarmasian1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian1" id="sdmkefarmasian1" value="<?= set_value('sdmkefarmasian1') ?>">
												<?php endif; ?>
												<?= form_error('sdmkefarmasian1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian1" id="sdmkefarmasian1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian2" id="sdmkefarmasian2" value="<?= $data['kefarmasian2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian2" id="sdmkefarmasian2" value="<?= set_value('sdmkefarmasian2') ?>">
												<?php endif; ?>
												<?= form_error('sdmkefarmasian2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmkefarmasian2" id="sdmkefarmasian2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian3" id="sdmkefarmasian3" value="<?= $data['kefarmasian3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian3" id="sdmkefarmasian3" value="<?= set_value('sdmkefarmasian3') ?>">
												<?php endif; ?>
												<?= form_error('sdmkefarmasian3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmkefarmasian3" id="sdmkefarmasian3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian4" id="sdmkefarmasian4" value="<?= $data['kefarmasian4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian4" id="sdmkefarmasian4" value="<?= set_value('sdmkefarmasian4') ?>">
												<?php endif; ?>
												<?= form_error('sdmkefarmasian4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmkefarmasian4" id="sdmkefarmasian4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian5" id="sdmkefarmasian5" value="<?= $data['kefarmasian5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian5" id="sdmkefarmasian5" value="<?= set_value('sdmkefarmasian5') ?>">
												<?php endif; ?>
												<?= form_error('sdmkefarmasian5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmkefarmasian5" id="sdmkefarmasian5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian6" id="sdmkefarmasian6" value="<?= $data['kefarmasian6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkefarmasian6" id="sdmkefarmasian6" value="<?= set_value('sdmkefarmasian6') ?>">
												<?php endif; ?>
												<?= form_error('sdmkefarmasian6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmkefarmasian6" id="sdmkefarmasian6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Ahli teknologi laboratorium medik</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli1" id="sdmahli1" value="<?= $data['ahli1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli1" id="sdmahli1" value="<?= set_value('sdmahli1') ?>">
												<?php endif; ?>
												<?= form_error('sdmahli1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli1" id="sdmahli1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli2" id="sdmahli2" value="<?= $data['ahli2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli2" id="sdmahli2" value="<?= set_value('sdmahli2') ?>">
												<?php endif; ?>
												<?= form_error('sdmahli2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmahli2" id="sdmahli2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli3" id="sdmahli3" value="<?= $data['ahli3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli3" id="sdmahli3" value="<?= set_value('sdmahli3') ?>">
												<?php endif; ?>
												<?= form_error('sdmahli3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmahli3" id="sdmahli3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli4" id="sdmahli4" value="<?= $data['ahli4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli4" id="sdmahli4" value="<?= set_value('sdmahli4') ?>">
												<?php endif; ?>
												<?= form_error('sdmahli4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmahli4" id="sdmahli4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli5" id="sdmahli5" value="<?= $data['ahli5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli5" id="sdmahli5" value="<?= set_value('sdmahli5') ?>">
												<?php endif; ?>
												<?= form_error('sdmahli5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmahli5" id="sdmahli5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli6" id="sdmahli6" value="<?= $data['ahli6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmahli6" id="sdmahli6" value="<?= set_value('sdmahli6') ?>">
												<?php endif; ?>
												<?= form_error('sdmahli6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmahli6" id="sdmahli6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Tenaga sistem informasi kesehatan </label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan1" id="sdmkesehatan1" value="<?= $data['kesehatan1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan1" id="sdmkesehatan1" value="<?= set_value('sdmkesehatan1') ?>">
												<?php endif; ?>
												<?= form_error('sdmkesehatan1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan1" id="sdmkesehatan1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan2" id="sdmkesehatan2" value="<?= $data['kesehatan2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan2" id="sdmkesehatan2" value="<?= set_value('sdmkesehatan2') ?>">
												<?php endif; ?>
												<?= form_error('sdmkesehatan2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmkesehatan2" id="sdmkesehatan2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan3" id="sdmkesehatan3" value="<?= $data['kesehatan3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan3" id="sdmkesehatan3" value="<?= set_value('sdmkesehatan3') ?>">
												<?php endif; ?>
												<?= form_error('sdmkesehatan4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmkesehatan3" id="sdmkesehatan3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan4" id="sdmkesehatan4" value="<?= $data['kesehatan4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan4" id="sdmkesehatan4" value="<?= set_value('sdmkesehatan4') ?>">
												<?php endif; ?>
												<?= form_error('sdmkesehatan5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmkesehatan4" id="sdmkesehatan4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan5" id="sdmkesehatan5" value="<?= $data['kesehatan5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan5" id="sdmkesehatan5" value="<?= set_value('sdmkesehatan5') ?>">
												<?php endif; ?>
												<?= form_error('sdmkesehatan6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmkesehatan5" id="sdmkesehatan5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan6" id="sdmkesehatan6" value="<?= $data['kesehatan6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkesehatan6" id="sdmkesehatan6" value="<?= set_value('sdmkesehatan6') ?>">
												<?php endif; ?>
												<?= form_error('sdmkesehatan6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmkesehatan6" id="sdmkesehatan6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Tenaga administrasi keuangan</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan1" id="sdmkeuangan1" value="<?= $data['keuangan1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan1" id="sdmkeuangan1" value="<?= set_value('sdmkeuangan1') ?>">
												<?php endif; ?>
												<?= form_error('sdmkeuangan1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan1" id="sdmkeuangan1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan2" id="sdmkeuangan2" value="<?= $data['keuangan2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan2" id="sdmkeuangan2" value="<?= set_value('sdmkeuangan2') ?>">
												<?php endif; ?>
												<?= form_error('sdmkeuangan2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmkeuangan2" id="sdmkeuangan2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan3" id="sdmkeuangan3" value="<?= $data['keuangan3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan3" id="sdmkeuangan3" value="<?= set_value('sdmkeuangan3') ?>">
												<?php endif; ?>
												<?= form_error('sdmkeuangan3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmkeuangan3" id="sdmkeuangan3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan4" id="sdmkeuangan4" value="<?= $data['keuangan4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan4" id="sdmkeuangan4" value="<?= set_value('sdmkeuangan4') ?>">
												<?php endif; ?>
												<?= form_error('sdmkeuangan4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmkeuangan4" id="sdmkeuangan4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan5" id="sdmkeuangan5" value="<?= $data['keuangan5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan5" id="sdmkeuangan5" value="<?= set_value('sdmkeuangan5') ?>">
												<?php endif; ?>
												<?= form_error('sdmkeuangan5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmkeuangan5" id="sdmkeuangan5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan6" id="sdmkeuangan6" value="<?= $data['keuangan6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmkeuangan6" id="sdmkeuangan6" value="<?= set_value('sdmkeuangan6') ?>">
												<?php endif; ?>
												<?= form_error('sdmkeuangan6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmkeuangan6" id="sdmkeuangan6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Tenaga ketatausahaan</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha1" id="sdmtatausaha1" value="<?= $data['tatausaha1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha1" id="sdmtatausaha1" value="<?= set_value('sdmtatausaha1') ?>">
												<?php endif; ?>
												<?= form_error('sdmtatausaha1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha1" id="sdmtatausaha1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha2" id="sdmtatausaha2" value="<?= $data['tatausaha2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha2" id="sdmtatausaha2" value="<?= set_value('sdmtatausaha2') ?>">
												<?php endif; ?>
												<?= form_error('sdmtatausaha2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmtatausaha2" id="sdmtatausaha2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha3" id="sdmtatausaha3" value="<?= $data['tatausaha3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha3" id="sdmtatausaha3" value="<?= set_value('sdmtatausaha3') ?>">
												<?php endif; ?>
												<?= form_error('sdmtatausaha3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtatausaha3" id="sdmtatausaha3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha4" id="sdmtatausaha4" value="<?= $data['tatausaha4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha4" id="sdmtatausaha4" value="<?= set_value('sdmtatausaha4') ?>">
												<?php endif; ?>
												<?= form_error('sdmtatausaha4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmtatausaha4" id="sdmtatausaha4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha5" id="sdmtatausaha5" value="<?= $data['tatausaha5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha5" id="sdmtatausaha5" value="<?= set_value('sdmtatausaha5') ?>">
												<?php endif; ?>
												<?= form_error('sdmtatausaha5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmtatausaha5" id="sdmtatausaha5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha6" id="sdmtatausaha6" value="<?= $data['tatausaha6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtatausaha6" id="sdmtatausaha6" value="<?= set_value('sdmtatausaha6') ?>">
												<?php endif; ?>
												<?= form_error('sdmtatausaha6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmtatausaha6" id="sdmtatausaha6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Pekarya</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya1" id="sdmpekarya1" value="<?= $data['pekarya1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya1" id="sdmpekarya1" value="<?= set_value('sdmpekarya1') ?>">
												<?php endif; ?>
												<?= form_error('sdmpekarya1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya1" id="sdmpekarya1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya2" id="sdmpekarya2" value="<?= $data['pekarya2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya2" id="sdmpekarya2" value="<?= set_value('sdmpekarya2') ?>">
												<?php endif; ?>
												<?= form_error('sdmpekarya2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmpekarya2" id="sdmpekarya2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya3" id="sdmpekarya3" value="<?= $data['pekarya3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya3" id="sdmpekarya3" value="<?= set_value('sdmpekarya3') ?>">
												<?php endif; ?>
												<?= form_error('sdmpekarya3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmpekarya3" id="sdmpekarya3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya4" id="sdmpekarya4" value="<?= $data['pekarya4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya4" id="sdmpekarya4" value="<?= set_value('sdmpekarya4') ?>">
												<?php endif; ?>
												<?= form_error('sdmpekarya4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmpekarya4" id="sdmpekarya4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya5" id="sdmpekarya5" value="<?= $data['pekarya5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya5" id="sdmpekarya5" value="<?= set_value('sdmpekarya5') ?>">
												<?php endif; ?>
												<?= form_error('sdmpekarya5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmpekarya5" id="sdmpekarya5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya6" id="sdmpekarya6" value="<?= $data['pekarya6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmpekarya6" id="sdmpekarya6" value="<?= set_value('sdmpekarya6') ?>">
												<?php endif; ?>
												<?= form_error('sdmpekarya6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmpekarya5" id="sdmpekarya5">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">Lain-lain Sebutkan:</label>
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">a. Tenaga Kesehatan Tradisional</label>
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional1" id="sdmtradisional1" value="<?= $data['tradisional1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional1" id="sdmtradisional1" value="<?= set_value('sdmtradisional1') ?>">
												<?php endif; ?>
												<?= form_error('sdmtradisional1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional1" id="sdmtradisional1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional2" id="sdmtradisional2" value="<?= $data['tradisional2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional2" id="sdmtradisional2" value="<?= set_value('sdmtradisional2') ?>">
												<?php endif; ?>
												<?= form_error('sdmtradisional2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmtradisional2" id="sdmtradisional2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional3" id="sdmtradisional3" value="<?= $data['tradisional3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional3" id="sdmtradisional3" value="<?= set_value('sdmtradisional3') ?>">
												<?php endif; ?>
												<?= form_error('sdmtradisional3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtradisional3" id="sdmtradisional3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional4" id="sdmtradisional4" value="<?= $data['tradisional4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional4" id="sdmtradisional4" value="<?= set_value('sdmtradisional4') ?>">
												<?php endif; ?>
												<?= form_error('sdmtradisional4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmtradisional4" id="sdmtradisional4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional5" id="sdmtradisional5" value="<?= $data['tradisional5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional5" id="sdmtradisional5" value="<?= set_value('sdmtradisional5') ?>">
												<?php endif; ?>
												<?= form_error('sdmtradisional5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmtradisional5" id="sdmtradisional5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional6" id="sdmtradisional6" value="<?= $data['tradisional6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtradisional6" id="sdmtradisional6" value="<?= set_value('sdmtradisional6') ?>">
												<?php endif; ?>
												<?= form_error('sdmtradisional6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmtradisional6" id="sdmtradisional6">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
											<div class="col-md-12">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik1" id="sdmtitik1" value="<?= $data['titik1']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik1" id="sdmtitik1" value="<?= set_value('sdmtitik1') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik1', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="b.  ........." name="sdmtitik1" id="sdmtitik1">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik2" id="sdmtitik2" value="<?= $data['titik2']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik2" id="sdmtitik2" value="<?= set_value('sdmtitik2') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik2', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik2" id="sdmtitik2">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik3" id="sdmtitik3" value="<?= $data['titik3']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik3" id="sdmtitik3" value="<?= set_value('sdmtitik3') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik3', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PPPK" name="sdmtitik3" id="sdmtitik3">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik4" id="sdmtitik4" value="<?= $data['titik4']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik4" id="sdmtitik4" value="<?= set_value('sdmtitik4') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik4', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NS" name="sdmtitik4" id="sdmtitik4">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik5" id="sdmtitik5" value="<?= $data['titik5']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik5" id="sdmtitik5" value="<?= set_value('sdmtitik5') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik5', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PTT DAERAH" name="sdmtitik5" id="sdmtitik5">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik6" id="sdmtitik6" value="<?= $data['titik6']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik6" id="sdmtitik6" value="<?= set_value('sdmtitik6') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik6', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LAIN-LAIN" name="sdmtitik6" id="sdmtiti6">
											</div>
											<div class="col-md-2">
											<?php if ($data) : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik7" id="sdmtitik7" value="<?= $data['titik7']; ?>">
												<?php else : ?>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PNS" name="sdmtitik7" id="sdmtitik7" value="<?= set_value('sdmtitik7') ?>">
												<?php endif; ?>
												<?= form_error('sdmtitik7', '<small class="text-danger pl-3">', '</small>'); ?>
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PENSIUN TAHUN DEPAN" name="sdmtitik7" id="sdmtitik7">
											</div>
											<div class="col-md-12">
												<label for="exampleFormControlInput1">TOTAL</label>
											</div>
										</div>
									</div>
								</div>

							</section>
							<a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
						</form>
					</div>
				</div>
			</div>
