<!-- 

-> Inharitence

The mechanism of deriving a new class from an old one is called inheritance or derivation

Parent Class->Child Class

We use extend keyword for class inharitance
like: class Manager extends Employee(){}

Type of inheritance 
- single inheritance
- Multiple inheritance
- multi-level inharitance
- hierarchical inharitance


- single inheritance
if a class derived from on base class(Parent class), it is called single inharitance
like:
class Father {} -> Parent Class
class Son extends Father{} -> Child Class


- Multiple inheritance
If a class is derived from more than one parent class, then it is called multiple inheritance
like: 
class Father {} -> Parent Class
class Son extends Father{} -> Child Class
class GrandSon extends Son{} -> Sub Child Class

- hierarchical inharitance
Making multiple child class from one parent class is called hierarchical inharitance
Like:
class Father {} -> Parent Class
class Son extends Father{} -> Child Class
class Daughter extends Son{} -> Child Class

 -->

 <?php


class Father { // Parent Class
	public $a;
	public $b;
	function getValue($x, $y) {
		$this->a=$x;
		$this->b=$y; 
	}
}

// Single inhaeritance
/*class Son extends Father{ // Child Class
	function displayValue(){
		echo "Value of A: $this->a <br>";
		echo "Value of B: $this->b <br>";
	}
}

$obj = new Son;
$obj->getValue(10,20);
$obj->displayValue();
*/


// Multiplae inhaeritance
/*class Son extends Father{
		public $c =22;
		public $sum;

	function add(){
		$this->sum = $this->a + $this->b + $this->c;
		return $this->sum; 
	}
}

class GrandSon extends Son {
	function display() {
		echo "Value of A: $this->a <br>";
		echo "Value of B: $this->b <br>";
		echo "Value of C: $this->c <br>";
		echo "Value of Age Sum:" . $this->add() . "<br>";
	}
}


$obj = new GrandSon;
$obj->getValue(10,20);

$obj->display();*/



 
// hierarchical inhaeritance
class Son extends Father {
	function add(){
		return $this->a + $this->b;	
	}

	function display(){
		echo "Value of A: $this->a <br>";
		echo "Value of B: $this->b <br>";
		echo "Value of A:"  . $this->add() . "<br>";
	}
}

class Daughter extends Father {
	function multi() {
		return $this->a * $this->b;
	}

	function display(){
		
		echo "Multification:"  . $this->multi() . "<br>";
	}
}

$objs = new Son;
$objd = new Daughter;


$objs->getValue(10,20);
$objs->display();

$objd->getValue(10,20);
$objd->display();

 ?>