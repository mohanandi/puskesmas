<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">


      <div class="col-md-9">


        <form style="height:350px; overflow-y:auto; padding:20px;">
		<div class="alert alert-success" role="alert">
							Data Berhasil dimasukan !
						</div>
							<div class="form-group">
							 <label for="exampleFormControlInput1">Nomor izin operasional Puskesmas</label>
							  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="organisasi1" id="organisasi1" value="" readonly>
							</div>
          <div class="form-group">
            <label for="exampleFormControlInput1"> Pelaksanaan Kegiatan di Puskesmas dipandu dengan kebijakan, pe-doman dan prosedur yang jelas <a href="#" onclick="toggle_visibility('foo');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo" style="display:none; font-size:12px; margin-left:20px;">Tersedia dokumen-dokumen, untuk kegiatan-kegiatan yang diselenggarakan Puskesmas: <br> • Kebijakan, <br> • Manual Mutu<br>• RUK atau rencana strategis 5 Tahunan<br>• PTP (RUK dan RPK) tahunan<br>• Pedoman/Panduan<br>• KAK<br>• SOP<br>• Pengendalian Dokumen<br>• Rekaman hasil-hasil kegiatan<br>Ambil sampel 2 kegiatan untuk masing-masing:<br>• Terkait UKM dan UKP, lihat dokumen-dokumen di atas apakah lengkap dan isinya relevan. </p>


            <select class="form-control" name="penggerakkan1" id="penggerakkan1" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan kegiatan di Puskesmas mempunyai jadwal yang jelas dan disosialisasikan ke sasaran<a href="#" onclick="toggle_visibility('foo1');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo1" style="display:none; font-size:12px; margin-left:20px;">1. Tersedia jadwal pelaksanaan kegiatan Puskesmas<br> 2. Tersedia bukti sosialisasi jadwal, kepada:<br> • Lintas program dengan bukti adanya dokumen kesepakatan keterpaduan lintas program<br>• Lintas sektor terkait, dengan bukti adanya dokumen dukungan pemecahan masalah yang penyebab dan latar belakangnya diluar kendali Puskesmas<br>• Sasaran/masyarakat dengan bukti dokumen peranserta aktif masyarakat dalam mengatasi sebagian masalahnya secara mandiri. </p>
            <select class="form-control" name="penggerakkan2" id="penggerakkan2" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan kegiatan mendapatkan dukungan dari lintas program, lintas sektor dan masyarakat sasaran di Puskesmas <a href="#" onclick="toggle_visibility('foo2');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo2" style="display:none; font-size:12px; margin-left:20px;">Tersedia dukungan dari sasaran di Puskesmas: <br> • Lintas program dengan bukti adanya kesepakatan keterpaduan lintas program <br> • Lintas sektor terkait, dengan bukti adanya dukungan pemecahan masalah yang penyebab dan latar belakangnya diluar kendali Puskesmas <br>• Masyarakat dengan bukti adanya peran serta aktif masyarakat dalam mengatasi sebagian masalahnya secara mandiri. </p>
            <select class="form-control" name="penggerakkan3" id="penggerakkan3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan kegiatan di Puskesmas dimonitor oleh Kepala Puskesmas dan penanggung jawab terkait. <a href="#" onclick="toggle_visibility('foo3');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo3" style="display:none; font-size:12px; margin-left:20px;">1. Tersedia bukti pelaksanaan monitoring kegiatan Puskesmas oleh Kepala Puskesmas dan penanggung jawab terkait. <br> 2. Tersedia analisis hasil monitoring pelaksana-an kegiatan dan rumusan rencana tindak lanjutnya yang dilakukan oleh penanggung jawab terkait, yang dilihat dari laporan lokakarya mini</p>
            <select class="form-control" name="penggerakkan4" id="penggerakkan4 " disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Terdapat upaya Puskesmas untuk memperoleh masukan dari pelanggan/sasaran mengenai kualitas dan kepuasan terhadap pelaksanaan kegiatan <a href="#" onclick="toggle_visibility('foo4');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo4" style="display:none; font-size:12px; margin-left:20px;">Ada upaya yang dilakukan oleh Puskesmas untuk mendapatkan umpan balik dari masyarakat tentang layanan yang diterimanya, yaitu: <br> 1. Secara pasif, melalui kotak saran, SMS Cen-ter, Hotline, Media Sosial, FB, dll <br> 2. Secara aktif melalui antara lain: survei kepu-asan pelanggan sesuai ketentuan yang berlaku (Permenpan RB nomor 14/2017, tentang Pedoman Penyusunan Survei Kepuasan Masyarakat Unit Penyelenggara Pelayanan Publik) atau secara periodik untuk menampung keluhan, masukan, harapan dan permintaan pengguna layanan, pelanggan/ sasaran/penerima manfaat terhadap kualitas dan kepuasan pelayanan.</p>
            <select class="form-control" name="penggerakkan5" id="penggerakkan5" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Terdapat upaya perbaikan yang dilaksanakan oleh Puskesmas terhadap masalah pelayanan yg dianggap penting atau prioritas untuk diperbaiki berdasarkan masukan pengguna layanan/ pelanggan/dinas kesehatan kabupaten/kota<a href="#" onclick="toggle_visibility('foo5');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo5" style="display:none; font-size:12px; margin-left:20px;">1. Ada bukti nyata upaya perbaikan/ peningkatan/percepatan yang dilakukan oleh Puskesmas untuk memperbaiki/ meningkatkan kinerja/kualitas dan mengurangi risiko/potensi risiko akibat kesenjangan kinerja dan mutu pelayanan misalnya dengan memperbaiki sarana prasarana, perbaikan metode, perbaikan dokumen-dokumen acuan, perbaikan alur pelayanan, dan lain-lain mengacu pada instrumen akreditasi.<br> 2. Ada urutan prioritas perbaikan yang dilaku-kan relevan dengan urutan prioritas perma-salahan yang ada. <br> 3. Ada upaya Puskesmas untuk melakukan tindak lanjut dari umpan balik yang telah disampaikan oleh dinas kesehatan kabupaten/kota <br> 4. Upaya perbaikan yang dilakukan me-rupakan hasil pembahasan Tim manajemen Puskesmas & penanggung jawab program sebagai rumusan rencana tindak lanjut yang dilaporkan kepada kepala Puskesmas untuk ditelaah dan selanjutnya ditetapkan. <br>5. Pelaksanaan perbaikan/peningkatan mau-pun percepatan mutu pelayanan yang dilaksanakan Puskesmas dipantau oleh Tim Audit Internal. </p>
            <select class="form-control" name="penggerakkan6" id="penggerakkan6" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Bila salah satu kriteria tidak terpenuhi nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>

        </form>
        <a class="btn float-right btn-success" href="table.html" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Masukan</a>
        <a class="btn float-right btn-danger" href="#" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Hapus</a>

      </div>

    </div>


  </div>
</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/') ?>js/tooltip.js"></script>
<script src="<?= base_url('assets/') ?>js/para.js"></script>