<?php 
    include_once('controller/session.php'); 
  
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Tonight Administração - HOME </title>
		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="pt-br" />
		<meta name="viewport" content="initial-scale=1" />
		<meta name="author" content="Larissa AP" />
        <link rel="icon" type="icone/png" href="../imagens/logo.png">
		<link rel="stylesheet" type="text/css" href="css/estilo_padrao.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo_planos.css" />
        
	</head>
	<body>
		<div id="principal">
            
            <!-- Cabecalho -->
            <?php include_once('view/header.php'); ?>
            
            <!-- conteudo -->
            <section id="conteudo">
                <?php include_once('controller/planos_controller.php'); ?>
                <?php include_once('view/adm_planos_view.php'); ?>
            </section>
            
            <!-- rodape -->
            <?php include_once('view/footer.php'); ?>
		</div>
	</body>
</html>