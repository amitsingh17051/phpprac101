<?php


$dsn = "mysql:host=localhost; dbname=phpcrud;";
$db_user = "root";
$db_pass= "123456";


try {
	// crate connection
	$conn = new PDO($dsn, $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connection successfull";
} catch(PDOException $e){
	echo "Connetion failed <br>" .$e->getMessage();
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
		<?php
			$sql = "select * from data";
			$result = $conn->query($sql);
			if($result->rowCount() > 0){
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
						while($row = $result->fetch(PDO::FETCH_ASSOC)) {
							echo '<tr>';
								echo '<td>' . $row['id'] . '</td>';
								echo '<td>' . $row['name'] . '</td>';
								echo '<td>' . $row['location'] . '</td>';
								echo '<td>' . $row['email'] . '</td>';
							echo '</tr>';
						}

				echo '</table>';
			} else {
				echo "0 result";
			}
		?>
	</div>
</body>
</html>