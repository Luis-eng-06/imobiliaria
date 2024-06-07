<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>Imóvel</title>
</head>
<body>
    <form action="" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login"><br/>
        <label for="senha1">Senha:</label>
        <input type="password" name="senha1" id="senha1"><br/>
        <label>Confirmação de Senha</label>
        <input type="password" name="senha2" id="senha2"><br/>
        <label>Tipo de Permissão:</label>
        <select name="permissao" id="permissao">
            <option value="0">Selecionar</option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select>
        <br/>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
    </form>
    <?php
    if(isset($_POST['btnSalvar'])){

        require_once 'controller/imovel.php';
        call_user_func(array('imovel','salvar'));

    }

    ?>