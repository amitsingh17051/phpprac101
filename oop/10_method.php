<?php

/*
Overriding Method
- overiding refer to the ability of a subclass to re-implements a method from a superclass.

- only inherited methods can be overriden
- final and static methods cannot b overridden
- the overrriden method must have same arguments

*/


class Father {
	function disp(){
		echo "Father class";
	}
}

class Son extends Father {
	function disp(){
		echo "Son class";
	}
}


$objs = new Son;

$objs->disp(); 
?>