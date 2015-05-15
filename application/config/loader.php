<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerNamespaces([
    'App\Controller' => $config->application->controllersDir,
    'App\Library' => $config->application->librariesDir
]);

$loader->register();
