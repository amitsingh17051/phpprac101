<?php

class User extends dbh{

	protected function getAllUser(){
		$sql = "select * from post";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;

		if($numRows > 0) {
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;
		}


	}

}



?>