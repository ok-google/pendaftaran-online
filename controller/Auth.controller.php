<?php
	require "../config/koneksi.php";
	require "../class/Auth.class.php";

	$auth = new Auth($db = Database::connect());

	if (isset($_POST['login'])) 
	{
		$auth->username = $_POST['username'];
		$auth->password = $_POST['password'];

		$return = $auth->login();

		$_SESSION["username"] = $return->USERNAME;
		$_SESSION["id"] = $return->ID;
		$_SESSION["role"] = $return->ROLE;
		$_SESSION["email"] = $return->EMAIL; 

		if ($_SESSION['username'] == NULL) 
		{
			header("location:../view/auth/login.php?login=false");
		} 
		else 
		{
			header("location:../");
		}

	}

	if (isset($_GET['logout'])) 
	{
		$_SESSION['username'] = NULL;
		$_SESSION['id'] = NULL;
		$_SESSION['role'] = NULL;

		header("location:../");
	}