<?php

namespace behavioral\mediator;

use Helper;

require_once 'Mediator.php';
require_once 'BaseComponent.php';
require_once 'ComponentA.php';
require_once 'ComponentB.php';
require_once 'ConcreteMediator.php';
require_once '../../Helper.php';

$cA = new ComponentA();
$cB = new ComponentB();
$mediator = new ConcreteMediator($cA, $cB);

Helper::writeLine('client a triggers A');
$cA->doA();

Helper::writeLine();

Helper::writeLine('client b trigger D');
$cB->doD();
