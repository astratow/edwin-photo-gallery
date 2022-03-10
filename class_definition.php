<?php

class Cars{
	var $wheel_count = 4;
	var $door_count = 4;
	function car_detail(){
		return "This car has " . $this->wheel_count . " wheels.";
	}
}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count = 10 . "<br>";
echo $mercedes->car_detail();


/*$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
	# code...
	echo $method.'<br>';
}*/

/*$my_classes = get_declared_classes();
foreach ($my_classes as $class) {
	echo $class . '<br>';
}*/

?>
