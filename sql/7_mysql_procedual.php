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
} else {
	echo "Connected suceefully <hr>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
						<label for="name">location</label>
						<input type="text" class="form-control" name="location">
					</div>
					<div class="form-group">
						<label for="name">Email</label>
						<input type="email" class="form-control" name="email">
					</div>

					<button name="submit" class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>