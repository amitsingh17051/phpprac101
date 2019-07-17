<?php
$db_host = "localhost";
$db_user= "root";
$db_pass = "123456";
$db_data = "phpcrud";
// create connection 
$conn = new mysqli($db_host, $db_user, $db_pass, $db_data);

// checking connection 

if($conn->connect_error) {
	die("Connection Failed");
} else {
	echo "Conection Work <hr>";
}


// deleteing data from database

if(isset($_REQUEST['delete'])) {
	$sql ="delete from data where id = {$_REQUEST['id']}";

	if($result = $conn->query($sql)) {
		echo "Record deleted";
	} else {
		echo "Delete Error";
	}
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php
			$sql = "select * from data";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ){
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
						while($row = $result->fetch_assoc()){
							echo '<tr>';
								echo '<td>' . $row['id'] . '</td>';	
								echo '<td>' . $row['name'] . '</td>';
								echo '<td>' . $row['location'] . '</td>';	
								echo '<td>' . $row['email'] . '</td>';
								echo '<td>
								<form action="" method="post">
									<input type="hidden" name="id" value=' . $row['id'] . ' >
									<input type="submit" class="btn btn-sm btn-danger" value="Delete" name="delete">
								</form>
								</td>';				
							echo '</tr>';
						}
					echo '<tbody>';
				echo '</table>';
			} else {
				echo '0 result';
			}


		?>
	</div>

	<?php $conn->close(); ?>
</body>
</html>