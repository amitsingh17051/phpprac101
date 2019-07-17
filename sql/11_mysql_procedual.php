<?php

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

if(isset($_REQUEST['update'])) {
	if(($_REQUEST['name'] == "") || ($_REQUEST['location'] == "") || ($_REQUEST['email'] == "")) {
		echo "<small> Fill All Fields </small> <br>";
	}  else {
		$name = $_REQUEST['name'];
		$location = $_REQUEST['location'];
		$email = $_REQUEST['email'];


		$sql = "update data set name='$name' , location='$location', email='$email' where id = {$_REQUEST['id']}";

		if(mysqli_query($conn, $sql)) {
			echo "Record updated";
		} else {
			echo "update error";
		}
	}
}



if(isset($_REQUEST['edit'])) {
	$sql = "select * from data where id = {$_REQUEST['id']}";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

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
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" value="<?php if(isset($row['name'])){echo $row['name'];}?>">
					</div>
					<div class="form-group">
						<label for="name">location</label>
						<input type="text" class="form-control" name="location" value="<?php if(isset($row['location'])){echo $row['location'];}?>">
					</div>
					<div class="form-group">
						<label for="name">Email</label>
						<input type="email" class="form-control" name="email" value="<?php if(isset($row['email'])){echo $row['email'];}?>">
					</div>

					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<button name="update" class="btn btn-primary float-right mb-5" type="submit" >Update Record</button>
				</form>
			</div>



			<div class="col-md-8">
				<?php

				$sql = "select * from data";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0) {
					echo '<table class="table text-center">';
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
								echo '<td><form action="" method="POST"><input type="hidden" name="id" value= ' . $row['id'] . '><input type="submit" class="btn btn-sm btn-warning" name="edit" value="Edit Record"></form></td>';
							echo "</tr>";
						}
						echo '</tbody>';
					echo '</table>';

					


				}




		?>

			</div>
		</div>
	</div>











	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>