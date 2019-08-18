<?php
/*
An exception is a generralization of the concept of an error to include any unexpected condition encountered during exeution

- try
- catch
- finally
- throw

- Ecth try must have at least one corresponding catch or finally block.
- Code within the finally block will always be executed after try catck blocks, regardless of whether an exception has been thrown, and before normal execution resumes.
- if an exception is not caught, a final error will be issued with an "uncaught exception " message.

*/

/*$a = 18;
try{
	if($a>=10) {
		echo $a;
	} else {
		throw new Exception("Enter value greater than 10");
	}
} catch(EXception $e) {
	echo $e->getMessage();
} finally {
	echo " Finally Block ";
}*/

if(isset($_REQUEST['submit'])) {
	$a = $_REQUEST['a'];
	$b = $_REQUEST['b'];

	try {
		if($b<=0) {
			throw new Exception("Value of B is invalid");
		} else {
			$result = $a/$b;
			echo $result;
		}
	} catch(Exception $e) {
		echo $e->getMessage();
	}
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
		A: <input type="text" name="a"> <span> / </span>
		B: <input type="text" name="b">
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>