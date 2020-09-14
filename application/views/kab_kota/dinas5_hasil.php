<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">

      <div class="col-md-9">


        <form style="height:350px; overflow-y:auto; padding:20px;">

          <div class="form-group">
            <label for="exampleFormControlInput1">Terlaksananya pengukuran indikator mutu<a href="#" onclick="toggle_visibility('foo8');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo8" style="display:none; font-size:12px; margin-left:20px;">Melakukan pengukuran indikator mutu secara periodik sesuai dengan ketentuan yang ditetapkan oleh kepala Puskesmas. </p>
            <select class="form-control" name="peningkatan1" id="peningkatan1" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kegiatan audit internal dilaksanakan untuk memantau mutu dan kinerja puskesmas <a href="#" onclick="toggle_visibility('foo9');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo9" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan rencana audit (audit plan) <br> 2. Dilaksanakannya audit internal sesuai rencana<br> 3. Dilaksanakan tindak lanjut audit internal<br>4. Disusun laporan pelaksanaan audit internal </p>
            <select class="form-control" name="peningkatan2" id="peningkatan2" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pertemuan tim mutu (Rapat Tinjauan Manajemen), sebagai wadah untuk evaluasi minimal setiap semester <a href="#" onclick="toggle_visibility('foo10');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo10" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan jadwal RTM <br> 2. Dilaksanakan RTM<br>3. Dilakukan tindak lanjut RTM </p>
            <select class="form-control" name="peningkatan3" id="peningkatan3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Melaksanakan PPS (Perencanaan Program Strategi) sebagai bentuk upaya perbaikan dan peningkatan mutu secara berkesinambungan <a href="#" onclick="toggle_visibility('foo11');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo11" style="display:none; font-size:12px; margin-left:20px;">1. Disusun PPS berdasarkan rekomendasi survey akreditasi <br> 2. Dilaksanakan tindak lanjut PPS yang sudah disusun <br> 3. Dilakukan evaluasi tindak lanjut PPS</p>
            <select class="form-control" name="peningkatan4" id="peningkatan4" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Memenuhi sebagian kriteria nilai 5</option>
              <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ada pelaporan Insiden Keselamatan Pasien <a href="#" onclick="toggle_visibility('foo12');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo12" style="display:none; font-size:12px; margin-left:20px;">1. Pelaporan harus tepat waktu <br> 2. Semua kasus dilaporkan </p>
            <select class="form-control" name="peningkatan5" id="peningkatan5 disabled">
              <option selected>Pilih ...</option>
              <option value="1">Memenuhi semua kriteria nilai 10</option>
              <option value="2">Laporan tepat waktu tetapi kasus yang dilaporkan 80- < 100%, nilai 5 </option> <option value="3">Tidak memenuhi semua kriteria, nilai 0</option>
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
