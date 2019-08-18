<?php
// Filters 
/*
PHP filters are used to validate and sanitize external input. This is expecially useful when the data sources contains unknown data, like user input. For example, data from an html form, Cookies, Sql statement result etc.


validation filter : 

validation is used to validate or check if the data meets certain qualifications. For example, passing in FILTER_VALIDATE_EMAIL will detemine if the data is a valid email address, but will not change the data itself.

senetization filter : 
Sanitization will sanitize the data, so it may alter it by removing undesired character. For example, passing in FILTER_SANITIZE_EMAIL will remove charater that are inappropriate for an email address to contain . The said iot does not validate thr data.
*/

// filter_has_var()
/*
	This function checks if a variable of a specified input type exits. it return TRUE on success or FALSE on failure.

	filter_has_var(type, variable);

	type-> input_get, input_post, input_cookie, input_server or input_env

	ex: filter_has_var(input_post, 'email');
*/

/*if(isset($_REQUEST['submit'])) {
	if(filter_has_var(INPUT_POST, 'name')) {
		echo 'name found';
	} else {
		echo 'name not found';
	}
}*/



// filter_var : this  validation is used to validate and sanitize data. This function filters a single variable with a specified filter.

// syntax: filter_var(variable, filter, option);
// Variable - Value to filter and
// Filter - The id of the filter to apply
// option - it specifies one or more flags/option to use
// ex: filter_var($email, FILTER_VALIDATE_EMAIL);
// ex: filter_var($email, FILTER_SANITIZE_EMAIL);

/*
Filter for validation
https://www.php.net/manual/en/filter.filters.validate.php
Filter for sanitize
https://www.php.net/manual/en/filter.filters.sanitize.php
*/

// Validation 


// $email = 'email@s/mail.com';
// $vemail = filter_var($email, FILTER_VALIDATE_EMAIL);
// $price = 10.5;
// echo gettype($price);
// $vprice = filter_var($price, FILTER_VALIDATE_FLOAT);

// if($vprice == false) {
// 	echo " Invalid Price <br>";
// } else {
// 	echo " Price is valid " . $vprice . "<br>";
// }

// echo gettype($vprice);





// Sanitization
// $email = 'com/////teact@gmai()()()()()l.com';
// $semail = filter_var($email, FILTER_SANITIZE_EMAIL);

// echo "Email is: " . $semail . "<br>";



// Filter_calback
// filter is used to call user-define function to filter data. 

// ex: filter_var($email, FILTER_CALLBACK, array('option'=>strtoupper'))

// $name = "amitsingh";
// echo filter_var($name, FILTER_CALLBACK, array('options'=>'strtoupper'));


function convert($info){
	return str_replace("website", "www.amitsingh.com", $info);
}

$info = "You can visite our website and learn php from website";
echo filter_var($info, FILTER_CALLBACK, array('options'=> "convert"));
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		Name: <input type="text" name="name" id="name">
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>