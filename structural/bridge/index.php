<?php

require_once '../../Helper.php';
require_once 'IDevice.php';
require_once 'Remote.php';
require_once 'Radio.php';
require_once 'TV.php';

use structural\bridge\Remote;
use structural\bridge\Radio;
use structural\bridge\TV;

$samsungTV = new TV('MQ44', 44.5);
$remmixRadio = new Radio('Remmix S123');
$samsungTvRemote = new Remote($samsungTV);
$remmixRadioRemote = new Remote($remmixRadio);

$samsungTvRemote->togglePower();
$samsungTvRemote->togglePower();
$remmixRadioRemote->togglePower();
$remmixRadioRemote->togglePower();

