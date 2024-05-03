<!DOCTYPE   html>
<html lang="pt-br">

<head>
    <meta   charset="UTF-8">
    <meta   name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

</head>

<body>
  <form action ="">
    <label  for="login">Login</label>
    <input  type="text" name="Login"    id="login"></br>
    <input  for="senha1"> Senha:</label>
    <input  type="password" name="senha2"   id="senha2"></br>
    <label>Tipo de Permissão</label>
    <select name="permissiao"   id="permissao">
        <option value   = "0">**SELECIONE**</option>
        <option value="A" >Administrador</option>
        <option value="C">Comum</option>
</select>
<br/>

<input  type="submit"   value="salvar"  name="btnSalvar"    id="btnSalvar">



</body>

</html>


<?php

if(isset($_POST['btnSalvar']))

    require_once '../controller/UsuarioController.php';
    call_user_func(array('UsuarioController', 'salvar'));
    

?>