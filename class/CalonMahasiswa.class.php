<?php

	class CalonMahasiswa
	{
		private $db;

		public $id;
		public $nama;
		public $tempat_lahir;
		public $tgl_lahir;
		public $alamat;
		public $jk;
		public $no_ktp;
		public $no_kk;
		public $no_telp;
		public $asal;
		public $no_ijazah;
		public $total_nilai_un;
		
		function __construct($db)
		{
			$this->db = $db;
		}

        public function getId()
        {
            return $this->db->lastInsertId();
        }

		public function all()
		{
			$query = "SELECT * FROM calon_mahasiswa ORDER BY no_pendaftaran ASC";
			$action = $this->db->prepare($query);
			$action->execute();

			return $action;
		}

		public function find()
		{
			$query = "SELECT * FROM calon_mahasiswa WHERE id = ?";
			$action = $this->db->prepare($query);
			$value = array($this->id);
			$action->execute($value);

			return $action;
		}

		public function store()
		{
        	$query="INSERT INTO calon_mahasiswa(no_pendaftaran, nama, tempat_lahir, tgl_lahir, alamat, jk, no_ktp, no_kk,
        						no_telp, asal, no_ijazah, total_nilai_un) 
        						VALUES(?, ?, ?, to_date(?, 'yyyy-mm-dd'), ?, ?, ?, ?, ?, ?, ?, ?)";
            $action = $this->db->prepare($query);
            $value = array($this->no_pendaftaran, 
            				$this->nama, 
            				$this->tempat_lahir, 
            				$this->tgl_lahir, 
            				$this->alamat, 
            				$this->jk,
            				$this->no_ktp, 
            				$this->no_kk, 
            				$this->no_telp, 
            				$this->asal, 
            				$this->no_ijazah, 
            				$this->total_nilai_un);
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

        public function update()
        {
        	$query="UPDATE calon_mahasiswa SET no_pendaftaran = ?, nama = ?, tempat_lahir = ?, tgl_lahir = to_date(?, 'yyyy-mm-dd'), alamat = ?, 
        			jk = ?, no_ktp = ?, no_kk = ?, no_telp = ?, asal = ?, no_ijazah = ?, total_nilai_un = ? WHERE id = ?";
            $action = $this->db->prepare($query);
            $value = array($this->no_pendaftaran, 
            				$this->nama, 
            				$this->tempat_lahir, 
            				$this->tgl_lahir, 
            				$this->alamat, 
            				$this->jk,
            				$this->no_ktp, 
            				$this->no_kk, 
            				$this->no_telp, 
            				$this->asal, 
            				$this->no_ijazah, 
            				$this->total_nilai_un, 
            				$this->id );
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

        public function delete()
        {
        	$query="DELETE FROM calon_mahasiswa WHERE id = ?";
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