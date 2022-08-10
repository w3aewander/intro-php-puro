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
        $data = json_decode($request->getBody());
        die(var_dump($data));
        $addr = $data["email"]; //("wander.silva@gmail.com");
        $name = $data["name"]; //Wanderlei Silva do Carmo";
        $subject = $data["subject"] . " - " . $data['celular']; //'Testando o assunto';
        $body = $data["message"]; //'<h1>Apenas um teste</h1>';
        $altbody = 'Este texto aparecerá apenas se não puder ser enviado em html.';

        $mailer = new Mailer();
        $mailer->sendMail($addr, $name, $subject, $body, $altbody);
    }

}
