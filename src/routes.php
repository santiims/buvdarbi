<?php

use Buvdarbi\Route;
use Buvdarbi\controllers\IndexController;

return [
	'/' => new Route(IndexController::class, 'index')
];