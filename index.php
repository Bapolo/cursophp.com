<?php

    class Pessoa 
    {
        public $nome;
        public $idade;

        public function falar()
        {
            echo $this->nome." de ".$this->idade." anos de idade acabou de falar";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Jesus Pedro Bapolo";
    $pessoa->idade = 24;
    $pessoa->falar();