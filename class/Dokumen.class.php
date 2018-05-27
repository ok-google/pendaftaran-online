<?php

	class Dokumen
	{
		private $db;

		public $id;
		public $ijazah;
		public $kk;
		public $ktp;
        public $rapor;
        public $ipk;
        public $khs;
        public $ket_pindah;
        public $ijazah_d3;
        public $transkrip;
        public $bukti_transfer;
        public $foto;


		function __construct($db)
		{
			$this->db = $db;
		}

        public function getId()
        {
            $query = "SELECT * FROM dokumen WHERE ktp = ?";
            $action = $this->db->prepare($query);
            $value = array($this->ktp);

            $action->execute($value);

            $result = $action->fetchObject();

            return $result->ID;
        }

		public function store(){
        	$query="INSERT INTO dokumen(ijazah, kk, ktp, rapor, ipk, khs, ket_pindah, ijazah_d3, transkrip, bukti_transfer, foto) 
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $action = $this->db->prepare($query);
            $value = array($this->ijazah, $this->kk, $this->ktp, $this->rapor, $this->ipk, $this->khs, $this->ket_pindah, $this->ijazah_d3,
                            $this->transkrip, $this->bukti_transfer, $this->foto);
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
        	$query="UPDATE dokumen SET ijazah = ?, kk = ?, ktp = ?, rapor = ?, ipk = ?, khs = ?, ket_pindah = ?, ijazah_d3 = ?, 
                    transkrip = ?, bukti_transfer = ?, foto = ? WHERE id = ?";
            $action = $this->db->prepare($query);
            $value = array($this->ijazah, $this->kk, $this->ktp, $this->rapor, $this->ipk, $this->khs, $this->ket_pindah, $this->ijazah_d3,
                            $this->transkrip, $this->bukti_transfer, $this->foto, $this->id);
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
        	$query="DELETE FROM dokumen WHERE id = ?";
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

        public function storeIjazah($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/ijazah/';
            $target_file = $target_dir.$no_pendaftaran.'_Ijazah.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeKK($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/KK/';
            $target_file = $target_dir.$no_pendaftaran.'_KK.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeKTP($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/KTP/';
            $target_file = $target_dir.$no_pendaftaran.'_KTP.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeRapot($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/Rapot/';
            $target_file = $target_dir.$no_pendaftaran.'_Rapot.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeIPK($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/IPK/';
            $target_file = $target_dir.$no_pendaftaran.'_IPK.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeKHS($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/KHS/';
            $target_file = $target_dir.$no_pendaftaran.'_KHS.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeKetPindah($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/keterangan-Pindah/';
            $target_file = $target_dir.$no_pendaftaran.'_Keterangan_Pindah.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }   

        public function storeIjazahD3($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/IjazahD3/';
            $target_file = $target_dir.$no_pendaftaran.'_IjazahD3.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeTranskrip($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/Transkrip/';
            $target_file = $target_dir.$no_pendaftaran.'_Transkrip.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeTransfer($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/Transfer/';
            $target_file = $target_dir.$no_pendaftaran.'_Transfer.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }

        public function storeFoto($file, $no_pendaftaran, $path)
        {
            $target_dir = '../file/Foto/';
            $target_file = $target_dir.$no_pendaftaran.'_Foto.'.$path;

            move_uploaded_file($file["tmp_name"], $target_file);

            return $target_file;
        }
	}