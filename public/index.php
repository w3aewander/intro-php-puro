<?php
/**
 * Arquivo index - arquivo principal 
 * 
 */

declare(strict_types = 1);

// Habilitando a depuração apenas no ambiente de testes.
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL|E_WARNING);



include __DIR__ .'/../vendor/autoload.php';

use \App\Libs\WSMailer as Mailer;

//$mailer = new Mailer();

//$dotenv = new \BalintHorvath\DotEnv\DotEnv(APP_DIR);
$myenv = __DIR__ .'/../.env';

$loader = ( new josegonzalez\Dotenv\Loader($myenv) )
     ->parse()
     ->toEnv();

//die(var_dump( $loader['environment']["SMTP_SERVER_HOST"] ));
//$loader->parse->toEnv();

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->get('/', [\App\Controllers\HomeController::class, 'index']);

$app->get('/home/index', [\App\Controllers\HomeController::class, 'index']);
$app->get('/home/contato', [\App\Controllers\HomeController::class, 'home']);
$app->get('/home/sobre', [\App\Controllers\HomeController::class, 'contato']);

// API
$app->get('/api/v1/index', [\App\API\ApiController::class, 'index']);

// Enviar email
$app->post('/sendmail', [\App\Controllers\SendMailController::class, 'sendMail']);

$app->run();