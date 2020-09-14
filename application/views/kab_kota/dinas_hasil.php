<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">
      <div class="col-md-9">

        <form style="height:350px; overflow-y:auto; padding:20px;">



          <div class="form-group">
            <label for="exampleFormControlInput1">Pemenuhan standar bangunan Puskesmas <a href="#" onclick="toggle_visibility('foo');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo" style="display:none; font-size:14px;">Persentase pemenuhan standar bangunan Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan</p>

            <select class="form-control" name="pemenuhan1" id="pemenuhan1" disabled>
              <option selected>Pilih ...</option>
              <option value="1">≥ 80%</option>
              <option value="2">61% - 79%</option>
              <option value="3">≤ 60%</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Pemenuhan standar prasarana <a href="#" onclick="toggle_visibility('foo1');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo1" style="display:none; font-size:14px;">Persentase pemenuhan standar prasarana Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan </p>

            <select class="form-control" name="pemenuhan2" id="pemenuhan2" disabled>
              <option selected>Pilih ...</option>
              <option value="1">≥ 80%</option>
              <option value="2">61% - 79%</option>
              <option value="3">≤ 60%</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pemenuhan standar peralatan Puskesmas <a href="#" onclick="toggle_visibility('foo2');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo2" style="display:none; font-size:14px;">Persentase pemenuhan standar prasarana Puskesmas yang tercantum dalam ASPAK dan sudah divalidasi pada saat pembinaan </p>
            <select class="form-control" name="pemenuhan3" id="pemenuhan3" disabled>
              <option selected>Pilih ...</option>
              <option value="1">≥ 80%</option>
              <option value="2">61% - 79%</option>
              <option value="3">≤ 60%</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ketersediaan obat <a href="#" onclick="toggle_visibility('foo3');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo3" style="display:none; font-size:14px;">Ketersediaan obat di Puskesmas sesuai dengan RKO</p>
            <select class="form-control" name="pemenuhan4" id="pemenuhan4" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Seluruh obat (100%) sesuai RKO tersedia di Puskesmas</option>
              <option value="2">80% - < 100% obat di RKO tersedia di Puskesmas </option> <option value="3">
                  < 80 % obat di RKO tersedia di Puskesmas </option> </select> </div> <div class="form-group">
                    <label for="exampleFormControlInput1">Pengendalian Ketersediaan Obat <a href="#" onclick="toggle_visibility('foo7');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
                    <br>
                    <p id="foo7" style="display:none; font-size:14px;">Terdapat upaya yang dilakukan untuk mencegah/mengatasi kekosongan atau kekurangan obat di puskesmas, meliputi tersedianya 3 dokumen : <br>
                      <br> 1. SOP Pengendalian Ketersediaan
                      <br> 2. Dokumen Perencanaan Kebutuhan Obat
                      <br> 3. Dokumen mutasi obat/distribusi obat</p>
                    </label>
                    <select class="form-control" name="pemenuhan5" id="pemenuhan5" disabled>
                      <option selected>Pilih ...</option>
                      <option value="1">Tersedianya 3 dokumen</option>
                      <option value="2">Tersedia dua dokumen </option>
                      <option value="3">Hanya tersedia satu dokumen atau tidak ada dokumen tersedia</option>
                    </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pemenuhan sumber daya manusia (SDM) <a href="#" onclick="toggle_visibility('foo4');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo4" style="display:none; font-size:14px;">Jenis dan jumlah SDM kesehatan Puskesmas terpenuhi sesuai analisis beban kerja (Permenkes 33 tahun 2015 tentang Analisis Beban Kerja SDM Kesehatan)
              Standar minimal sesuai dengan Permenkes 43 tahun 2019 tentang Puskesmas</p>
            <select class="form-control" name="pemenuhan6" id="pemenuhan6" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Alternatif SDM Kesehatan Puskesmas sesuai ABK </option>
              <option value="2">Alternatif SDM Kesehatan Puskesmas sesuai standar minimal tetapi tidak sesuai ABK </option>
              <option value="3">SDM Kesehatan Puskesmas tidak sesuai ABK dan standar minimal </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Penerapan Sistem Rujukan Terintegrasi (Sisrute)<a href="#" onclick="toggle_visibility('foo5');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo5" style="display:none; font-size:14px;">Sistem rujukan terintegrasi sudah diterapkan ditandai dengan: pemanfaatan Aplikasi Sisrute dalam proses rujukan pasien ke FKRTL atau ke FKTP lainnya</p>
            <select class="form-control" name="pemenuhan7" id="pemenuhan7" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Aplikasi Sisrute tersedia dan dimanfaatkan secara rutin (>50 kasus pertahun)</option>
              <option value="2">Aplikasi Sisrute telah tersedia tetapi frekuensi pemanfaatannya rendah (< 50 kasus per tahun)</option> <option value="3">Aplikasi Sisrute belum tersedia</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Pelaksanaan Sistem Informasi Puskesmas <a href="#" onclick="toggle_visibility('foo6');" style="margin-left: 3px; font-size: 12px; color: #16b3ac;"> Kriteria </a> </label>
            <br>
            <p id="foo6" style="display:none; font-size:14px;">Sistem Informasi Puskesmas telah diterapkan dengan baik di Puskesmas ditandai dengan: adanya pencatatan dan pelaporan Puskesmas dalam bentuk elektronik atau non elektronik sesuai dengan ketentuan yang berlaku.(Permenkes 31 tahun 2019 tentang Sistem Informasi Puskesmas)</p>
            <select class="form-control" name="pemenuhan8" id="pemenuhan8" disabled>
              <option selected>Pilih ...</option>
              <option value="1">Pencatatan dan pelaporan dilakukan sesuai ketentuan dan tepat waktu</option>
              <option value="2">Pencatatan dan pelaporan dilakukan sesuai ketentuan tetapi tidak tepat waktu</option>
              <option value="3">Pencatatan dan pelaporan tidak dilakukan sesuai dengan ketentuan.</option>
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
