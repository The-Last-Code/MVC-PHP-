<?php 
class login{

    public function logar($cpf_cientista, $snh_cientista){
        global $pdo;
    
        /* verifica se o email e senha ja estao encontrados */
        $sql = $pdo->prepare("SELECT *FROM cientista WHERE
        cpf_cientista = :b AND snh_cientista = :g");
        $sql->bindValue(":b", $cpf_cientista);
        $sql->bindValue(":g", $snh_cientista);
       
    
        $sql->execute();
    
        if($sql->rowCount() > 0)
        { 
    
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_cientista'] = $dado['id_cientista'];
    
            return true; /* cadastrado c/ sucesso */
        }
        else
        {
            return false; /* n conseguiu logar */
        }
    
    }
    public function comparar($cpf_cientista, $snh_cientista)
    {
        global $pdo;
    
        /* verifica se o email e senha ja estao encontrados */
        $sql = $pdo->prepare("SELECT *FROM cientista WHERE
        cpf_cientista = :b AND snh_cientista = :g");
        $sql->bindValue(":b", $cpf_cientista);
        $sql->bindValue(":g", $snh_cientista);
    
        $sql->execute();
    
        if($sql->rowCount() > 0)
        { 
            /* entrar no sistema */
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_cientista'] = $dado['id_cientista'];
            return true; /* cadastrado c/ sucesso */
        }
        else
        {
            return false; /* n conseguiu logar */
        }
    
    }
}

?>