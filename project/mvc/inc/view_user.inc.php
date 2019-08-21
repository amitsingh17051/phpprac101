<?php

class ViewUser extends User{

	public function showAllUser(){
		$datas = $this->getAllUser();

		foreach ($datas as $data) {
			echo $data['title'] . '<br>'; 
			echo $data['author'] . '<br>';
		}
	}

}



?>