<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "phpcrud";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


//check connection
if(!$conn) {
	echo "Connected Failed" . mysqli_connect_error();
} else {
	echo "Connected suceefully <hr>";
}

$sql = "update data set name = 'ravi' , location = 'dubai', email='new@email.com' where id = 29";

if(mysqli_query($conn, $sql)) {
	echo "record updated";
} else {
	echo "error";
}


?>