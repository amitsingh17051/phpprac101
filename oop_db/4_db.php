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


$sql = "insert into data (name, location, email) values('tomer', 'goa', 'tomer@gmail.com')";

if($conn->query($sql)) {
	echo "Inserted successfully";
} else {
	echo "Unable to insert";
}

$conn->close();

?>