<?php

class cars{

	public $wheel_count = 4; // accesable from whole script
	private $door_count = 4; // accessable within the class
	protected $seat_count = 5; // available within class and children

	function car_detail(){
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;	
		}
	}
	$bmw = new Cars();
	$mercedes = new Cars();

$bmw->car_detail();
echo $bmw->wheel_count;
echo "<br>";


//$the_methods=get_class_methods();
?>
