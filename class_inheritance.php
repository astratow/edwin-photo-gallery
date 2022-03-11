<?php

class Cars{

	var $wheels = 4;
	function greeting(){
		echo "Hello";
	}
}

$bmw = new Cars();

class Trucks extends Cars{

}

$tacoma = new Trucks();
echo 'inheritance test';

?>