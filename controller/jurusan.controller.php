<?php

	require "../config/koneksi.php";
	require "../class/jurusan.class.php";

	$jurusan = new Jurusan(Database::connect());


	if(isset($_POST['insert']))
	{
		$jurusan->nama = $_POST['nama'];
		$jurusan->kode = $_POST['kode'];
		$jurusan->npm = $_POST['npm'];

		if($jurusan->store())
		{
			header("location:../view/jurusan/");
		}

		else
		{
			header("location:../view/jurusan/tambah.php");	
		}
	}

	if(isset($_POST['update']))
	{
		$jurusan->nama = $_POST['nama'];
		$jurusan->kode = $_POST['kode'];
		$jurusan->npm = $_POST['npm'];
		$jurusan->id = $_POST['id'];

		if($jurusan->update())
		{
			header("location:../view/jurusan/");
		}

		else
		{
			header("location:../view/jurusan/tambah.php");	
		}
	}

	if(isset($_GET['id']))
	{
		$jurusan->id = $_GET['id'];		

		if($jurusan->delete())
		{
			header("location:../view/jurusan/");
		}

		else
		{
			header("location:../view/jurusan/tambah.php");	
		}
	}