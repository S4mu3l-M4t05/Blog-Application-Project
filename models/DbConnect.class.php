<?php
class DbConnect {
	const HOST = "localhost";
	const DBNAME = "final";
	const USER = "root";
	const PASS = "";

	public function __construct() {
		try {
			$this->db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASS);
			$this->db->setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
            $this->db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
			$this->db->exec("set names utf8");
		} catch (Exception $e) {
			die("Database Connection Error: " . $e->getMessage());
		}
	}
}
