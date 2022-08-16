<?php
/**
 * Sendmail Controller
 * @autor Wanderlei Silva do Carmo <Wander.silva@gmail.com>
 *
 */

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use \App\Libs\WSMailer as Mailer;

class SendMailController 
{

    public function sendMail(Request $request, Response $response)
    {
     
        //Testando o envio de e-mail
        $data = $request->getParsedBody();
        //die(var_dump($data));
     
        $addr = $data["email"]; //("wander.silva@gmail.com");
        $name = $data["nome"]; //Wanderlei Silva do Carmo";
        $subject = $data["assunto"] . " - " . $data['celular']; //'Testando o assunto';
        $body = $data["mensagem"]; //'<h1>Apenas um teste</h1>';
        $altbody = 'Este texto aparecerá apenas se não puder ser enviado em html.';

        //die(var_dump($body));

        $mailer = new Mailer();
        $mailer->sendMail($addr, $name, $subject, $body, $altbody);

        //$response->getBody()->write('<h1>Feito</h1>');
      
        $ret = ['success'=>true, 'message'=>'feito', 'data'=>[] ];
        
        
        return $response->withJson($ret, 201);
    }

}
