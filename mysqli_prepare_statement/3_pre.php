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






?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retrive data with prepare statement</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
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
							echo "</tr>";
						}
					echo '</tbody>';
				echo '</table>';
			}
		?>
	</div>
</body>
</html>