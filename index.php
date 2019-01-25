<?php

include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle('Hinh tron 1',15,'black');
echo $circle->__toString();

$cylinder = new Cylinder('Hinh tru 1',20,'blue',15);
echo $cylinder->__toString();

?>