<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$circle = new Circle(new CircleAreaLib);
echo $circle->circleArea(6.2832) . PHP_EOL;

$square = new Square(new SquareAreaLib);
echo $square->squareArea(5);
