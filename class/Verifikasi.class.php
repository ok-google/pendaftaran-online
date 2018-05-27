<?php
require 'Pendaftaran.class.php';

class Verifikasi {
	private $db;

	public $id;
	public $data_cmhs;
	public $dokumen;
	public $transfer;
	public $pendaftaran;
	public $terdaftar;

	function __construct($db) {
		$this->db = $db;
		$this->pendaftaran = new Pendaftaran($db);
	}

	public function store() {
		$query = "INSERT INTO verifikasi(data_cmhs, dokumen, transfer, pendaftaran_id, terdaftar) VALUES(?, ?, ?, ?, ?)";
		$action = $this->db->prepare($query);
		$value = array($this->data_cmhs, $this->dokumen, $this->transfer, $this->pendaftaran->id, $this->terdaftar);
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
		$query = "UPDATE verifikasi SET data_cmhs = ?, dokumen = ?, transfer = ?, pendaftaran_id = ?, terdaftar = ? WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->data_cmhs, $this->dokumen, $this->transfer, $this->pendaftaran->id, $this->terdaftar, $this->id);
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
		$query = "DELETE FROM verifikasi WHERE id = ?";
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

	public function verData()
	{
		$query = "UPDATE verifikasi SET data_cmhs = ? WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->data_cmhs, $this->id);
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