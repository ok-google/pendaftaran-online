<?php
	require "../../config/koneksi.php";

	include "../app/header.php";
?>

<div class="container">	

	<?php
	    if(isset($_GET['login'])){
	      echo '<div class="alert alert-danger">
	        <strong>Peringatan!</strong> Username atau Password Salah, Silahkan Cek lagi.
	      </div>';
	    }
    ?>
	<form action="../../controller/Auth.controller.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="text" class="form-control" name="username" placeholder="Masukan Username">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Password</label>
	    <input type="Password" class="form-control" name="password" placeholder="Masukan Password">
	  </div>

	  <button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
	</form>
</div>
	
<?php
	include "../app/footer.php";
?>