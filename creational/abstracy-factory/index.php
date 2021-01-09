<?php

require_once 'IChair.php';
require_once 'ISofa.php';
require_once 'ITable.php';
require_once 'IFurnitureFactory.php';
require_once 'ModernChair.php';
require_once 'ModernSofa.php';
require_once 'ModernTable.php';
require_once 'VictorianChair.php';
require_once 'VictorianSofa.php';
require_once 'VictorianTable.php';
require_once 'ModernFurnitureFactory.php';
require_once 'VictorianFurnitureFactory.php';
require_once 'Operator.php';
require_once 'Printer.php';

use creational\abstractFactory\ModernFurnitureFactory;
use creational\abstractFactory\Printer;
use creational\abstractFactory\VictorianFurnitureFactory;
use creational\abstractFactory\Operator;

$operator = new Operator(new ModernFurnitureFactory());
$printer = new Printer();

echo 'with ModernFurnitureFactory<br>';
$chair = $operator->getFactory()->makeChair();
$sofa = $operator->getFactory()->makeSofa();
$table = $operator->getFactory()->makeTable();
$printer->print($chair, $sofa, $table);

echo 'change to VictorianFurnitureFactory<br>';
$operator->changeFactory(new VictorianFurnitureFactory());
$chair = $operator->getFactory()->makeChair();
$sofa = $operator->getFactory()->makeSofa();
$table = $operator->getFactory()->makeTable();
$printer->print($chair, $sofa, $table);
