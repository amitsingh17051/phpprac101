<?php
// Create connection 
$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "phpcrud";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


//check connection
if(!$conn) {
	echo "Connected Failed" . mysqli_connect_error();
} else {
	echo "Conection Success";
}



$sql = "select * from data";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



echo $row['id'];




if(mysqli_num_rows($result) > 0) {
	
	while($row = mysqli_fetch_assoc($result)) {
	echo $row['location'];
}
	
} else {
	echo "oooo";
}




?>