<?php

class Auth 
{
	private $db;

	public $username;
	public $password;

	public function __construct($db) 
	{
		$this->db = $db;
	}

	public function login()
	{
		$query = "SELECT * FROM table_user WHERE username = ? AND password = STANDARD_HASH(?, 'SHA512')";
		$action = $this->db->prepare($query);
		$value = array($this->username, $this->password);
		$action->execute($value);

		return $action->fetchObject();
	}

	public function loggedin()
	{
		if($_SESSION['username'] != NULL)
			return true;

		return false;
	}
}