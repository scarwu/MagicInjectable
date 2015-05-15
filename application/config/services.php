<?php

use Phalcon\DI\FactoryDefault,
    Phalcon\Mvc\Url,
    Phalcon\Mvc\View,
    Phalcon\Mvc\Router,
    Phalcon\Mvc\Dispatcher;

$di = new FactoryDefault();

$di->set('config', $config);

$di->set('url', function () use ($config) {
    $url = new Url();
    $url->setBaseUri($config->application->baseUri);

    return $url;
}, true);

$di->set('dispatcher', function () {
    $dispatcher = new Dispatcher();
    $dispatcher->setDefaultNamespace('App\Controller');

    return $dispatcher;
}, true);

$di->set('router', function() {
    $router = new Router();
    $router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);

    return $router;
});

$di->set('view', function () use ($config) {
    $view = new View();
    $view->setViewsDir($config->application->viewsDir);
    $view->registerEngines([
        '.php' => 'Phalcon\Mvc\View\Engine\Php'
    ]);

    return $view;
}, true);
