<?php

namespace behavioral\command;

require_once 'Commandable.php';
require_once 'Receiver.php';
require_once 'Invoker.php';
require_once 'SimpleCommand.php';
require_once 'ComplexCommand.php';

$invoker = new Invoker();
$receiver = new Receiver();
$invoker->setOnStart(new SimpleCommand('somewhere'));
$invoker->setOnFinish(new ComplexCommand($receiver, 'A', 'B'));
$invoker->invoke();
