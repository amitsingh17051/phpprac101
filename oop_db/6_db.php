<?php
$db_host = "localhost";
$db_user= "root";
$db_pass = "123456";
$db_data = "phpcrud";
// create connection 
$conn = new mysqli($db_host, $db_user, $db_pass, $db_data);

// checking connection 

if($conn->connect_error) {
	die("Connection Failed");
} else {
	echo "Conection Work <hr>";
}


// deleteing data from database

$sql ="delete from data where id = 29";

if($result = $conn->query($sql)) {
	echo "Record deleted";
} else {
	echo "Delete Error";
}


$conn->close();
?>