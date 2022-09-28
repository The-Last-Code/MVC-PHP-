<?php

    require_once('./configuration/conectar_banco.php');

    class ClientModel{

        private $connection;
        private $table;

        function __construct(){
            
            $this->banco = new Conectar_banco();
            $this->table='projeto';
        }

        function getAll(){
            $sqlSelect=$this->banco->connection->query("SELECT * FROM $this->table");
            $resultQuery=$sqlSelect->fetchAll();
            return $resultQuery;
        }
    }
    



?>