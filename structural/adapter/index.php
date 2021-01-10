<?php

require_once '../../Helper.php';
require_once 'INotificationEngine.php';
require_once 'EmailNotificationEngine.php';
require_once 'WindowsNotificationEngine.php';
require_once 'NotificationSender.php';

use structural\adapter\NotificationSender;
use structural\adapter\EmailNotificationEngine;
use structural\adapter\WindowsNotificationEngine;


$sender = new NotificationSender(new EmailNotificationEngine());
$sender->send('alert', 'you repo need to be updated');
Helper::writeLine();

Helper::writeLine('change engine');
$sender->changeEngine(new WindowsNotificationEngine());
$sender->send('alert', 'you repo need to be updated');
Helper::writeLine();
