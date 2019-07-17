<?php

class viewUser extends user {
	public function showAllUser() {
		$datas = $this->getAllUser();
		foreach ($datas as $data) {
			echo $data['name'] . "<br>";
		}
	}
}

?>