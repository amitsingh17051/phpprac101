<?php

class user extends db {
	protected function getAllUser() {
		$sql = "select * from data";
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