<?php

class Database {

	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $db_name = DB_NAME;

	public $link;
	public $error;

	public function __construct() {
		$this->connect();
	}
	private function connect(){
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

		if($this->link->connect_error) {
			die("Connection Failed");
		} else {
			
		}
	}

	public function select($query) {
		$result = $this->link->query($query);
		if($result->num_rows > 0 ) {
			return $result;
		} else {
			return "error";
		}

		
	}

	public function insert($query) {
		$insert = $this->link->query($query);
		if($insert) {
			header('location: index.php?insert=Post_Inserted...');
		} else {
			echo 'did not insert any data';
		}
	}

	public function update($query) {
		$update = $this->link->query($query);
		if($update) {
			header('location: index.php?update=post_update....');
		} else {
			echo 'did not update any data';
		}
	}


	public function delete($query) {
		$delete = $this->link->query($query);
		if($delete) {
			header('location: index.php?delete= Post deleted....');
		} else {
			echo 'did not delete any data';
		}
	}
}

?>