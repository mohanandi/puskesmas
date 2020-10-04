<div class="site-section" id="menu">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <span class="subheading">Form Menu</span>
        <h2 class="heading"><strong class="text-primary">Peningkatan Mutu</strong><br> Puskesmas</h2>
      </div>
    </div>



    <form style=" padding:20px;">
      <div class="form-group">
        <label for="exampleFormControlInput1">1. Terlaksananya pengukuran indikator mutu<a href="##" onclick="toggle_visibility('foo8');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Memenuhi semua kriteria, nilai 10 <br>
          2. Bila salah satu kriteria tidak terpenuhi, nilai 5 <br>
          3. Tidak memenuhi semua kriteria, nilai 0
          <p id="foo8" style="display:none; font-size:12px; margin-left:20px;">Melakukan pengukuran indikator mutu secara periodik sesuai dengan ketentuan yang ditetapkan oleh kepala Puskesmas. </p>
          <input type="text" class="form-control" value="<?= $data['indikator_mutu']; ?>" placeholder="" name="peningkatan1" id="peningkatan1" readonly>


      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">2. Kegiatan audit internal dilaksanakan untuk memantau mutu dan kinerja puskesmas <a href="##" onclick="toggle_visibility('foo9');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Memenuhi semua kriteria, nilai 10 <br>
          2. Bila salah satu kriteria tidak terpenuhi, nilai 5 <br>
          3. Tidak memenuhi semua kriteria, nilai 0
          <p id="foo9" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan rencana audit (audit plan) <br> 2. Dilaksanakannya audit internal sesuai rencana<br> 3. Dilaksanakan tindak lanjut audit internal<br>4. Disusun laporan pelaksanaan audit internal </p>
          <input type="text" class="form-control" value="<?= $data['audit_internal']; ?>" placeholder="" name="peningkatan2" id="peningkatan2" readonly>


      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">3. Pertemuan tim mutu (Rapat Tinjauan Manajemen), sebagai wadah untuk evaluasi minimal setiap semester <a href="##" onclick="toggle_visibility('foo10');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Memenuhi semua kriteria, nilai 10 <br>
          2. Bila salah satu kriteria tidak terpenuhi, nilai 5 <br>
          3. Tidak memenuhi semua kriteria, nilai 0
          <p id="foo10" style="display:none; font-size:12px; margin-left:20px;">1. Ditetapkan jadwal RTM <br> 2. Dilaksanakan RTM<br>3. Dilakukan tindak lanjut RTM </p>
          <input type="text" class="form-control" value="<?= $data['rapat_tinjauan']; ?>" placeholder="" name="peningkatan3" id="peningkatan3" readonly>

      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">4. Melaksanakan PPS (Perencanaan Program Strategi) sebagai bentuk upaya perbaikan dan peningkatan mutu secara berkesinambungan <a href="##" onclick="toggle_visibility('foo11');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Memenuhi semua kriteria, nilai 10 <br>
          2. Bila salah satu kriteria tidak terpenuhi, nilai 5 <br>
          3. Tidak memenuhi semua kriteria, nilai 0
          <p id="foo11" style="display:none; font-size:12px; margin-left:20px;">1. Disusun PPS berdasarkan rekomendasi survey akreditasi <br> 2. Dilaksanakan tindak lanjut PPS yang sudah disusun <br> 3. Dilakukan evaluasi tindak lanjut PPS</p>
          <input type="text" class="form-control" value="<?= $data['melaksanakan_pps']; ?>" placeholder="" name="peningkatan4" id="peningkatan4" readonly>


      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">5. Ada pelaporan Insiden Keselamatan Pasien <a href="##" onclick="toggle_visibility('foo12');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
        <br>
        <span><strong> Penilaian</strong> </span>
        <p style="font-size:12px;">
          1. Memenuhi semua kriteria, nilai 10 <br>
          2. Bila salah satu kriteria tidak terpenuhi, nilai 5 <br>
          3. Tidak memenuhi semua kriteria, nilai 0
          <p id="foo12" style="display:none; font-size:12px; margin-left:20px;">1. Pelaporan harus tepat waktu <br> 2. Semua kasus dilaporkan </p>
          <input type="text" class="form-control" value="<?= $data['pelaporan_insiden']; ?>" placeholder="" name="peningkatan5" id="peningkatan5" readonly>

      </div>
      <a class="btn float-right btn-danger" href="<?= base_url() ?>Mutu/ubah/<?= $data['kode']; ?>" style="color: white; margin-left:10px; margin-top:5px;border-radius:5px;">Edit</a>
    </form>

  </div>
</div>