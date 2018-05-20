<?php
	require "../../config/koneksi.php";
	require "../../class/jurusan.class.php";

	$jurusan = new Jurusan(Database::connect());

	$jurusan->id = $_GET['id'];

	$result = $jurusan->find()->fetchObject();


	include "../app/header.php";
?>

<div class="container">	

	<form action="../../controller/jurusan.controller.php" method="POST">
	  <div class="form-group">
	  	<input type="hidden" name="id" value="<?php echo $result->ID; ?>";
	    <label for="exampleInputEmail1">Nama</label>
	    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Jurusan" value="<?php echo $result->NAMA; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Kode</label>
	    <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Jurusan" value="<?php echo $result->KODE; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">NPM</label>
	    <input type="text" class="form-control" name="npm" id="npm" placeholder="Masukan NPM Sekarang" value="<?php echo $result->NPM; ?>">
	  </div>
	  
	  <button type="submit" name="update" value="update" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>