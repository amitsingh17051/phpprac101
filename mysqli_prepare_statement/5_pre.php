<?php
// Connection 
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

if(isset($_REQUEST['delete'])) {
	$sql = "delete from data where id = ? ";
	$result = mysqli_prepare($conn, $sql);
	if($result) {

		if($id = $_REQUEST['id']) {
			echo " ID : " . $id . "<br>";
			mysqli_stmt_bind_param($result, 'i', $id);
			mysqli_stmt_execute($result);
			echo mysqli_stmt_affected_rows($result) . " Row Deleted"; 
		} else {
			
		}
	} 

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 offset-md-2" >
				 <?php
			// select all data
			$sql = "select * from data";
			// stage 1
			$result = mysqli_prepare($conn , $sql);
			mysqli_stmt_bind_result($result, $id, $name, $location, $email);
			mysqli_stmt_execute($result);
			mysqli_stmt_store_result($result);


			if(mysqli_stmt_num_rows($result) > 0) {
				echo '<table class="table">';
					echo '<thead>';
						echo '<tr>';
							echo '<th>ID</th>';
							echo '<th>Name</th>';
							echo '<th>Location</th>';
							echo '<th>Email</th>';
							echo '<th>Action</th>';
						echo '</tr>';
					echo '</thead>'; 
					echo '<tbody>';
						// Fetch all table data
						while(mysqli_stmt_fetch($result)) {
							echo "<tr>";
							echo "<td>" . $id . "</td>";
							echo "<td>" . $name . "</td>";
							echo "<td>" . $location . "</td>";
							echo "<td>" . $email . "</td>";
							echo "<td><form action='' method='post'><input type='hidden' name='id' value=". $id . "><input type='submit' class='btn btn-sm btn-danger' name='delete' value='delete'></form></td>";
							echo "</tr>";
						}
					echo '</tbody>';
				echo '</table>';
			}
		?>
			</div>
		</div>
	</div>
</body>
</html>