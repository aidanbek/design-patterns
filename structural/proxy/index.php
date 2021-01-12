<?php

namespace structural\proxy;

require_once 'Cacheable.php';
require_once 'Cache.php';
require_once 'CacheLoggingProxy.php';
require_once 'App.php';

$id = '152';
$app = new App(new CacheLoggingProxy(new Cache()));
$app->createRecord($id, 'initial');
$app->getRecord($id);
$app->updateRecord($id, 'current');
$app->deleteRecord($id);
