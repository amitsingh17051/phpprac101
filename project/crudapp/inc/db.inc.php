<?php

class db {
	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function connect() {
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "123456";
		$this->dbname = "phpcrud";

		$conn = new mysqli($this->servername,$this->username,$this->password, $this->dbname);

		return $conn;
	}
}

?>