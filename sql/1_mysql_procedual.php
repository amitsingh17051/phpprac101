<?php
/*
mysqli_connect() function- this function is used to open a new connection it returns an object representing the connection
syntax -> mysqli_connect(db_host, db_user, db_pass, db_name, port, socket);

mysqli_connect_error() - This function returns the error description from the last connection error, if any and NULL if no error occurred

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


?>