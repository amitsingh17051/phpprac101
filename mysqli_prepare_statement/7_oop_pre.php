<?php

/*
prepare() - it prepare an sql statement and returns a statement handle to be used for further opration on the statement of false if an error occurred. The query must consist of a single sql statement

syntax:
$result = $conn->prepare($sql);
$sql = "insert into data(name, roll, address) values(?,?,?)";


bind_param() - it bind variables to a prepare statement as parameter. its returns true on success or false on failure

syntax:
$result->bind_param('sidb', $name,$roll)

types:
s = string
i = integer
d = floating number
b = blob - such as image, pdf etc


execute() - it executes a query that has been previously prepared using prepare() function. it returns true on success or false on failure.
syntax:

$result->execute();

close() - it close prepare statement and also deallocates the statenebt handke. if the current statement has pending or unread result, This function cancel them so that the next query can be executed. it returns true on success or false on failure.
syntax:

$result->close()


bind_result() - it binds variables to a prpared statement for result storage. if retuns true on success or false on failure.

$result->bind_result($name,$location);

fetch() - it fetches the result from a prepared statement into the variables bound by bind_result()
ex:$result->fetch();


store_result() - it transfer a result set from a prepare statement. it returns true on success or false on failure
ex:$result->store_result();

num_rows() - it returns the number of rows in statement result set.
ex: $result->num_rows();

free_result() - it frees the result memory associated with the statement, which was allocated by store_result();
ex:$result->free_result();  

*/



$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "phpcrud";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($conn->connect_error) {
	die("Connection Failed");
} 
echo "Connected esuccessfully <hr>";


$sql = "select * from data";

$result = $conn->prepare($sql);

$result->execute();

$result->store_result();
// finding numbers of rows
echo $result->num_rows();

$result->free_result();
$result->close();

?>