<?php
$dsn = "mysql:host=localhost; dbname=phpcrud;";
$db_user = "root";
$db_pass= "123456";


try {
	// crate connection
	$conn = new PDO($dsn, $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connection successfull";

	$sql = "insert into data(name, location, email) values('php', 'pune', 'newname@gmail.com')";
	$effected_row = $conn->exec($sql);
	echo $effected_row . " Row Inserted <br>";
} catch(PDOException $e){
	echo "Connetion failed <br>" .$e->getMessage();
}



// insert data


/*
exec($sql_statement) - it execute ana sql statement in a single function call,  returning the number of rows affected by the statement. it does not return result from a select statement.

*/




?>