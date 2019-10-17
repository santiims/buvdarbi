<?php

namespace Buvdarbi\controllers;

class IndexController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function redirect()
	{
		redirect('/index');
	}

	public function index()
	{
		return $this->view('view');
	}

	public function register()
	{
		echo "Hello world!";
		die;
	}
}