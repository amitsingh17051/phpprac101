<?php

/*
-> Parent Contructor get inherited when child class does not have own construtor. 
*/
class Father {
	public $a;
	function __construct($x){
		echo "parent constructor Called";
		$this->a = $x;
		echo $this->a;
	}
}



class Son extends Father{
	public $b;
	function __construct($x, $y){
		parent::__construct($x); // Calling  Parent construtor
		echo "<br> Child constructor Called";
		$this->b = $y;
		echo $this->b;
	}
}


$obj = new Son(10, 20);
?>