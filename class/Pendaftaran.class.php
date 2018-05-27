<?php
require 'CalonMahasiswa.class.php';
require 'Dokumen.class.php';
require 'User.class.php';
require 'jurusan.class.php';

class Pendaftaran {
	private $db;

	public $id;
	public $cmhs;
	public $jurusan;
	public $user;
	public $dokumen;
	public $jalur;
	public $no_pendaftaran;

	function __construct($db) {
		$this->db = $db;
		$this->cmhs = new CalonMahasiswa($db);
		$this->jurusan = new Jurusan($db);
		$this->user = new User($db);
		$this->dokumen = new Dokumen($db);
	}

	public function getId($id)
    {
        $query = "SELECT * FROM pendaftaran WHERE user_id = ?";
        $action = $this->db->prepare($query);
        $value = array($id);

        $action->execute($value);

        $result = $action->fetchObject();

        return $result->ID;
    }

	public function store() {
		$query = "INSERT INTO pendaftaran(user_id, calon_mahasiswa_id, jurusan_id, dokumen_id, jalur, tgl_daftar, no_pendaftaran)
							VALUES(?, ?, ?, ?, ?, current_date, ?)";
		$action = $this->db->prepare($query);
		$value = array($this->user->id, $this->cmhs->id, $this->jurusan->id, $this->dokumen->id, $this->jalur, $this->no_pendaftaran);
		$exec = $action->execute($value);

		if ($exec) {
			return true;
		} else {
			$errors = $action->errorInfo();
			echo ($errors[2]);

			return false;
		}
	}

	public function update() {
		$query = "UPDATE pendaftaran SET user_id = ?, calon_mahasiswa_id = ?, jurusan_id = ?, dokumen_id = ?, jalur = ?,
							tgl_daftar = ?, no_pendaftaran = ? WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->user->id, $this->cmhs->id, $this->jurusan->id, $this->dokumen->id, $this->jalur, $this->no_pendaftaran,
			$this->id);
		$exec = $action->execute($value);

		if ($exec) {
			return true;
		} else {
			$errors = $action->errorInfo();
			echo ($errors[2]);

			return false;
		}
	}

	public function delete() {
		$query = "DELETE FROM pendaftaran WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->id);
		$exec = $action->execute($value);

		if ($exec) {
			return true;
		} else {
			$errors = $action->errorInfo();
			echo ($errors[2]);

			return false;
		}
	}

	public function setDokumen() {
		$query = "UPDATE pendaftaran SET dokumen_id = ? no_pendaftaran = ? WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->dokumen->id, $this->no_pendaftaran, $this->id);
		$exec = $action->execute($value);

		if ($exec) {
			return true;
		} else {
			$errors = $action->errorInfo();
			echo ($errors[2]);

			return false;
		}
	}

	public function getCalonMahasiswaId()
	{
		$query = "SELECT CALON_MAHASISWA_ID FROM PENDAFTARAN WHERE USER_ID = ?";

		$action = $this->db->prepare($query);
		$value = array($this->id);
		$action->execute($value);
		$result = $action->fetchObject();

		$this->cmhs->id = $result->CALON_MAHASISWA_ID;		
	}

	public function getDetailReguler()
	{
		$query = "SELECT CMHS.NAMA NAMA_CMHS, CMHS.TEMPAT_LAHIR, CMHS.TGL_LAHIR, CMHS.ALAMAT, CMHS.JK, CMHS.NO_KTP, CMHS.NO_KK, CMHS.NO_TELP,
				  CMHS.NO_TELP, CMHS.ASAL, CMHS.NO_IJAZAH, CMHS.TOTAL_NILAI_UN, KOTA.NAMA NAMA_KOTA, JURUSAN.NAMA NAMA_JURUSAN, 
				  JURUSAN.BIAYA, JURUSAN.SPP, PENDAFTARAN.TGL_DAFTAR, PENDAFTARAN.JALUR, DOC.IJAZAH, DOC.KTP, DOC.KK, DOC.FOTO,
				  DOC.BUKTI_TRANSFER, VER.DATA_CMHS, VER.DOKUMEN, VER.TRANSFER, VER.TERDAFTAR, VER.ID VER_ID FROM calon_mahasiswa CMHS
				  INNER JOIN PENDAFTARAN ON (CMHS.ID = PENDAFTARAN.CALON_MAHASISWA_ID)
				  INNER JOIN JURUSAN ON (PENDAFTARAN.JURUSAN_ID = JURUSAN.ID)
				  INNER JOIN DOKUMEN DOC ON (PENDAFTARAN.DOKUMEN_ID = DOC.ID)
				  INNER JOIN KOTA_CALON_MAHASISWA KOTA_CMHS ON (KOTA_CMHS.CALON_MAHASISWA_ID = CMHS.ID)
				  INNER JOIN KOTA ON (KOTA_CMHS.KOTA_ID = KOTA.ID)
				  INNER JOIN VERIFIKASI VER ON (VER.PENDAFTARAN_ID = PENDAFTARAN.ID)
				  WHERE CMHS.ID = ?";

		$action = $this->db->prepare($query);
		$value = array($this->cmhs->id);
		$action->execute($value);

		return $action;	
	}

	public function getDetailBeasiswa()
	{
		$query = "SELECT CMHS.NAMA NAMA_CMHS, CMHS.TEMPAT_LAHIR, CMHS.TGL_LAHIR, CMHS.ALAMAT, CMHS.JK, CMHS.NO_KTP, CMHS.NO_KK, CMHS.NO_TELP,
				  CMHS.NO_TELP, CMHS.ASAL, CMHS.NO_IJAZAH, CMHS.TOTAL_NILAI_UN, KOTA.NAMA NAMA_KOTA, JURUSAN.NAMA NAMA_JURUSAN, 
				  PENDAFTARAN.TGL_DAFTAR, PENDAFTARAN.JALUR, DOC.IJAZAH, DOC.KTP, DOC.KK, DOC.BUKTI_TRANSFER, DOC.RAPOR, DOC.FOTO,
				  VER.DATA_CMHS, VER.DOKUMEN, VER.TRANSFER, VER.TERDAFTAR, VER.ID VER_ID FROM calon_mahasiswa CMHS
				  INNER JOIN PENDAFTARAN ON (CMHS.ID = PENDAFTARAN.CALON_MAHASISWA_ID)
				  INNER JOIN JURUSAN ON (PENDAFTARAN.JURUSAN_ID = JURUSAN.ID)
				  INNER JOIN DOKUMEN DOC ON (PENDAFTARAN.DOKUMEN_ID = DOC.ID)
				  INNER JOIN KOTA_CALON_MAHASISWA KOTA_CMHS ON (KOTA_CMHS.CALON_MAHASISWA_ID = CMHS.ID)
				  INNER JOIN KOTA ON (KOTA_CMHS.KOTA_ID = KOTA.ID)
				  INNER JOIN VERIFIKASI VER ON (VER.PENDAFTARAN_ID = PENDAFTARAN.ID)
				  WHERE CMHS.ID = ?";

		$action = $this->db->prepare($query);
		$action->execute(array($this->cmhs->id));

		return $action;
	}

	public function getDetailTransferD3()
	{
		$query = "SELECT CMHS.NAMA NAMA_CMHS, CMHS.TEMPAT_LAHIR, CMHS.TGL_LAHIR, CMHS.ALAMAT, CMHS.JK, CMHS.NO_KTP, CMHS.NO_KK, CMHS.NO_TELP,
				  CMHS.NO_TELP, CMHS.ASAL, CMHS.NO_IJAZAH, CMHS.TOTAL_NILAI_UN, KOTA.NAMA NAMA_KOTA, JURUSAN.NAMA NAMA_JURUSAN, 
				  PENDAFTARAN.TGL_DAFTAR, PENDAFTARAN.JALUR, DOC.IJAZAH_D3, DOC.TRANSKRIP, DOC.KTP, DOC.KK, DOC.BUKTI_TRANSFER, DOC.FOTO,
				  VER.DATA_CMHS, VER.DOKUMEN, VER.TRANSFER, VER.TERDAFTAR, VER.ID VER_ID FROM calon_mahasiswa CMHS
				  INNER JOIN PENDAFTARAN ON (CMHS.ID = PENDAFTARAN.CALON_MAHASISWA_ID)
				  INNER JOIN JURUSAN ON (PENDAFTARAN.JURUSAN_ID = JURUSAN.ID)
				  INNER JOIN DOKUMEN DOC ON (PENDAFTARAN.DOKUMEN_ID = DOC.ID)
				  INNER JOIN KOTA_CALON_MAHASISWA KOTA_CMHS ON (KOTA_CMHS.CALON_MAHASISWA_ID = CMHS.ID)
				  INNER JOIN KOTA ON (KOTA_CMHS.KOTA_ID = KOTA.ID)
				  INNER JOIN VERIFIKASI VER ON (VER.PENDAFTARAN_ID = PENDAFTARAN.ID)
				  WHERE CMHS.ID = ?";
		$action = $this->db->prepare($query);
		$action->execute(array($this->cmhs->id));

		return $action;
	}

	public function getDetailTransferS1()
	{
		$query = "SELECT CMHS.NAMA NAMA_CMHS, CMHS.TEMPAT_LAHIR, CMHS.TGL_LAHIR, CMHS.ALAMAT, CMHS.JK, CMHS.NO_KTP, CMHS.NO_KK, CMHS.NO_TELP,
				  CMHS.NO_TELP, CMHS.ASAL, CMHS.NO_IJAZAH, CMHS.TOTAL_NILAI_UN, KOTA.NAMA NAMA_KOTA, JURUSAN.NAMA NAMA_JURUSAN, 
				  PENDAFTARAN.TGL_DAFTAR, PENDAFTARAN.JALUR, DOC.IPK, DOC.KTP, DOC.KK, DOC.KHS, DOC.KET_PINDAH DOC.BUKTI_TRANSFER, DOC.FOTO,
				  VER.DATA_CMHS, VER.DOKUMEN, VER.TRANSFER, VER.TERDAFTAR, VER.ID VER_ID FROM calon_mahasiswa CMHS
				  INNER JOIN PENDAFTARAN ON (CMHS.ID = PENDAFTARAN.CALON_MAHASISWA_ID)
				  INNER JOIN JURUSAN ON (PENDAFTARAN.JURUSAN_ID = JURUSAN.ID)
				  INNER JOIN DOKUMEN DOC ON (PENDAFTARAN.DOKUMEN_ID = DOC.ID)
				  INNER JOIN KOTA_CALON_MAHASISWA KOTA_CMHS ON (KOTA_CMHS.CALON_MAHASISWA_ID = CMHS.ID)
				  INNER JOIN KOTA ON (KOTA_CMHS.KOTA_ID = KOTA.ID)
				  INNER JOIN VERIFIKASI VER ON (VER.PENDAFTARAN_ID = PENDAFTARAN.ID)
				  WHERE CMHS.ID = ?";
		$action = $this->db->prepare($query);
		$action->execute(array($this->cmhs->id));

		return $action;
	}


}