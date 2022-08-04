<?php
/**
 * Arquivo index - arquivo principal 
 * 
 */

 declare(strict_types = 1);

 include __DIR__ .'/../vendor/autoload.php';

 $url = explode("/", $_SERVER["REQUEST_URI"],4);

 $controller = $url[1] ?? "home";
 $action = $url[2] ?? "index";
 $params = $url[3] ?? "";

//  switch($controller){
//     case "home":
//         $home = new  App\Controllers\HomeController;
//         $home->$action($params);
//     break;

//     // default:
//     //     echo "nenhum rota encontrada";
//  }


 $home = new  App\Controllers\HomeController;
 $home->$action($params);
