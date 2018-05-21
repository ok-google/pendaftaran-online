<?php

	require "../config/koneksi.php";
	require "../class/User.class.php";

	$user = new User(Database::connect());

	if(isset($_POST['insert']))
	{
	
		$user->username = $_POST['username'];
		$user->email = $_POST['email'];
		$user->password = $_POST['password'];
		$user->role = $_POST['role'];
		$user->pertanyaan = $_POST['pertanyaan'];
		$user->jawaban = $_POST['jawaban'];

		if($user->store())
		{
			header("location:../view/");
		}

		else
		{
			header("location:../view/");	
		}
	}

	if(isset($_POST['update']))
	{
		$user->id = $_POST['id'];
		$user->username = $_POST['username'];
		$user->email = $_POST['email'];
		$user->password = $_POST['password'];
		$user->pertanyaan = $_POST['pertanyaan'];
		$user->jawaban = $_POST['jawaban'];
		$user->role = $_POST['role'];

		if($user->update())
		{
			header("location:../view/");
		}

		else
		{
			header("location:../view/");	
		}
	}

	if(isset($_GET['id']))
	{
		$user->id = $_GET['id'];		

		if($user->delete())
		{
			header("location:../view/");
		}

		else
		{
			header("location:../view/");	
		}
	}