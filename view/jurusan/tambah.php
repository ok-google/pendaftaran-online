<?php
	require "../../config/koneksi.php";

	if($_SESSION['username'] == NULL){
		header("location:../auth/login.php");	
	}

	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/jurusan.controller.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Nama</label>
	    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Jurusan">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Kode</label>
	    <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Jurusan">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">NPM</label>
	    <input type="text" class="form-control" name="npm" id="npm" placeholder="Masukan NPM Sekarang">
	  </div>
	  
	  <button type="submit" name="insert" value="insert" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>