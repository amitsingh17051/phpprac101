<?php


$dsn = "mysql:host=localhost; dbname=phpcrud;";
$db_user = "root";
$db_pass= "12456";


try {
	// crate connection
	$conn = new PDO($dsn, $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connection successfull";
} catch(PDOException $e){
	echo "Connetion failed <br>" .$e->getMessage();
}




?>