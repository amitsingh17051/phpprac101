<?php
/*
	These are contant designed to be used by classes,  not objects. once you initialize a const variable can't reinitiate it. const keyword is used to create class constant in php.

*/


class Father {
	const mark = 101;

	function disp(){
		echo self::mark;
	}
}

$obj = new Father;
echo Father::mark;
?>