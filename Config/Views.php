<?php namespace Config;

class Views
{

	public function view($view, $var = [])
	{
		require_once "Views/" . $view . ".tpl";
	}

}
