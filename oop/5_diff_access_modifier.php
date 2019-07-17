<?php
/*
	Type of Access Modiefier
	-> Public/default
	- public property and method can be accessed from anywher 
	
	-> Private
	- Private property or method can be accessed only whithin some class.
	- Private property cannot be access oytside or with object
	- In Inheritance, child class cannot access Parent's private property or method

	-> Protected
	- Cannot access protected property or method outside class or object
	- protected property or class can be accessed within same class and child class can accessed parents or grand parent property or method



*/

// Public Modiefier
/*class Father {
	public $a;
	public function disp($x){
		$this->a = $x;
		echo "Parent Function $this->a";
	}
}


class Son extends Father {
	public $b;
	public function displayChild($x,$y){
		
		$this->b = $y;
		echo "Child Value: $this->b";
		$this->disp($x);  
	} 
}


$obj = new Son;
$obj->displayChild(10,20);*/



// Private Modiefier

/*class Father {
	private $a;

	public function displayParent(){
		$this->a = 30;
		echo "Parent Function $this->a";
	}
}


class Son extends Father {
	public function displayChild(){
		echo $this->a;
	}
}

$obj = new Son;
$obj->displayChild();*/


// Public Modiefier



/*class Father {
	protected $a = 30;
	public function displayParent(){
		echo "Parent Function $this->a";
	}
}

class Son extends Father {
	protected $b = 20;
}

class GrandSon extends Son {
	public function displayGrandChild(){
		echo $this->a . "<br>" . $this->b;
	}
}

$obj = new GrandSon;

$obj->displayGrandChild();*/



// Access Modiefier with constructor



class Father {
	protected function __construct(){
		echo "<br> Parent constructor Called";
	}
}

$obj = new Father;
?>