<?php

namespace behavioral\chainOfResponsibility;

require_once 'Handleable.php';
require_once 'AbstractHandler.php';
require_once 'DogHandler.php';
require_once 'MonkeyHandler.php';
require_once 'SquirrelHandler.php';
require_once 'Feeder.php';

$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($dog)->setNext($squirrel);

$feeder = new Feeder();
$foods = ['Nut', 'Banana', 'Coffee'];

$feeder->feed($foods, $monkey);
