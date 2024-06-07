<?php

require_once "imovel.php"

class Apartamento extends Imovel{

    private $bloco;
    private $andar;
    private $metragem
    private $nGaragem

    public function getEndereco(){
        return $this->endereco;

    }
     public function setEndereco($endereco){
        $this->endereco = $endereco
     }

     public function setEndereco($endereco){
        $this->endereco = $endereco;

     }

     public function getNQuartos(){
        return $this->nQuartos;
     }

     public function setNQuartos($nQuartos) {
        $this->nQuartos = $nQuartos;

     }

     public function getMetragem(){
        return $this->metragem;
     }

}


?>