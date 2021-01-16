<?php

namespace behavioral\strategy;


use Helper;

require_once 'Strategy.php';
require_once 'StrategyA.php';
require_once 'StrategyB.php';
require_once 'Context.php';
require_once '../../Helper.php';

$context = new Context(new StrategyA());
Helper::writeLine('client: normal sorting');
$context
    ->doBusinessLogic(['b', 's', 'z', 'f']);

Helper::writeLine();
Helper::writeLine('client: reverse sorting');
$context
    ->setStrategy(new StrategyB())
    ->doBusinessLogic(['a', 'w', 'g', 'y']);
