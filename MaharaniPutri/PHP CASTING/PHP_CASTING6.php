<!DOCTYPE html>
<html>
<body>

<pre>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);?> 
</pre>

<p>Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values.</p>

</body>
</html>
