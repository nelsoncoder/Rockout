<?php 
session_start();
require_once 'config.php';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);

define('SITENAME', $config[site][domain]);
define('URL', $config[site][header] . '://' . SITENAME);

if($config[site][domain] == '') {
	define('STYLES', 'App/Output/css/styles.css');
	define('SCRIPTS', 'App/Output/js/scripts.js');
} else {
	define('STYLES', URL . '/App/Output/css/styles.css');
	define('SCRIPTS', URL . '/App/Output/js/scripts.js');
}
require_once "Config/Autoload.php";
Config\Autoload::run();
Config\Router::run(new Config\Request());





