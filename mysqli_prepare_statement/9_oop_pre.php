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



if(isset($_REQUEST['submit'])) {
	$sql = "insert into data(name, location, email) values(?, ?, ?)";

	$result = $conn->prepare($sql);

	//bind variable to prepared statement

	$result->bind_param('sss', $name, $location, $email);
	$name = $_REQUEST['name'];
	$location =  $_REQUEST['location'];
	$email =  $_REQUEST['email'];

	$result->execute();

	echo $result->affected_rows . "Row Inserted <br>";


	$result->close();

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
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="Name">Name</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location" id="location">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" id="email">
					</div>

					<button class="btn btn-primary" name="submit" id="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>