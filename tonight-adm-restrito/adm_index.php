<!DOCTYPE html>
<html>
	<head>
		<title> Tonight - ADM da página index </title>
		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="pt-br" />
		<meta name="viewport" content="initial-scale=1" />
		<meta name="author" content="Larissa AP" />
		<link rel="stylesheet" type="text/css" href="css/estilo_padrao.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo_adm_index.css" />
	</head>
	<body>
		<div id="principal">
            
            <!-- Cabecalho -->
            <?php include_once('view/header.php'); ?>
            
            <!-- conteudo -->
            <section id="conteudo">
                <?php include_once('view/adm_index_view.php'); ?>
            </section>
            
            <!-- rodape -->
            <?php include_once('view/footer.php'); ?>
		</div>
	</body>
</html>