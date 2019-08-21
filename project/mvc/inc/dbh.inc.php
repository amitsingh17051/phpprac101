<?php

class dbh {
	private $servername;
	private $username;
	private $password;
	private $db_name;

	protected function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "123456";
		$this->db_name = "blog2019";


		$conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);

		return $conn;
	}
}



?>