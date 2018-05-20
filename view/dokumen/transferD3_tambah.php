<?php
	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/Dokumen.controller.php" method="POST" enctype="multipart/form-data">
	  <input type="hidden" value="<?php $_GET['no']; ?>" name="no_pendaftaran">

	  <div class="form-group">
	    <label for="exampleInputEmail1">KTP</label>
	    <input type="file" class="form-control-file" name="ktp">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">KK</label>
	    <input type="file" class="form-control-file" name="kk">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Ijazah</label>
	    <input type="file" class="form-control-file" name="ijazah_d3">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Transkrip Nilai</label>
	    <input type="file" class="form-control-file" name="transkrip">
	  </div>
	  
	  <button type="submit" name="transferD3" value="transferD3" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>