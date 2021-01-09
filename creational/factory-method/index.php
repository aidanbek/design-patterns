<?php

require_once 'IProduct.php';
require_once 'ICreator.php';
require_once 'MeatProduct.php';
require_once 'MilkProduct.php';
require_once 'MeatProductCreator.php';
require_once 'MilkProductCreator.php';
require_once 'Operator.php';

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