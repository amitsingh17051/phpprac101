<?php
/*
An interfaces is like a class with nothing but abstract methods. All method of an interface must be public. it is also possible to declare a constructor in an interface. its possible for interface to have constant(can not be overridden by a class/interface that inherit them). interface keyword is used to create an interfaces in php.


- interface dont't have intace variable
- All method of an interface is abstract
- All method of an interface are autometically (by default ) public.
- we can not use the private and protected specifier when declaring member of an interface
- we can not create object of interface
- more than one interface  acn be implements in a single class
- a clas implements an interface using implements keyword
- if a class is implements an iteface it has to define all the methods given in that interface.
- if a class does not implements all the method declared in the interface, the class must be declared abstract
- the method signature for the method in the class must match the method signature as it appears in the interface.
- Any class can use an interface constant from the name og the interface like Test::roll.
- Classes that implements an interface an treat the constant as they were inherite
- An interface can extend(inherite) an interface.
- One interface can inherite another interface using extends keywords.
- an interface can not extends classes.
*/


// Defining interface

/*interface interface_name {
	const properties;
	method;   // abstract and public method only         
}
*/


class Father {
	public $sci = 101;
}

interface Mother {
	const math = 102; 
	public function disp();

}

// extend class and implement interface in one class

class Son extends Father implements Mother {

	public function disp(){
		echo $this->sci;
		echo Mother::math;
	}
}

$obj = new Son;
$obj->disp();

/*

// implement multiple interface
class Son implements Father, Mother{
	
	public function disp(){
		echo Father::mark;
		echo Mother::math;
	}
	public function getValue(){}
	
}*/







?>