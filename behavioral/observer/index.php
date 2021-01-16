<?php

namespace behavioral\observer;

require_once 'User.php';
require_once 'UserRepository.php';
require_once 'Logger.php';
require_once 'OnboardNotification.php';


$repository = new UserRepository();
$repository->attach(new Logger(__DIR__ . "/log.txt"));
$repository->attach(new OnboardNotification(), 'users:created');

$repository->initialize(__DIR__ . 'users.csv');

$user = $repository->createUser([
    'name' => 'john',
    'email' => 'john@mail.com'
]);

$repository->deleteUser($user);