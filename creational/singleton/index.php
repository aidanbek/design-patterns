<?php

require_once 'Government.php';
require_once '../../Helper.php';

use creational\singleton\Government;

$firstGovernment = Government::getGovernment();
$secondGovernment = Government::getGovernment();

if ($firstGovernment === $secondGovernment) {
    Helper::writeLine('The same');
} else {
    Helper::writeLine('Not the same');
}