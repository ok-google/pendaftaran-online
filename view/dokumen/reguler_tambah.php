<?php
	require "../../config/koneksi.php";

	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/Dokumen.controller.php" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	  	<input type="hidden" value="<?php $_GET['no']; ?>" name="no_pendaftaran">
	    <label for="exampleInputEmail1">Ijazah</label>
	    <input type="file" class="form-control-file" name="ijazah">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">KTP</label>
	    <input type="file" class="form-control-file" name="ktp">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">KK</label>
	    <input type="file" class="form-control-file" name="kk">
	  </div>
	  
	  <button type="submit" name="reguler" value="reguler" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>