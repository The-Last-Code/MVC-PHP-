<?php
    require_once '../model/conectar_banco.php';
    require_once '../model/cadastro_publicacao.php';
    $u = new conectar_banco;
    $j=new cadastro_publicacao;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="./syle2.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>

    <form method="POST" action="form.php">
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Criar Publicação</h2>

				<input type="text" class="field" placeholder="Título" name="tit_projeto">
                <label for="">Data de Início</label>
				<input type="date" class="field" placeholder="Data de Início"name="dti_projeto">
                <label for="">Data Final</label>
				<input type="date" class="field" placeholder="Data de Termino" name="dtt_projeto">

				<textarea style="resize: none" placeholder="Mensagem" class="field" name="res_projeto"></textarea>
				<input type="submit" name="submit"> 
			</div>
		</div>
	</div>
    </form>


<?php
    if(isset($_POST['submit']))
    {
        $tit_projeto = addslashes($_POST['tit_projeto']);
        $dti_projeto = addslashes($_POST['dti_projeto']);
        $dtt_projeto = addslashes($_POST['dtt_projeto']);
        $res_projeto = addslashes($_POST['res_projeto']);

        $u->conectar("projeto_scilink", "localhost", "root", "");
      
        if($j->formularioCadastro($tit_projeto, $dti_projeto, $dtt_projeto, $res_projeto))
        {
            ?>
                <div class="msg-sucesso">
                    Cadastrado com sucesso! Acesse para entrar!
                </div>
            <?php
        }
    }
?>

</body>
</html>
