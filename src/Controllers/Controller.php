<?php
/**
 * Controlador principal
 * @var string 
 * 
 */


 namespace App\Controllers;


class Controller {

    protected string $templateDir = __DIR__ ."/../../templates/";

    public function __construct()  {
        
        header('Content-Type: text/html, charset=utf-8'); 
    }
    public function getTemplateDir(){
        return $this->templateDir;
    }
}
