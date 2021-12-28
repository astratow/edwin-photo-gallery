<?php

class Car{

  public $wheel_count = 4;

  static $door_count = 3;


  function __construct(){

    echo $this->wheel_count;
    echo self::$door_count++;

		}
}
echo "<h1>I am running this!</h1>";
$bmw = new Car();

$mercedes = new Car();
	
  /*class Trucks extends Car{

    static function display(){
      
      echo parent::car_detail();
    }
  }
  Trucks::display();*/

?>
