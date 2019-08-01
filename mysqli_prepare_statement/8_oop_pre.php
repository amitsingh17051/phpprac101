<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "phpcrud";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($conn->connect_error) {
	die("Connection Failed");
} 
echo "Connected esuccessfully <hr>";




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
		<?php
			$sql = "select * from data";

			$result = $conn->prepare($sql);

			$result->bind_result($id, $name, $location, $email);

			$result->execute();

			$result->store_result();

			if($result->num_rows > 0) {
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
						while($result->fetch()) {
							echo "<tr>";
								echo "<td>" . $id . "</td>";
								echo "<td>" . $name . "</td>";
								echo "<td>" . $location . "</td>";
								echo "<td>" . $email . "</td>";
							echo "</tr>";
						}
					echo '</tbody>';
				echo '</table>';
			} else {
				echo "0 Result";
			}


		?>
	</div>
</body>
</html>