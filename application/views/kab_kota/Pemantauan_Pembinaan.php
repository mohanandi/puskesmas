<div class="site-section" id="menu">
 <div class="container">
  <div class="row mb-5">
   <div class="col-lg-7 mx-auto text-center">
    <span class="subheading">Form Menu</span>
    <h2 class="heading"><strong class="text-primary">Pemantauan Pembinaan Puskesmas</strong></h2>
   </div>
  </div>

  <form method="POST" action="" style=" padding:20px;">
   <div class="form-group">
    <label for="exampleFormControlInput1">Puskesmas</label>
    <input type="text" class="form-control" placeholder="" name="nama" id="nama" value="">
   </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Dinas Kesehatan Kabupaten / Kota</label>
    <input type="text" class="form-control" placeholder="" name="nama" id="nama" value="">
   </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Anggota TPT</label>
    <input type="text" class="form-control" placeholder="1" name="nama" id="nama" value="">
    <br>
    <input type="text" class="form-control" placeholder="2" name="nama" id="nama" value="">
    <br>
    <input type="text" class="form-control" placeholder="3" name="nama" id="nama" value="">
   </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nama Cluster Binaan</label>
    <input type="text" class="form-control" placeholder="" name="nama" id="nama" value="">
   </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Jumlah Pembinaan</label>
    <input type="text" id="member" name="member" class="form-control" value=""><a href="#" id="filldetails" onclick="addFields()">Tambah</a>
    <br>

    <div id="container" />
   </div>
   <button type="submit" class="btn float-right btn-success" style="color: white; margin-left:10px; margin-top:5px; border-radius:5px;">Submit</button>
  </form>
 </div>
</div>