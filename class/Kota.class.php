<?php
	class Kota 
	{
		private $db;

		public $id;
		public $kota_id;
		public $cmhs_id;

		public function __construct($db) 
		{
			$this->db = $db;
		}

		public function all()
		{
			$query = "SELECT * FROM kota";
			$action = $this->db->prepare($query);
			$action->execute();

			return $action;
		}

		public function store()
		{
			$query="INSERT INTO kota_calon_mahasiswa(calon_mahasiswa_id, kota_id) VALUES(?, ?)";
            $action = $this->db->prepare($query);
            $value = array($this->cmhs_id, $this->kota_id);
            $exec = $action->execute($value);
            
            if($exec){
                return true;
            }
            else{
                $errors = $action->errorInfo();
                echo($errors[2]);

                return false;
            }
		}
	}
