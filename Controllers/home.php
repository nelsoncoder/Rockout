<?php namespace Controllers;
use \Config\Views as Views;

class home extends Views
{

	public function index()
	{
		$params = [
			'title' => 'home',
			'description' => 'assa'
		];

		$this->view('home', compact('params'));
	}

}