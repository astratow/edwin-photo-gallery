<?php

class Car{

	//private $wheel_count = 4; // accesable from whole script
  private $door_count = 4; // accessable within the class
  //public $seat_count = 3;
  function get_values(){
	//	echo $this->wheel_count;
		echo $this->door_count  . "<br>";
	//	echo $this->seat_count;	
  }
  function set_values(){
    $this->door_count = 10 . "<br>";
  }
}

$bmw = new Car();

$bmw->set_values();

$bmw->get_values();
	//$mercedes = new Car();


//echo Car::$door_count;
echo "<br>";


//$the_methods=get_class_methods();
?>
