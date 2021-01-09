<?php

require_once 'ICarBuilder.php';
require_once 'Car.php';
require_once 'CarManual.php';
require_once 'CarBuilder.php';
require_once 'CarManualBuilder.php';
require_once 'Director.php';


use creational\builder\CarBuilder;
use creational\builder\CarManualBuilder;
use creational\builder\Director;


$director = new Director();
$carManualBuilder = new CarManualBuilder();
$carBuilder = new CarBuilder();

echo "set builder to CarManualBuilder<br>";
$director->setBuilder($carManualBuilder);
$director->constructSportCar();
echo $carManualBuilder->getResult()->getInfo();
echo "<br>";

echo "set builder to carBuilder<br>";
$director->setBuilder($carBuilder);
$director->constructSportCar();
echo $carBuilder->getResult()->getInformation();
echo "<br>";
