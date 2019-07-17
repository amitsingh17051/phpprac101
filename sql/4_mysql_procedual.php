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
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data base</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	

	<div class="container">
		<?php

		$sql = "select * from data";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0) {
			echo '<table class="table">';
				echo '<thead>';
					echo "<tr>";
						echo "<th> ID </th>";
						echo "<th> Name </th>";
						echo "<th> Location </th>";
					echo "</tr>";
				echo '</thead>';

				echo '<tbody>';

				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
						echo "<td>" . $row['id']. "</td>";
						echo "<td>" . $row['name']. "</td>";
						echo "<td>" . $row['location']. "</td>";
					echo "</tr>";
				}
				echo '</tbody>';
			echo '</table>';

			


		}




		?>

		<?php mysqli_close($conn); ?>
	</div>
</body>
</html>