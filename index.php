<?php

class Login
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha; 
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

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

$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->logar();