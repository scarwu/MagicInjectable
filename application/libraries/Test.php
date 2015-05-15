<?php

namespace App\Library;

use Phalcon\DI\Injectable;

class Test extends Injectable {

    public function magic() {
        return (array) $this->config;
    }
}
