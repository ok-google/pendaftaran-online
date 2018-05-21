<?php
	require "../../config/koneksi.php";

	include "../app/header.php";
?>

<div class="container">	
	<form action="../../controller/User.controller.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="text" class="form-control" name="username" placeholder="Masukan Username">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" name="email" placeholder="Masukan Email">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Password</label>
	    <input type="Password" class="form-control" name="password" placeholder="Masukan Password">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Pertanyaan Keamanan</label>
	    <input type="text" class="form-control" name="pertanyaan" placeholder="Ex : Nama Depan Guru SD ?">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Jawaban</label>
	    <input type="password" class="form-control" name="jawaban" placeholder="Painem">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Role</label>
	    <select name="role" class="form-control select" >
	    	<option value='A'> Admin </option>
	    	<option value='U'> User </option>
	    </select>
	  </div>
	  
	  <button type="submit" name="insert" value="insert" class="btn btn-primary">Register</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>