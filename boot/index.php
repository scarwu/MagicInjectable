<?php

use Phalcon\Mvc\Application;

$root = __DIR__ . '/../application';

include "{$root}/config/config.php";
include "{$root}/config/loader.php";
include "{$root}/config/services.php";

echo (new Application($di))->handle()->getContent();
