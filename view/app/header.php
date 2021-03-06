<!DOCTYPE html>

<html>
	<head>
		<title>ITATS</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta content="width=device-width, initial-scale=1" name="viewport">
    	<meta content="Preview page of Metronic Admin Theme #4 for basic bootstrap tables with various options and styles" name="description">
    	<meta content="" name="author">

    	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    	<link href="../../assets/css/select2.min.css" rel="stylesheet" type="text/css">
    	<script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
    	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

    	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	</head>

	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">ITATS</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="../calon-mahasiswa">Calon Mahasiswa <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../jurusan">Jurusan</a>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="../status">Status</a> 
	      </li>
	    </ul>
	    <?php
	   	if($_SESSION['username'] != NULL)
	    	{
	    		echo '<span class="navbar-brand">'.$_SESSION['username'].'</span>';
	    		echo '<a class="btn btn-outline-success my-2 my-sm-0" href="../../controller/auth.controller.php?logout=1" >Logout</a>';
	    	}
	    	else if(isset($_GET['register']))
	    	{
	    		echo '<a class="btn btn-outline-success my-2 my-sm-0" href="login.php" >Login</a>';		
	    	}

	    	else
	    	{
	    		echo '<a class="btn btn-outline-success my-2 my-sm-0" href="register.php?register=true" >Register</a>';	
	    	}  
	    ?>
	  </div>
	</nav>
