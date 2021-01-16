<?php

namespace behavioral\visitor;

require_once 'Component.php';
require_once 'Visitor.php';
require_once 'ComponentA.php';
require_once 'ComponentB.php';
require_once 'Visitor1.php';
require_once 'Visitor2.php';
require_once 'Operator.php';
require_once '../../Helper.php';

use Helper;

Helper::writeLine();

$components = [
    new ComponentA(),
    new ComponentB()
];

$visitor1 = new Visitor1();
$visitor2 = new Visitor2();

Operator::operate($components, $visitor1);

Helper::writeLine();

Operator::operate($components, $visitor2);
