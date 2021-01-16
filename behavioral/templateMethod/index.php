<?php

namespace behavioral\templateMethod;

require_once 'AbstractClass.php';
require_once 'ConcreteClass1.php';
require_once 'ConcreteClass2.php';
require_once 'Operator.php';
require_once '../../Helper.php';

use Helper;

Helper::writeLine('create new operator with class1');
$operator = new Operator(new ConcreteClass1());
$operator
    ->operate();

Helper::writeLine();
Helper::writeLine('change to class2');
$operator
    ->setClass(new ConcreteClass2())
    ->operate();

