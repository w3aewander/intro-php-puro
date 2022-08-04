<?php
/**
 * Classe controladora home
 * @var string
 * @access
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 *  
 */

 namespace App\Controllers;

 class HomeController extends Controller {

    public function __construct() {
        // header('Content-Type: text/html, charset=utf-8'); 
        // echo file_get_contents('index.html');
        // //echo "A classe foi instanciada";
 
        parent::__construct();
    }
    public function index(){
        
         $user = new \App\Models\User();

         $user->setNome("Jairo");
         $user->setIdade(24);

    
         include_once ( $this->getTemplateDir().'index.tpl');

        }

    public function contato(){
        include_once ( $this->getTemplateDir().'contato.tpl');
    }

    public function sobre(){
        include_once ( $this->getTemplateDir().'sobre.tpl');
    }
 }