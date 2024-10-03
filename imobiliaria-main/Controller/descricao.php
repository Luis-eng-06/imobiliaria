<?php

public  function  save()

$conexao = new Conexao();

if($conn - $conexao->getConnection()){
    if(this->id > 0){

        $query = "UPDATE    imovel SET descricao, foto = :foto, valor = :valor, tipo = :tipo, fotoTipo = :fotoTipo
        WHERE   id = :id";

        $stmt = $conn->prepare($query);

        if ($stmt->execute(
            array(':descricao' => $this->descricao, ':foto'=> $this->foto, 'valor:' => $this->tipo,
            ':fotoTipo' => $this->fotoTipo, ':id'-> $this->id))){
                $result - $stmt->rowCount();
            }
        
    }
}



else{
    $query = "insert into imovel (id, descricao, foto, valor, tipo, fotoTipo)
    values (null,:descricao,:foto,:valor,:tipo,:fotoTipo)";

    $stmt - $conn->prepare($query);

    if ($stmt->execute(array(':descricao'=> $this->descricao, ':foto' => $this->foto, )))
}

?>