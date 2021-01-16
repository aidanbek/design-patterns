<?php

namespace behavioral\state;

require_once 'State.php';
require_once 'Context.php';
require_once 'ConcreteStateA.php';
require_once 'ConcreteStateB.php';

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();