<?php

use Buvdarbi\Route;
use Buvdarbi\controllers\IndexController;

return [
	'/' => new Route(IndexController::class, 'redirect'),
	'/index' => new Route(IndexController::class, 'index'),
	'/index/register' => new Route(IndexController::class, 'register'),
];