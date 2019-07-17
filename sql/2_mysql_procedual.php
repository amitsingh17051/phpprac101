<?php

/*
	mysqli procedural database function

	1.mysqli_query() - the function is used to perform a query against the database. for successful select, show, describe or explain queries it will return a mysqli_result object. for other successful queries it will return true and false on failure

	syntax- 
	mysqli_query($conn, $sql);
	Result_mode = it specifies a constant. Either:

	MYSQLI_USE_RESULT(use this if we have to retrieve large amount of data)
	MYSQLI_STORE_RESULT(this is defulat)

	2.mysqli_num_rows() function returns the number of rows in a result setl;
	syntax -> 
	mysqli_num_rows(mysqli_result);
	where mysqli_result specifies a return set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result();

	3.mysqli_fetch_assoc() function fetches a result row as an associate array. it returns an associates array of string representing the fetches row. null if there are no more rows in result-set fieldnames returns from this function are case-sensitive.
	sytax - 
	mysqli_fetch_assoc(mysqli_result)
	where mysqli_result specifies a return set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result();



	4.mysqli_error() functionreturns the last error description for the most recent function call, if any if no error occured.
	syntax - mysqli_error($conn)

	
*/


?>