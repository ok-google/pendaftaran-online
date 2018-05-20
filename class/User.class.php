<?php

class User {
	private $db;

	public $id;
	public $username;
	public $email;
	public $password;
	public $pertanyaan;
	public $jawaban;

	function __construct($db) {
		$this->db = $db;
	}

	public function all() {
		$query = "SELECT * FROM table_user ORDER BY KODE ASC";
		$action = $this->db->prepare($query);
		$action->execute();

		return $action;
	}

	public function find() {
		$query = "SELECT * FROM table_user WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->id);
		$action->execute($value);

		return $action;
	}

	public function store() {
		$query = "INSERT INTO table_user(username, email, password, pertanyaan, jawaban) VALUES(?, ?, ?, ?, ?)";
		$action = $this->db->prepare($query);
		$value = array($this->username, $this->email, $this->password, $this->pertanyaan, $this->jawaban);
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
		$query = "UPDATE table_user SET username = ?, email = ?, password = ?, pertanyaan = ?, jawaban = ? WHERE id = ?";
		$action = $this->db->prepare($query);
		$value = array($this->username, $this->email, $this->password, $this->pertanyaan, $this->jawaban, $this->id);
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
		$query = "DELETE FROM table_user WHERE id = ?";
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