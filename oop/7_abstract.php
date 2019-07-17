<?php

/*
	A class that is declared with abstract keyword, is known as abstract class in PHP. it can abstract and non-abstract methods. it needs to be extended and its method implemented. objects of an abstract class cannot be created.

	can not make a obj of abstract class

	Abstract method
	- A method that is declared as abstract and does not have implementation is know as abstract method.

	Rules
	- we cannot use abstract classes to instantiate onject directly
	- objects pf an abstract class cannot be created.
	- the abstract mothods of an abstract class must be define in its subclass.
	- if there is any abstract method in a class, that class must be sbtract.
	- a class can be abstract without having abstract method.
	- it is not necessary to declare all method abstract in a abstract class
	- we can not decvlare abstract constructor or abstract static method
	- if you are extending any abstract class that  have abstract method. you must either provide the implementation of the method or make this class abstract
*/



abstract class Father {
	function disp(){
		echo "Normal method";
	}

	abstract function absmethod();
}


class Son extends Father {
	
}

$obj = new Son;



?>