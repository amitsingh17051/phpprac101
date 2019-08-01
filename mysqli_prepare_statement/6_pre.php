<?php
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

if(isset($_REQUEST['update'])) {
	$sql = "select * from data where id = ?";

	$result = mysqli_prepare($conn, $sql);

	mysqli_stmt_bind_param($result, 'i', $id);

	$id = $_REQUEST['id'];

	mysqli_stmt_bind_result($result, $id, $name, $location, $email);


	mysqli_stmt_execute($result);

	mysqli_stmt_fetch($result);

	

	mysqli_stmt_close($result);

	
}




if(isset($_REQUEST['submit'])) {
	$sql = 'update ignore data set name = ?, location = ?, email=? where id = ?';

	$result = mysqli_prepare($conn, $sql);

	if($result) {
		mysqli_stmt_bind_param($result, 'sssi', $name, $location, $email, $id);

		$name = $_REQUEST['name'];
		$location = $_REQUEST['location'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];

		mysqli_stmt_execute($result);

		echo mysqli_stmt_affected_rows($result);

		

	}

	mysqli_stmt_close($result);


}


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" value="<?php if(isset($name)) {echo $name; } else {
							echo "";
						}?>">
					</div>
					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location" id="name" value="<?php if(isset($location)) {echo $location; } else {
							echo "";
						}?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" id="name" value="<?php if(isset($email)) {echo $email; } else {
							echo "";
						}?>">
					</div>
					<input type="hidden" name="id" value= "<?php echo $id ?>">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
			<div class="col-md-6 offset-md-2" >
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
							echo "<td><form action='' method='post'><input type='hidden' name='id' value=". $id . "><input type='submit' class='btn btn-sm btn-warning' name='update' value='update'></form></td>";
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