<?php

	require "../config/koneksi.php";
//	require "../class/Dokumen.class.php";
//	require "../class/Pendaftaran.class.php";
	require "../class/Verifikasi.class.php";

	$dokumen = new Dokumen(Database::connect());
	$pendaftaran = new Pendaftaran(Database::connect());
	$verifikasi = new Verifikasi(Database::connect());


	if(isset($_POST['reguler']))
	{
		$dokumen->ijazah 	= $dokumen->storeIjazah($_FILES["ijazah"], $_POST['no_pendaftaran'], pathinfo($_FILES['ijazah']["name"],PATHINFO_EXTENSION));
		$dokumen->kk 		= $dokumen->storeKK($_FILES["kk"], $_POST['no_pendaftaran'], pendafpathinfo($_FILES['kk']["name"],PATHINFO_EXTENSION));
		$dokumen->ktp 		= $dokumen->storeKTP($_FILES["ktp"], $_POST['no_pendaftaran'], pathinfo($_FILES['ktp']["name"],PATHINFO_EXTENSION));

		$dokumen->store();

		$pendaftaran->id = $_POST['id'];
		$pendaftaran->dokumen->id = $dokumen->getId();

		if($pendaftaran->setDokumen())
		{
			header("location:../view/calon-mahasiswa/");
		}

		else
		{
			header("location:../view/dokumen/tambah");	
		}
	}

	if(isset($_POST['beasiswa']))
	{
		$dokumen->ijazah 	= $dokumen->storeIjazah($_FILES["ijazah"], $_POST['no_pendaftaran'], pathinfo($_FILES['ijazah']["name"],PATHINFO_EXTENSION));
		$dokumen->kk 		= $dokumen->storeKK($_FILES["kk"], $_POST['no_pendaftaran'], pathinfo($_FILES['kk']["name"],PATHINFO_EXTENSION));
		$dokumen->ktp 		= $dokumen->storeKTP($_FILES["ktp"], $_POST['no_pendaftaran'], pathinfo($_FILES['ktp']["name"],PATHINFO_EXTENSION));
		$dokumen->rapor 	= $dokumen->storeRapot($_FILES["rapot"], $_POST['no_pendaftaran'], pathinfo($_FILES['rapot']["name"],PATHINFO_EXTENSION));

		$dokumen->store();

		$pendaftaran->id = $_POST['id'];
		$pendaftaran->dokumen->id = $dokumen->getId();

		$verifikasi->pendaftaran->id = $pendaftaran->id;
		$verifikasi->data_cmhs = 'T';
		$verifikasi->dokumen = 'T';
		$verifikasi->transfer = 'T';
		$verifikasi->terdaftar = 'T';

		$verifikasi->store();

		if($pendaftaran->setDokumen())
		{
			header("location:../view/calon-mahasiswa/");
		}

		else
		{
			header("location:../view/dokumen/tambah");	
		}
	}

	if(isset($_POST['transferS1']))
	{
		$dokumen->kk 		= $dokumen->storeKK($_FILES["kk"], $_POST['no_pendaftaran'], pathinfo($_FILES['kk']["name"],PATHINFO_EXTENSION));
		$dokumen->ktp 		= $dokumen->storeKTP($_FILES["ktp"], $_POST['no_pendaftaran'], pathinfo($_FILES['ktp']["name"],PATHINFO_EXTENSION));
		$dokumen->ipk 		= $dokumen->storeIPK($_FILES["ipk"], $_POST['no_pendaftaran'], pathinfo($_FILES['ipk']["name"],PATHINFO_EXTENSION));
		$dokumen->khs 		= $dokumen->storeKHS($_FILES["khs"], $_POST['no_pendaftaran'], pathinfo($_FILES['khs']["name"],PATHINFO_EXTENSION));
		$dokumen->ket_pindah= $dokumen->storeKetPindah($_FILES["ket_pindah"], $_POST['no_pendaftaran'],
														pathinfo($_FILES['ket_pindah']["name"],PATHINFO_EXTENSION));


		$dokumen->store();

		$pendaftaran->id = $_POST['id'];
		$pendaftaran->dokumen->id = $dokumen->getId();

		if($pendaftaran->setDokumen())
		{
			header("location:../view/calon-mahasiswa/");
		}

		else
		{
			header("location:../view/dokumen/tambah");	
		}
	}

	if(isset($_POST['transferD3']))
	{
		$dokumen->kk 		= $dokumen->storeKK($_FILES["kk"], $_POST['no_pendaftaran'], pathinfo($_FILES['kk']["name"],PATHINFO_EXTENSION));
		$dokumen->ktp 		= $dokumen->storeKTP($_FILES["ktp"], $_POST['no_pendaftaran'], pathinfo($_FILES['ktp']["name"],PATHINFO_EXTENSION));
		$dokumen->ijazah_d3	= $dokumen->storeIjazahD3($_FILES["ijazah_d3"], $_POST['no_pendaftaran'], 
														pathinfo($_FILES['ijazah_d3']["name"],PATHINFO_EXTENSION));
		$dokumen->transkrip	= $dokumen->storeTranskrip($_FILES["transkrip"], $_POST['no_pendaftaran'], 
														pathinfo($_FILES['transkrip']["name"],PATHINFO_EXTENSION));

		$dokumen->store();

		$pendaftaran->id = $_POST['id'];
		$pendaftaran->dokumen->id = $dokumen->getId();

		if($pendaftaran->setDokumen())
		{
			header("location:../view/calon-mahasiswa/");
		}

		else
		{
			header("location:../view/dokumen/tambah");	
		}
	}

	if(isset($_POST['update']))
	{

	}

	if(isset($_GET['id']))
	{
		$cmhs->id = $_GET['id'];		

		$cmhs->delete();

		header("location:../view/calon-mahasiswa/");
	}