<?php

class Car{

	public $wheel_count = 4; // accesable from whole script
	static $door_count = 4; // accessable within the class
  public $seat_count = 3;
  function car_detail(){
	//	echo $this->wheel_count;
	//	echo $this->door_count;
	//	echo $this->seat_count;	
		}
	}
	$bmw = new Car();
	$mercedes = new Car();

$bmw->car_detail();
echo Car::$door_count;
echo "<br>";


//$the_methods=get_class_methods();
?>
