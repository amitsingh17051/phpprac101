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
$sql = "select * from data";
// stage 1
$result = mysqli_prepare($conn , $sql);

mysqli_stmt_execute($result);

// its transfer prepare statment to resulr statment of resulte 
mysqli_stmt_store_result($result);

$total_row = mysqli_stmt_num_rows($result);

if($total_row <= 0) {
	echo "No data available";
} else {
	echo "data available <br>";
	echo $total_row;
}

mysqli_stmt_free_result($result);

mysqli_stmt_close($result);

mysqli_close($conn);

?>