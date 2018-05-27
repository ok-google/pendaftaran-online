<?php
	require "../../config/koneksi.php";
	require "../../class/jurusan.class.php";
	require "../../class/kota.class.php";

	if($_SESSION['username'] == NULL){
		header("location:../auth/login.php");	
	}
	
	$jurusan = new Jurusan(Database::connect());
	$kota = new Kota(Database::connect());

	$result = $jurusan->all();
	$resultKota = $kota->all();


	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/CalonMahasiswa.controller.php" method="POST">

	  <div class="form-group">
	    <label for="exampleInputEmail1">Jalur Pendaftaran</label>
	    <select class="form-control" name="jalur">
	    	<option value='N'> -- Pilih Satu -- </option>
	    	<option value='reguler'> Reguler </option>
	    	<option value='beasiswa'> Beasiswa </option>
	    	<option value='transferd3'> Transfer D3 </option>
	    	<option value='transfers1'> Transfer S1 </option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Jurusan</label>
	    <select class="form-control" name="jurusan_id">
	    	<?php 
	    		while($value = $result->fetchObject()){ 
	    			echo '<option value='.$value->ID.'>'. $value->NAMA.' </option>';
	    		}
	    	?>

	    </select>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nama</label>
	    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Tempat Lahir</label>
	    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Tanggal Lahir</label>
	    <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Jenis Kelamin</label>
	    <select class="form-control" name="jenis_kelamin">
	    	<option value='N'> -- Pilih Satu -- </option>
	    	<option value='L'> Laki - Laki </option>
	    	<option value='N'> Perempuan </option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Alamat</label>
	    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Kota</label>
	    <select class="form-control select2-single" name="kota">
	    	<option> -- Pilih Kota -- </option>
	    	<?php 
	    		while($value = $resultKota->fetchObject()){ 
	    			echo '<option value='.$value->ID.'>'. $value->NAMA.' </option>';
	    		}
	    	?>
	    </select>
	  </div>	  

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nomer KTP</label>
	    <input type="text" class="form-control" name="no_ktp" placeholder="Masukan Nomer KTP">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Tempat KK</label>
	    <input type="text" class="form-control" name="no_kk" placeholder="Masukan Nomer KK">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nomer Telepon</label>
	    <input type="text" class="form-control" name="no_telp" placeholder="Masukan Nomer Telepon">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Asal Sekolah</label>
	    <input type="text" class="form-control" name="asal" placeholder="Masukan Asal Sekolah">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nomer Ijazah</label>
	    <input type="text" class="form-control" name="no_ijazah" placeholder="Masukan Nomer Ijazah">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Total Nilai UN</label>
	    <input type="text" class="form-control" name="total_nilai_un" placeholder="Masukan Total Nilai UN">
	  </div>


	  
	  <button type="submit" name="insert" value="insert" class="btn btn-primary">Submit</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>