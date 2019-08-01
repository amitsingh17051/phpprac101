<?php

// Create connection 
$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "phpcrud";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


//check connection
if(!$conn) {
	die("Connected Failed: " . mysqli_connect_error());
}

echo "Connected successfully <hr> <br>";

// select all data
$sql = "select * from data where id = ?";
// stage 1
$result = mysqli_prepare($conn , $sql);
// bind parameter

mysqli_stmt_bind_param($result, 'i' , $id);
$id = 38;
// bind result set in variable
// stage 2
mysqli_stmt_bind_result($result, $id, $name, $location, $email);


// Execute prpare statment
mysqli_stmt_execute($result);


// fetch single row data
/*mysqli_stmt_fetch($result);


echo $id . $name . $location . $email . "<br>";
*/
mysqli_stmt_fetch($result);
echo $id . $name . $location . $email;

// all table data
/*while(mysqli_stmt_fetch($result)){
	echo $id . $name . $location . $email . "<br>";
}*/

?>