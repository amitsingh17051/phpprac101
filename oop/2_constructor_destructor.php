<!-- 

-> CONSTRUTOR 

PHP supports a special type of method called construtor for initializing an object when it is created. This is known as automatic initialization of objects.

-> Type of contrutor
- default construtor
- parameterize constructor
	 
	function __construct($index){
		echo "construtor called";
	}
		
-> DESTRUCTOR

In PHP destructor are called when you exxplicitly destroy an object or when all refrences to the object go or out of scope.

 -->

 <?php
class Student {
	function __construct(){
		echo "construtor called";
	}

	function __destruct(){
		echo "<br> Object destroy";
	}
}

$stu = new Student;

class Student1 {
	public $roll;
	function __construct($enroll){
		echo "para construtor called <br>";
		$this->roll = $enroll;
		echo $this->roll;
	}
}



$stu1 = new Student1(10);





 ?>


