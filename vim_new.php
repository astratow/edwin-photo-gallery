<?php

class cars{

	var $wheel_count = 4;
	var $door_count = 4;

	function car_detail(){
		return "This car has " . $this->wheel_count;	
		}
	}
	$bmw = new Cars();
	$mercedes = new Cars();

$bmw->car_detail();
echo $bmw->wheel_count;
echo "<br>";
echo $mercedes->car_detail() . " wheel.<br>";


//$the_methods=get_class_methods();
?>
