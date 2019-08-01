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


// Insert data
if(isset($_REQUEST['submit'])) {
	if(($_REQUEST['name'] == "" ) || ($_REQUEST['location'] == "" ) || ($_REQUEST['email'] == "" )){
		echo "<small>Fill All fields...</small><hr>";
	} else {
		$sql = "insert into data (name, location, email) values(?, ?, ?)";
		$result = mysqli_prepare($conn, $sql);
		if($result) {
			mysqli_stmt_bind_param($result, 'sss', $name, $location, $email);

			$name = $_REQUEST['name'];
			$location = $_REQUEST['location'];
			$email = $_REQUEST['email'];

			mysqli_stmt_execute($result);

			echo mysqli_stmt_affected_rows($result) . "Rows Inserted <br>";

		} else {
			mysqli_stmt_close($result);
		}
	}
	
}


	



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location" id="name">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" id="name">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>



