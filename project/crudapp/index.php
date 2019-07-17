<?php
include 'inc/db.inc.php';
include 'inc/user.inc.php';
include 'inc/viewUser.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud app</title>
</head>
<body>

			
			<?php
				$users = new viewUser();
				$users->showAllUser();
			?>
		
		
	</ul>
	
</body>
</html>