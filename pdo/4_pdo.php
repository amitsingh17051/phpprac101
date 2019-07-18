<?php
/*
query($sql_statement) - it execute an sql statement in a single function call, returning the result set(if any) return by the statement as a PDOStatement object or FALSE on failure.

fetch($ftech_style) - it fetch a row from  a result set associalted with pdostatement object. the fetch_style parameter determines how PDO returns the row.

fetchAll($fetch_Style) - it returns an array containing all of the remaining rows in the result set. The array represented each row as either an array
of columns values or an object with properties corresponding to each column name. An empty array is returned if there are zero result to fetch, or FALSE on failure. The fetch_style parameter determine hoe PDO returns the row.



$fetch Style

- PDO:FETCH_BOTH(defualt): it returns an array indexed by both column name and 0-indexed column number as returned in your result set.
- PDO:FETCH_ASSOC: it return an array indexed by column name(associate array) as returned in your result set.
- PDO:FETCH_NUM: it returns an array indexed by column number(index array) as returned in your result set, starting at column 0
- PDO:FETCH_OBJ: it returns an anonymous object with property names that correspond to the column nmaes returned in your set



rowCount()

- it returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement by the correspond PDOStatement object
- if the last sql statement executed by the associeate PDOStatement was a SELECT, Some database may the number of rows returned by the statement.
*/

$dsn = "mysql:host=localhost; dbname=phpcrud;";
$db_user = "root";
$db_pass= "123456";


try {
	// crate connection
	$conn = new PDO($dsn, $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connection successfull<hr>";
} catch(PDOException $e){
	echo "Connetion failed <br>" .$e->getMessage();
}

$sql = "select * from data";
$result = $conn->query($sql);

/*if($result->rowCount() > 10) {
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "ID:" . $row['id'] . "<br>";
	}
} else {
 	echo "less than 10 Result";
}*/


foreach ($result->fetchALL(PDO::FETCH_ASSOC) as $row) {
	echo "<pre>", print_r($row) , "</pre>";
	echo "ID: " . $row['id'] . "<br>";
}



?>