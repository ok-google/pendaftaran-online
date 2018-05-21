<?php
	session_start();
	$_SESSION['username'] = $_SESSION['username'];
	$_SESSION['email'] = $_SESSION['email'];
	$_SESSION['id'] = $_SESSION['id'];
	$_SESSION['role'] = $_SESSION['role'];

	class Database{
	    private static $host = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = "localhost")(PORT = "1522")) (CONNECT_DATA = (SERVICE_NAME = ORACLE) (SID = xe)))';
	    //private static $dbname = 'jarkom_project';
	    private static $user = 'projek_db';
	    private static $password = 'online';

	    private static $koneksi = null;

	    public function __construct(){
	        die('init function is not allowed');
	    }

	    public static function connect(){
	        if(null == self::$koneksi){
	            try{
	                self::$koneksi = new PDO("oci:dbname=" . self::$host . ";charset=utf8", self::$user, self::$password );
	                self::$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            }
	            catch(PDOException $e){
	                die($e->getmessage());
	            }
	        }
	        
	        return self::$koneksi;
	    }

	    public static function disconnect(){
	        self::$koneksi = null;
	    } 
 }
