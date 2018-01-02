<?php
class DB_Connect{
	private $conn;
//koneksi database
	public function connect(){
		require_once '../include/Config.php';
		//koneksi ke mysql
		$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		//return databases handler
		return $this->conn;
	}
}

?>