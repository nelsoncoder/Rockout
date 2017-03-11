<?php namespace Config;

class Request
{

	private $controller;
	private $method;
	private $params;

	public function __construct()
	{
		if(isset($_GET['url'])){
			$route = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$route = explode("/", $route);
			$route = array_filter($route);
			if($route[0] == "index.php"){
				$this->controller = "home";
			}else{
				$this->controller = strtolower(array_shift($route));
			}

			$this->method = strtolower(array_shift($route));

			if(!$this->method){
				$this->method = "index";
			}
			$this->params = $route;
		}else{
			$this->controller = "home";
			$this->method = "index";
		}
	}

	public function getController()
	{
		return $this->controller;
	}

	public function getMethod()
	{
		return $this->method;
	}

	public function getParams()
	{
		return $this->params;
	}
}
