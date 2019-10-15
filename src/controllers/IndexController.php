<?php

namespace Buvdarbi\controllers;

class IndexController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->view('view');
	}
}