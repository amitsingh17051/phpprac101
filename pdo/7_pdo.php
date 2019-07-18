<?php
$dsn = "mysql:host=localhost; dbname=phpcrud;";
$db_user = "root";
$db_pass= "123456";


try {
	// crate connection
	$conn = new PDO($dsn, $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connection successfull";


	if(isset($_REQUEST['submit'])) {
		if($_REQUEST['name'] == "" ||$_REQUEST['location'] == "" || $_REQUEST['email'] == "") {
			echo "Please Fill All Fields";
		} else {
			$name = $_REQUEST['name'];
			$location = $_REQUEST['location'];
			$email = $_REQUEST['email'];
			$sql = "insert into data(name, location, email) values('$name', '$location', '$email')";
			$result = $conn->exec($sql);
		}
	}
	
	
	
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

		<div class="row">
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
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

					<button class="btn btn-primary" name="submit" >
						Add Record
					</button>
				</form>
			</div>
		</div>
	</div>


</body>
</html>