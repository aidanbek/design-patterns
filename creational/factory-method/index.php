<?php

require_once 'Operator.php';
require_once 'MeatProductCreator.php';
require_once 'MilkProductCreator.php';


use creational\factoryMethod\Operator;
use creational\factoryMethod\MeatProductCreator;
use creational\factoryMethod\MilkProductCreator;

$operator = new Operator(new MilkProductCreator());

$operator
    ->getProduct()
    ->doStuff();

$operator
    ->changeCreator(new MeatProductCreator())
    ->getProduct()
    ->doStuff();