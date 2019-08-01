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

if(isset($_REQUEST['update'])) {
	if(($_REQUEST['name'] == "") || ($_REQUEST['location'] == "") || ($_REQUEST['email'] == "") ) {
		echo "<small> Fill all The Fields<small><hr>";
	} else {

		$sql = "update data set name = ?, location = ?, email = ? where id = ?";

		$result = $conn->prepare($sql);


		if($result) {

			$result->bind_param('sssi', $name, $location, $email, $id);
			$name = $_REQUEST['name'];
			$location =  $_REQUEST['location'];
			$email =  $_REQUEST['email'];
			$id = $_REQUEST['id'];

			$result->execute();

			echo $result->affected_rows . "Row add";
		}
	}

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

				<?php
					if(isset($_REQUEST['edit'])) {
						$sql = "select * from data where id = ?";

						$result = $conn->prepare($sql);

						$result->bind_param('i', $id);

						$id = $_REQUEST['id'];

						$result->bind_result($id, $name, $location, $email);

						$result->execute();

						$result->fetch();

						$result->close();
					}

				?>
				<form action="" method="post">
					<div class="form-group">
						<label for="Name">Name</label>
						<input type="text" class="form-control" name="name" id="name" value="<?php if(isset($name)){echo $name;}?>">
					</div>

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location" id="location" value="<?php if(isset($location)){echo $location;}?>">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" id="email" value="<?php if(isset($email)){echo $email;}?>">
					</div>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<button class="btn btn-primary" name="update" id="update">Update</button>
				</form>
			</div>
			<div class="col-md-8">
			<?php
				$sql = "select * from data";

				$result = $conn->prepare($sql);

				$result->bind_result($id, $name, $location, $email);

				$result->execute();

				$result->store_result();

				if($result->num_rows > 0) {
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
							while($result->fetch()) {
								echo "<tr>";
									echo "<td>" . $id . "</td>";
									echo "<td>" . $name . "</td>";
									echo "<td>" . $location . "</td>";
									echo "<td>" . $email . "</td>";
									echo "<td><form action='' method='post'><input type='hidden' class='id' name='id' value=" . $id . "><input type='submit' class='btn btn-warning' name='edit' value= 'Edit'></form></td>";
								echo "</tr>";
							}
						echo '</tbody>';
					echo '</table>';
				} else {
					echo "0 Result";
				}


			?>
			</div>
		</div>
	</div>
</body>
</html>