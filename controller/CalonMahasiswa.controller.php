<?php

	require "../config/koneksi.php";
	require "../class/CalonMahasiswa.class.php";

	$cmhs = new CalonMahasiswa(Database::connect());
	

	if(isset($_POST['insert']))
	{
		$cmhs->no_pendaftaran = $_POST['no_pendaftaran'];
		$cmhs->nama = $_POST['nama'];
		$cmhs->tempat_lahir = $_POST['tempat_lahir'];
		$cmhs->tgl_lahir = $_POST['tgl_lahir'];
		$cmhs->alamat = $_POST['alamat'];
		$cmhs->jk = $_POST['jenis_kelamin'];
		$cmhs->no_ktp = $_POST['no_ktp'];
		$cmhs->no_kk = $_POST['no_kk'];
		$cmhs->no_telp = $_POST['no_telp'];
		$cmhs->asal = $_POST['asal'];
		$cmhs->no_ijazah = $_POST['no_ijazah'];
		$cmhs->total_nilai_un = $_POST['total_nilai_un'];

		if($cmhs->store())
		{
			if($_POST['jalur'] == "reguler")
				header('location:../view/dokumen/reguler_tambah?no_pendaftaran='.$cmhs->no_pendaftaran.'&id='.$cmhs->getId());
			if($_POST['jalur'] == "beasiswa")
				header('location:../view/dokumen/beasiswa_tambah?no_pendaftaran='.$cmhs->no_pendaftaran.'&id='.$cmhs->getId());
			if($_POST['jalur'] == "transferd3")
				header('location:../view/dokumen/transferD3_tambah?no_pendaftaran='.$cmhs->no_pendaftaran.'&id='.$cmhs->getId());
			if($_POST['jalur'] == "transfers1")
				header('location:../view/dokumen/transferS1_tambah?no_pendaftaran='.$cmhs->no_pendaftaran.'&id='.$cmhs->getId());
		}

		else
		{
			header("location:../view/calon-mahasiswa/tambah");	
		}
	}

	if(isset($_POST['update']))
	{
		$cmhs->no_pendaftaran = $_POST['no_pendaftaran'];
		$cmhs->nama = $_POST['nama'];
		$cmhs->tempat_lahir = $_POST['tempat_lahir'];
		$cmhs->tgl_lahir = $_POST['tgl_lahir'];
		$cmhs->alamat = $_POST['alamat'];
		$cmhs->jk = $_POST['jenis_kelamin'];
		$cmhs->no_ktp = $_POST['no_ktp'];
		$cmhs->no_kk = $_POST['no_kk'];
		$cmhs->no_telp = $_POST['no_telp'];
		$cmhs->asal = $_POST['asal'];
		$cmhs->no_ijazah = $_POST['no_ijazah'];
		$cmhs->total_nilai_un = $_POST['total_nilai_un'];
		$cmhs->id = $_POST['id'];

		if($cmhs->update())
		{
			header("location:../view/calon-mahasiswa/");
		}

		else
		{
			header("location:../view/calon-mahasiswa/edit");	
		}
	}

	if(isset($_GET['id']))
	{
		$cmhs->id = $_GET['id'];		

		$cmhs->delete();

		header("location:../view/calon-mahasiswa/");
	}