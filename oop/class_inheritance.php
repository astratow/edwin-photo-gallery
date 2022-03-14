<?php

class Cars{

	var $wheels = 4;
	function greeting(){
		echo "Hello" . '<br>';
	}
}

$bmw = new Cars();

class Trucks extends Cars{ //extends keyword decides of inheritance

}

$tacoma = new Trucks();
echo $tacoma->wheels;
$bmw->greeting();
echo 'inheritance test';

?>
