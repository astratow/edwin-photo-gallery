<?php 

class Cars
{
  function greetings(){

}
}
$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {

  echo $method . '<br>';
}




?>
