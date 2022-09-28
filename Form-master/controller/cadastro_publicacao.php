<?php
class cadastro_publicacao{
    public function formularioCadastro($tit_projeto,$dti_projeto,$dtt_projeto,$res_projeto){
        global $pdo;
    
        $sql=$pdo->prepare("INSERT INTO projeto(tit_projeto,dti_projeto,dtt_projeto,res_projeto)
        VALUES (:a,:b,:c,:d)");
    
        $sql->bindValue(":a", $tit_projeto);
        $sql->bindValue(":b", $dti_projeto);
        $sql->bindValue(":c", $dtt_projeto);
        $sql->bindValue(":d", $res_projeto);
        $sql->execute();
        return true;
    
    }

}




?>