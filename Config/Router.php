<?php namespace Config;

class Router
{

	public static function run(Request $request)
	{
		$controller = $request->getController();
		$ruta = ROOT . "Controllers" . DS . $controller .".php";
		$method = $request->getMethod();
		if($method == "index.php"){
			$method = "index";
		}
		$params = $request->getParams();
		if(is_readable($ruta)){
			require_once $ruta;
			$start = "Controllers\\" . $controller;
			$controller = new $start;
			if(!isset($params)){
				$datos = call_user_func(array($controller, $method));
			}else{
				$datos = call_user_func_array(array($controller, $method), $params);
			}
		}else {
			echo "Error 404";
		}

	}

}
