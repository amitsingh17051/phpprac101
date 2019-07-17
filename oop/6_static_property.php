<?php
/*
	A variable within a function reset time when we call it. In case if we need, variable values to remain save even outside the function then we have to use static keyword

	- static method are class method they are meant to call on the class, not on an object.

	self keyword is used to access the static properties inside static method. static properties cannot be accessed through the object using the arrow operator ->.$this is not available inside the method declared as ststic. Static method cannot access non-static properties. 

*/


/*class Father {
	public static $a = 10;

	public function disp(){
		echo "Value";
	}
}
Father::$a = 40;
Father::disp();*/


/*class Student {
	public static $name;
	public static function display($nm){
		self::$name = $nm;
		echo "Hello Amit" . self::$name;
	}
}

Student::display("Singh");


*/

// Static with inheritance

class Father {
	public static $a = 20;
}

class Son extends Father {
	function disp(){
		echo self::$a;
	}
}


$obj = new Son;

$obj::disp();
?>