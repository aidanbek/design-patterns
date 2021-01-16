<?php

namespace behavioral\memento;

require_once 'Memento.php';
require_once 'ConcreteMemento.php';
require_once 'Originator.php';
require_once 'Caretaker.php';
require_once '../../Helper.php';

use Helper;


$originator = new Originator('first originator');

$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->doOperation();

$caretaker->backup();
$originator->doOperation();

$caretaker->backup();
$originator->doOperation();

Helper::writeLine();
$caretaker->showHistory();

Helper::writeLine('client: rollback');
$caretaker->undo();

Helper::writeLine('client: rollback');
$caretaker->undo();

Helper::writeLine();
$caretaker->showHistory();