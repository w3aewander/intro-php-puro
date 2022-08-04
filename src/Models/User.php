<?php
/**
 * Classe model...
 */

namespace App\Models;


 class User {

    private string $nome;
    private string $idade;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;

    }

    public function setIdade($idade): void {
  
         $this->setIdade = $idade;

    }

    public function getIdade(): string {

        return $this->idade;
    }
 }
