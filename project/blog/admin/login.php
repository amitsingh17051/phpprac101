<?php
include '../libs/database.php';
include '../libs/config.php';

session_start();


if(isset($_SESSION['email'])) {
	// header('Location: index.php');

echo "<script> location.href = 'index.php'</script>";
} else {
	// header('Location: login.php');

echo "<script> location.href = 'login.php'</script>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login here</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.card {
			width:100% !important;
		}

		.card p {
			font-size: 12px;
		}
		.row-card {
			display: grid;
			grid-template-columns:1fr 1fr; 
		}

		.container {
			margin-top:120px;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card row-card" style="width: 18rem;">
				  <img src="https://www.cancapital.com/wp-content/uploads/2016/11/blog-blitz.jpg" class="card-img-top" alt="..." width="100%;">
				  <div class="card-body">
				    <h3 class="card-title">Get Login</h3>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
				    <form action="" method="post">
				    	<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Your email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" autocomplete="off" placeholder="password">
						</div>

						<button class="btn btn-info" name="login" value=>Login</button> or <a href="register.php" class="text-dark">  Register here</a>
				    </form>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
	<?php
	

	$db = new Database();

	if(isset($_POST['login'])) {
		$email = mysqli_real_escape_string($db->link,$_POST['email']);
		$password =  mysqli_real_escape_string($db->link,$_POST['password']);

		$query = "select * from admin where email ='$email' AND password = '$password'";

		$run = $db->select($query);

		if($run->num_rows > 0) {
			// echo "Email and are valid";
			$_SESSION['email'] = $email;

			// header('Location: index.php');
			echo "<script> location.href = 'index.php'</script>";
		} else {
			echo "email or password not match";
		}


	}
	exit();

	?>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>