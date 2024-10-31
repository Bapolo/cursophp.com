<?php

class Login
{
    public $email;
    public $senha;

    public function logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso";
        else:
            echo "Os dados estão incorrectos, não foi possivel logar";
        endif;
    }
}

$logar = new Login();

$logar->email = "teste@teste.com";
$logar->senha = "123456";
$logar->logar();