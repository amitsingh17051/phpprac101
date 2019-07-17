<?php
$db_host = "localhost";
$db_user= "$db_pass = "123456";
root";
$db_data = "phpcrud";
// create connection 
$conn = new mysqli($db_host, $db_user, $db_pass, $db_data);

// checking connection 

if($conn->connect_error) {
	die("Connection Failed");
} else {
	echo "Conection Work <hr>";
}

$sql = "select * from data";
$result = $conn->query($sql);
// echo $result->num_rows;

// echo $row['id'];

if($result->num_rows > 0 ) {
	while($row = $result->fetch_assoc()) {
		echo "ID: " . $row['id'] . "<br>" . "Name: " . $row['name'] . "<br>";
	}
}


?>