<?php
	require "../../config/koneksi.php";

	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/Dokumen.controller.php" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
	    <label for="exampleInputEmail1">Nomer Pendaftaran</label>
	    <input type="text" class="form-control" name="no_pendaftaran" placeholder="Masukan Nomer Pendaftaran" readonly="" 
	    value="<?php echo $_GET['jurusan'].date("Y").date("m").date("d").$_GET['id']; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">KTP</label>
	    <input type="file" class="form-control-file" name="ktp">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">KK</label>
	    <input type="file" class="form-control-file" name="kk">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">KHS</label>
	    <input type="file" class="form-control-file" name="khs">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">IPK</label>
	    <input type="file" class="form-control-file" name="ipk">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Surat Keterangan Pindah</label>
	    <input type="file" class="form-control-file" name="ket_pindah">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Foto</label>
	    <input type="file" class="form-control-file" name="foto">
	  </div>
	  
	  <button type="submit" name="transferS1" value="transferS1" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>