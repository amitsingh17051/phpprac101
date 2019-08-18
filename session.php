<?php

/*
session - A way is way  to store information(in variable) to be used across multiple pages

How session works

session_start() -> sssion available/starts -> 

if no -> store a cookie on client machine cookie_name - phpsessid content - sessionId

if no -> store a file on server name - sess_sessionid content -session_variable

if yes -> it matches phpsessid cookie session id with server file -> if both match -> all session variable are available
*/



// it crates/start a session or resumes the current one based on a session on a session indentifier passed via a get or post request, or passed via a cookie
// This function first checks if a session is already started and if none is started then it starts one. when it fails to start the session, returns False and no longer initializes $_SESSION

// Note : the session_start() function must be the vary first thing is your document. before any HTML tags

/*
set session variable

Session variable are set with the PHP global variable $_SESSION. These variable can be accessed during lifetime of session

$_SESSION['username'] = 'geekyshows';
$_SESSION['password'] = '123456';
$_SESSION['time'] = time();
$_SESSION['cart'] = $number;

Get/Access session variable
- session variable as stored in the PHP global variable $_SESSION



*/



session_start();


// check session is set or not
// $uname =  'geekyshow2 	';
// $_SESSION['username'] = $uname;
// $_SESSION['password'] = '123456';

// echo $_SESSION['username'] . "<br>";
// echo $_SESSION['password'] . "<br>";

// unset($_SESSION['password']);

// session_unset();
// session_destroy();




/*
if(isset($_SESSION['username'])) {
	echo "true";
} else {
	echo "false";
}
session_destroy();


if(isset($_SESSION['username'])) {
	echo "true";
} else {
	echo "false";
}*/


// unset($_SESSION['varName']) - This is used to free/unset/unregister a session variable.
// session_unset() - this is used fro free/unsetunregister all session variable
//session_destroy() - it destroy all of the data associated with the current session. it does not unset any of the global variable associated with the session, or unset the session cookie. to use the session variable again, session_start() has to be called




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>