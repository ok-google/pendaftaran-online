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

}