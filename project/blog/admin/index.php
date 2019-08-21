<?php

session_start();


if(!isset($_SESSION['email'])) {
	// header('Location: login.php');
	echo "<script> location.href = 'login.php'</script>";
} else {
	include 'includes/header.inc.php';
	include 'includes/footer.inc.php';
}


?>

