<?php

/*
Cookie 
- A cookie is a small piece of text data set by web server that resided on the client's machine. Once it's been set, the client autometically returns the cookie to the web server with each request that it makes. This allows the server to place values it wishes to 'remember' in the cookie, and have access to them when creating a reponse.

types of cookies

session cookies - cookies that are set without the expires field are called session cookies. it is destroyed when the user quits the browsers without expire field

persistent cookies - the browser keeps it up until their expiration date is reached with expire field.


PHP Cookies
- PHP transparently supports HTTP cookies. Cookies are a machanism for storing data in the remote browser and thus tracking or identifying return users. cookies are part of the HTTP header.  




Creating Cookie

setCookie() - setcookie is used to set/create/sent cookies. This function must appears before the <html> tag.

syntax = setCookie(name, value,path,domain,secure,httponly);
ex: setCookie("username", "amit");
where
name - This is the name of cookie
value - this sets the value of cookie. This value is stored on the clients computer
name and value are required

option attr
path 
domain 
domain
secure
httponly

whenever you omit the option cookie fields, the browser fills them in autometically with reasonable default


expires 
- its describe the time cookie wil be expire. if this parameter is not set or set 0 then cookie will autometicaly expires when browser is closed

ex setCookie("username", "geeky", time()+60*60*24*10); // 10 days

*/






/*
domain - it speciies the domain or which the cookie is valid. i not speciied, this defoults to the host portion of the current document location. if a domain is specified,subdomain are always included.

ex: setCookie("username", "geeky", "geektshows.com");


path - path can be / (root) or / mydir (directory). if not specifiedm defoult to the current path of the current document location, as wellas its decendents

secure- cookie to only be tranmiited over secure protocol as https. when set to TRUE(1), the cookie will only be set if a secure connection exists

httponly - when true the cookie will be made accessible only throught the http protocol. 



Reading/Accessing Cookie
we can read/access cookie by $_COOKIE super global variable
syntax: $_COOKIE['username'];

*/

setCookie("username2", "amitsingh2");






/*
Replace/Append Cookie
When we assign a new value to cookie, thecurrent cookie are not replace. The new cookie is parsed and its name-value pair is append to the list. The exception is when you assign a new cookie with the same name(and same domain and path, if they exist) as a cookie that already exists exist. In this case the old value is replaced with the new.

*/



setcookie("usernameID", "New Cookie", time()+60*60*24*10);


/*

Delete Cookie

A cookie is deleted by settings a cookie with the same name (and domain and path, if they were set) with an expiration date in the past

setCookie("username", "geeky", time()+60*60*24*10);
setCookie("username", "geeky" time()-3600);

*/

// Deleting Cookie give time negative

$cookie_name = 'user_email';
if(isset($_REQUEST['set'])) {
	$cookie_value = $_REQUEST['email'];
	$cookie_expire = time()+60*60*24*2;
	setCookie($cookie_name, $cookie_value, $cookie_expire);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Cookie</h1>
	<form action="" name="myForm" method="post">
		Email: 
		<input type="email" name="email" > <br></br>
		<input type="submit" value="submit" name="set">
	</form>

	<hr>
	<?php
		if(isset($_COOKIE[$cookie_name])) {
			echo "Cookie Name is : " . $cookie_name . " and value is " . $_COOKIE[$cookie_name] . "<br>";
		} else {
			echo "Cookie not set";
		}

	?>
	
</body>
</html>