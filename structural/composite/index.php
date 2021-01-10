<?php

require_once '../../Helper.php';
require_once 'AbstractComponent.php';
require_once 'Leaf.php';
require_once 'CompositeComponent.php';

use structural\composite\Leaf;
use structural\composite\CompositeComponent;

$tree = new CompositeComponent('tree');

$firstBranch = new CompositeComponent('first branch');
$secondBranch = new CompositeComponent('second branch');

$leaf1 = new Leaf('leaf1');

$firstBranch->add($leaf1);
$firstBranch->add(new Leaf('leaf2'));
$firstBranch->add(new Leaf('leaf3'));

$secondBranch->add(new Leaf('leaf4'));
$secondBranch->add(new Leaf('leaf5'));

$tree->add($firstBranch);
$tree->add($secondBranch);

$firstBranch->remove($leaf1);

$tree->operation();


