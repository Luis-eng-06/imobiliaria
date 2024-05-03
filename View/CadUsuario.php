<?php

require_once    'Banco.php';
require_once    '../Conexao.php';

class Usuario extends Banco{

    private $id;
    private $login;
    private $senha;
    private $permissao;

    public  function    getId(){
        return  $this->usuario;
    }

    public  function    getSenha(){
        return  $this->senha;
    }

    public  function    setSenha($senha){
        $this->senha = $senha;

    }

    protected   function    validarSenha(){
        $ok =   false;
        if($this->senha == "123456") {
            $ok = true;
        }
        return  $ok;
    }
}
?>