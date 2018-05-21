<?php

	require "../config/koneksi.php";

	var_dump($_SESSION);

	if($_SESSION['username'] == NULL){
		header("location:auth/login.php");	
	}

	else{
		header("location:calon-mahasiswa/");		
	}