<?php
	
	require "../config/koneksi.php";
	require "../class/Verifikasi.class.php";

	$verifikasi = new Verifikasi(Database::connect());

	if(isset($_GET['data']))
	{
		$verifikasi->data_cmhs = $_GET['data'];
		$verifikasi->id = $_GET['id'];

		if($verifikasi->VerData())
			header("Location: {$_SERVER['HTTP_REFERER']}");
	}