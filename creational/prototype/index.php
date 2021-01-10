<?php

require_once 'AbstractBook.php';
require_once 'PhpBook.php';
require_once 'SqlBook.php';
require_once '../../Helper.php';

use creational\prototype\PhpBook;
use creational\prototype\SqlBook;

$phpProto = new PhpBook();
$sqlProto = new SqlBook();

$sqlSomeBook = clone $sqlProto;
$sqlSomeBook->setTitle('SQL For Cats');
Helper::writeLine('sqlSomeBook topic: '. $sqlSomeBook->getTopic());
Helper::writeLine('sqlSomeBook title: '. $sqlSomeBook->getTitle());
Helper::writeLine();

$phpSomeBook = clone $phpProto;
$phpSomeBook->setTitle('PHP 8.0');
Helper::writeLine('phpSomeBook topic: '. $phpSomeBook->getTopic());
Helper::writeLine('phpSomeBook title: '. $phpSomeBook->getTitle());
Helper::writeLine();
