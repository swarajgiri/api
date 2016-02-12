<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use League\Route\Strategy\RestfulStrategy;

$router = new League\Route\RouteCollection;
$router->setStrategy(new RestfulStrategy);

require_once '../routes.php';

$request = Request::createFromGlobals();
$dispatcher = $router->getDispatcher();

$response = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

$response->send();
