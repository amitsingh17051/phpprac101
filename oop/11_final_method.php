<?php

/*
Final method
- final keyword is used to create final method or final class.
- A final method cannot be overriden in child class.
- A final class cannot inherite its means we can not create sub class of a final class.

*/

// 1
final class Father {
	function disp() {
		echo "Father Class";
	} 	

	function shows(){
		echo "hello shows";
	}
}

class Son extends Father {
	function disp(){
		echo "Son Class";
	}

	function shows(){
		echo "Son Shows";
	}
}

$obj = new Son;
$obj->disp();



?>

