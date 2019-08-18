<?php
session_start();
if(isset($_SESSION['uname'])) {
	echo "Welcome " . $_SESSION['uname'] . " <br> ";
	echo "Your Password is " . $_SESSION['pass'];
	if(isset($_REQUEST['logout'])) {
		session_unset();
		session_destroy();

		echo "<script> location.href='login.php'; </script>";
	}
} else {
	echo "<script> location.href='login.php'; </script>";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" value="Logout" name="logout">
	</form>
</body>
</html>