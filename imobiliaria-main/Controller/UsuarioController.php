<?php

require_once '../model/Usuario.php';

class   UsuarioController{

    public  static  function   salvar()
    {
        $usuario    = New Usuario;

        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha1']);
        $usuario->setPermissao($_POST['permissao']);

        $usuario->save();


    }
}
?>
