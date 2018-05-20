<?php

	class Jurusan
	{
		private $db;

		public $id;
		public $nama;
		public $kode;
		public $npm;

		function __construct($db)
		{
			$this->db = $db;
		}

		public function all()
		{
			$query = "SELECT * FROM JURUSAN ORDER BY KODE ASC";
			$action = $this->db->prepare($query);
			$action->execute();

			return $action;
		}

		public function find()
		{
			$query = "SELECT * FROM JURUSAN WHERE id = ?";
			$action = $this->db->prepare($query);
			$value = array($this->id);
			$action->execute($value);

			return $action;
		}

		public function store(){
        	$query="INSERT INTO jurusan(nama, kode, npm) VALUES(?, ?, ?)";
            $action = $this->db->prepare($query);
            $value = array($this->nama, $this->kode, $this->npm);
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

        public function update(){
        	$query="UPDATE jurusan SET nama = ?, kode = ?, npm = ? WHERE id = ?";
            $action = $this->db->prepare($query);
            $value = array($this->nama, $this->kode, $this->npm, $this->id);
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

        public function delete(){
        	$query="DELETE FROM jurusan WHERE id = ?";
            $action = $this->db->prepare($query);
            $value = array($this->id);
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