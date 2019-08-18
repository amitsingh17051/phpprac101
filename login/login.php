<?php
session_start();
if(!isset($_SESSION['uname'])) {
	if(isset($_REQUEST['username']) || isset($_REQUEST['password'])) {

		$uname = $_REQUEST['username'];
		$pass = $_REQUEST['password'];

		$_SESSION['uname'] = $uname;
		$_SESSION['pass'] = $pass;

		echo "<script> location.href = 'welcome.php'</script>";

	} 

} else {
	echo "<script> location.href = 'welcome.php'</script>";
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
		Username: <input type="text" name="username" id="username"><br><br>
		Password: <input type="text" name="password" id="password"><br><br>
		<input type="submit" value="login" name="login">
	</form>
</body>
</html>