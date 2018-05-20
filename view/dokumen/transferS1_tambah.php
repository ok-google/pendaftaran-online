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
	  
	  <button type="submit" name="transferS1" value="transferS1" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>