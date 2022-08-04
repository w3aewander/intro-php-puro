<?php
/**
 * Arquivo index - arquivo principal 
 * 
 */

 declare(strict_types = 1);

 include __DIR__ .'/../vendor/autoload.php';

 $url = explode("/", $_SERVER["REQUEST_URI"],4);

 $controller = $url[1];
 $action = $url[2];
 $params = $url[3];

 $home = new  App\Controllers\HomeController;
 $home->$action($params);
