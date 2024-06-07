<?php

class Conexao{
    private $servername = "localhost:3306";
    private $username = "root";
    private $password = "HORTETEC_115";
    private $database = "imobiliaria";
    private $connection;

    public function getConnection(){
        if(is_null($this->connection)){
            $this->connection = new POD('mysql:host='.$this->servername. '; dbname='.$this->database, $this->username, $this->password );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXPECTION);
            $this->connection->exce('set names utf8');

        }
        return $this->connection;
    }
}

?>