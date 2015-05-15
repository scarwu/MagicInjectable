<?php

namespace App\Controller;

use App\Library\Test,
    Phalcon\Mvc\Controller;

class MainController extends Controller {

    public function indexAction() {
        var_dump((new Test)->magic());
    }
}
