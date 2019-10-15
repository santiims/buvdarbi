<?php


use Illuminate\Support\Arr;
use Buvdarbi\Controllers\NotFoundController;
use Buvdarbi\Route;

require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

/**
 * @var Route[] $routes
 */
$routes = require_once '../src/routes.php';

$parsed = parse_url($_SERVER['REQUEST_URI']);
$path = $parsed['path'];

$route = Arr::get($routes, $path, new Route(NotFoundController::class));
$route->handle();