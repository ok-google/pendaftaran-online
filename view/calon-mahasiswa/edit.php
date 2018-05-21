<?php
	require "../../config/koneksi.php";
	require "../../class/CalonMahasiswa.class.php";

	if($_SESSION['username'] == NULL){
		header("location:../auth/login.php");	
	}

	
	$cmhs = new CalonMahasiswa(Database::connect());
	$cmhs->id = $_GET['id'];


	$result = $cmhs->find()->fetchObject();

	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/CalonMahasiswa.controller.php" method="POST">
	  <div class="form-group">
	  	<input type="hidden" name="id" value="<?php echo $result->ID; ?>">
	    <label for="exampleInputEmail1">Nomer Pendaftaran</label>
	    <input type="text" class="form-control" name="no_pendaftaran" placeholder="Masukan Nomer Pendaftaran" value="<?php echo $result->NO_PENDAFTARAN; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nama</label>
	    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo $result->NAMA; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Tempat Lahir</label>
	    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?php echo $result->TEMPAT_LAHIR; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Tanggal Lahir</label>
	    <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" value="<?php echo $result->TGL_LAHIR; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Jenis Kelamin</label>
	    <select class="form-control" name="jenis_kelamin" value="<?php echo $result->JK; ?>">
	    	<option value='N'> -- Pilih Satu -- </option>
	    	<option value='L'> Laki - Laki </option>
	    	<option value='N'> Perempuan </option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Alamat</label>
	    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="<?php echo $result->ALAMAT; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nomer KTP</label>
	    <input type="text" class="form-control" name="no_ktp" placeholder="Masukan Nomer KTP" value="<?php echo $result->NO_KTP; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Tempat KK</label>
	    <input type="text" class="form-control" name="no_kk" placeholder="Masukan Nomer KK" value="<?php echo $result->NO_KK; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nomer Telepon</label>
	    <input type="text" class="form-control" name="no_telp" placeholder="Masukan Nomer Telepon" value="<?php echo $result->NO_TELP; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Asal Sekolah</label>
	    <input type="text" class="form-control" name="asal" placeholder="Masukan Asal Sekolah" value="<?php echo $result->ASAL; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nomer Ijazah</label>
	    <input type="text" class="form-control" name="no_ijazah" placeholder="Masukan Nomer Ijazah" value="<?php echo $result->NO_IJAZAH; ?>">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Total Nilai UN</label>
	    <input type="text" class="form-control" name="total_nilai_un" placeholder="Masukan Total Nilai UN" value="<?php echo $result->TOTAL_NILAI_UN; ?>">
	  </div>
	  
	  <button type="submit" name="update" value="update" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>