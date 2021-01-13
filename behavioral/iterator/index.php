<?php

namespace behavioral\iterator;

require_once 'AlphabeticalOrderIterator.php';
require_once 'WordsCollection.php';
require_once '../../Helper.php';

use Helper;

$collection = new WordsCollection();
$collection->addItem('First');
$collection->addItem('Second');
$collection->addItem('Third');
$collection->addItem('Fourth');

Helper::writeLine('Straight traversal');
foreach ($collection->getIterator() as $item) {
    Helper::writeLine($item);
}

Helper::writeLine();

Helper::writeLine('Reverse traversal');
foreach ($collection->getReverseIterator() as $item) {
    Helper::writeLine($item);
}

