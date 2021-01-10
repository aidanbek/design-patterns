<?php

namespace structural\decorator;

require_once '../../Helper.php';
require_once 'IComponent.php';
require_once 'Decorator.php';
require_once 'ConcreteComponent.php';
require_once 'CompressionDecorator.php';
require_once 'EncryptionDecorator.php';
require_once 'Operator.php';

use Helper;

$component = new ConcreteComponent();
$compressedComponent = new CompressionDecorator($component);
$encryptedComponent = new EncryptionDecorator($compressedComponent);
$operator = new Operator($encryptedComponent);

Helper::writeLine($operator->run());
