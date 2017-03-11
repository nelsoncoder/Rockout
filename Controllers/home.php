<?php namespace Controllers;
use \Config\Views as Views;

class home extends Views
{

	public function index()
	{
		$title = 'home';
		$this->view('home', compact('title'));
	}

}