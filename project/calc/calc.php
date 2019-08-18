<?php
class Calc {
	public $num1;
	public $num2;
	public $calc;

	public function __construct($num1, $num2, $calc) {
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->calc = $calc;
	}

	public function calcMethod() {
		switch ($this->calc) {
			case 'add':
				$result = $this->num1 + $this->num2;
				break;
			case 'subs':
				$result = $this->num1 - $this->num2;
				break;
			case 'mul':
				$result = $this->num1 * $this->num2;
				break;
			case 'dev':
				$result = $this->num1 / $this->num2;
				break;	
			default:
				$result = "Error"; 
				break;
		}

		return $result;
	}
}




?>