<?php 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);

define('SITENAME', 'localhost');
define('URL', 'http://' . SITENAME); 
define('STYLES', 'App/Output/css/styles.css');
define('SCRIPTS', 'App/Output/js/scripts.js');

require_once "Config/Autoload.php";
Config\Autoload::run();
Config\Router::run(new Config\Request());





