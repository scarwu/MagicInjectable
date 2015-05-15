<?php

use Phalcon\Config;

$config = new Config([
    'application' => [
        'baseUri' => '/',
        'controllersDir' => "{$root}/controllers",
        'viewsDir' => "{$root}/views",
        'librariesDir' => "{$root}/libraries"
    ]
]);
