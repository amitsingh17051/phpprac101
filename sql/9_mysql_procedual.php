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



// sql to delete record 


/*$sql = "delete from  data where id = 27";

if(mysqli_query($conn, $sql)) {
	echo "recored deleted";
} else {
	echo "error";
}*/

if(isset($_REQUEST['delete'])) {
	$sql = "delete from  data where id = {$_REQUEST['id']}";
	if(mysqli_query($conn, $sql)) {
	echo "recored deleted";
	} else {
		echo "error";
	}
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

if(isset($_REQUEST['submit'])) {
	if(($_REQUEST['name'] == "") || ($_REQUEST['location'] == "") || ($_REQUEST['email'] == "")) {
		echo "<small> Fill All Fields </small> <br>";
	} else {
		$name = $_REQUEST['name'];
		$location = $_REQUEST['location'];
		$email = $_REQUEST['email'];
		$sql = "insert into data (name, location, email) values('$name', '$location', '$email')";

		if(mysqli_query($conn, $sql)) {
			echo "New Record inserted";
		} else {
			echo "unable to inser data";
		}
	}
}


		?>
		<div class="row">
			<div class="col-sm-12">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" value="<?php if(isset($row['name'])){echo $row['name'];}?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">location</label>
								<input type="text" class="form-control" name="location" >
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Email</label>
								<input type="email" class="form-control" name="email" >
							</div>
						</div>
					</div>
					
					
					

					<button name="submit" class="btn btn-primary float-right mb-5" type="submit" >Add New Record</button>
				</form>
			</div>
		</div>
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
						echo "<th> Action </th>";
					echo "</tr>";
				echo '</thead>';

				echo '<tbody>';

				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
						echo "<td>" . $row['id']. "</td>";
						echo "<td>" . $row['name']. "</td>";
						echo "<td>" . $row['location']. "</td>";
						echo '<td><form action="" method="POST"><input type="hidden" name="id" value= ' . $row['id'] . '><input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';
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