<?php

namespace structural\facade;

require_once 'Facade.php';
require_once 'FirstSubsystem.php';
require_once 'SecondSubsystem.php';

$facade = new Facade();
$facade->operation();
