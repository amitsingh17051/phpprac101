<?php
	include 'inc/dbh.inc.php';
	include 'inc/user.inc.php';
	include 'inc/view_user.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC Module</title>
</head>
<body>
	<?php 

	$users = new ViewUser();

	$users-> showAllUser();
	?>
</body>
</html>