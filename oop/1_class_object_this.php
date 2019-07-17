

<?php
// Function Called Method in classes(openssl_open(sealed_data, open_data, env_key, priv_key_id)p)
// Object called as class datatypes in oop
// Class Name

class Mobile {
	public $model; // Global variable
	function showModel($number) {
		$this->model = $number;
		echo "Model number: $this->model"; // This key is a refrence of object or class name
	}

}

$nokia = new Mobile; // New Object Created
$nokia->showModel("nokia11");
$lg = new Mobile;
$lg->showModel("lg11");






?>