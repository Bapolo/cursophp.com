<?php

    class Pessoa 
    {
        public $nome;
        public $idade;

        public function falar()
        {
            echo "Falou";
        }
    }

    $jesus = new Pessoa();

    var_dump($jesus);