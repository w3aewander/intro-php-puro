<?php
/**
 * API para acesso as funções comuns do sistema
 * exportáveis para outras platarforma
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 */

 namespace App\API;

 use Psr\Http\Message\ResponseInterface as Response;
 use Psr\Http\Message\ServerRequestInterface as Request;

 class ApiController extends Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index(Request $request, Response $response, $args): Response {   

        $dados = json_encode(["success"=>true,
                     "error"=>false, 
                     "data"=>[], 
                     "message"=>"Retorna da API"]);


        //$response->headers->set('Content-Type', 'application/json');
        $response->getBody()->write($dados);
        return $response;
    }
 }