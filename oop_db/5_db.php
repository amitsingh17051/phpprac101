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


if(isset($_REQUEST['add'])) {
	$name = $_REQUEST['name'];
	$location = $_REQUEST['location'];
	$email = $_REQUEST['email'];
	if($name == "" || $location == "" || $email == "") {
		echo "Please Fill All The Fields";
	} else {
		$sql = "insert into data (name, location, email) values('$name', '$location', '$email')";
		$result = $conn->query($sql);
		if($result === true) {
			echo "Data inserted";
		} else {
			echo "Data Error";
		}


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
		<div class="row">
			<div class="col-sm-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email">
					</div>
					<button type="submit" class="btn btn-primary" name="add">Add Record</button>
				</form>
			</div>


			<div class="col-sm-8">
				<?php
			$sql2 = "select * from data";
			$result = $conn->query($sql2);
			if($result->num_rows > 0 ){
				echo '<table class="table text-center">';
					echo '<thead>';
						echo '<tr>';
							echo '<th>ID</th>';
							echo '<th>Name</th>';
							echo '<th>Location</th>';
							echo '<th>Email</th>';
						echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
						while($row = $result->fetch_assoc()){
							echo '<tr>';
								echo '<td>' . $row['id'] . '</td>';	
								echo '<td>' . $row['name'] . '</td>';
								echo '<td>' . $row['location'] . '</td>';	
								echo '<td>' . $row['email'] . '</td>';					
							echo '</tr>';
						}
					echo '<tbody>';
				echo '</table>';
			} else {
				echo '0 result';
			}


		?>
			</div>
		</div>
	</div>



	<?php $conn->close(); ?>
</body>
</html>