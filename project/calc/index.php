<?php
include 'calc.php';



	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$calc = $_POST['calc'];

	$calcular = new Calc($num1, $num2, $calc);

	echo $calcular->calcMethod();
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="num1">
		<input type="text" name="num2">
		<select name="calc" id="">
			<option value="add">ADD</option>
			<option value="subs">subs</option>
			<option value="mul">Mul</option>
			<option value="dev">Dev</option>
		</select>

		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>