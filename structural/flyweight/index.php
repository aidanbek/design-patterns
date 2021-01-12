<?php

namespace structural\flyweight;

require_once 'TreeType.php';
require_once 'TreeFactory.php';
require_once 'Tree.php';
require_once 'Forest.php';

$forest = new Forest();
$forest->plantTree(1, 0, 'jim', 'red', 'composite');
$forest->plantTree(3, 0, 'sam', 'green', 'simple');
$forest->plantTree(2, 2, 'sam', 'green', 'simple');
$forest->draw('Wonderland');
