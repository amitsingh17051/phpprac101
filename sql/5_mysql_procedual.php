<?php
/*
Inser data to data base
*/


// Create connection 
$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "phpcrud";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


//check connection
if(!$conn) {
	echo "Connected Failed" . mysqli_connect_error();
}

$sql = "insert into data (name, location, email) values('amitsigh', 'pune', 'newmail@amil.com')";

if(mysqli_query($conn, $sql)) {
	echo "New record inserter";
} else {
	echo "Unable to insert data";
}



?>