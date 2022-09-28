<?php
    define('HOST','localhost');
    define('DATABASENAME','projeto_scilink');
    define('USER','root');
    define('PASSWORD','');

 final class Conectar_banco{
    //usando PDO

    public $connection;

    function __construct(){
        $this->connectDatabase();
    }

    function connectDatabase(){
        try {
            $this->connection=new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);
        } catch (PDOException $e) {
            
            $msgErro = $e->getMessage();
            die();
        }
    }




    // private $pdo;
    // public $msgErro = "";   
    
    // public function conectar($nome, $host, $usuario, $senha) 
    // {
    //     global $pdo;
    //     global $msgErro;
    //     try 
    //     {
    //         $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
    //     } catch (PDOException $e) 
    //     {
    //         $msgErro = $e->getMessage();
    //         die();
    //     }
        
    // }


}





?>