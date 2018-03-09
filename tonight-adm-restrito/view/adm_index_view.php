    <?php
        include_once('controller/index_controller.php');
        $controller = new ControllerIndex();
        $rs = $controller->BuscarFotos();
        
        if($rs != false){
            
            $cont = 0;
            while($cont <= 5){
                
                if($rs[$cont]->imagem == '-'){
                    $rs[$cont]->imagem = 'icones/img.png';
                
                }else{
                    $rs[$cont]->imagem = '../'.$rs[$cont]->imagem;
                }
                
                $cont++;
            }
        }

    ?>
    <span class="voltar"><a href="index.php"> &larr; Voltar </a></span>
    <h1 class="titulo_maior"> Adm imagens da pagina inicial do site </h1>
    <div id="editar_capa">
        <div class="content">
            <p class="titulo">Editar capa da pagina</p>
            <p class="excluir">
                <a href="router.php?controller=index&modo=excluir&content=capa">
                    Excluir imagem 
                </a>
            </p>
        </div>
        <form action="router.php?controller=index&modo=alterar&campo=1" method="post" enctype="multipart/form-data" class="capa">
            <img src="<?php echo $rs[0]->imagem ?>">
            
            <input type="file" name="flFoto">
            <input type="submit" class="botao">
        </form>
    
    </div>
    <div id="editar_menu">
        <div class="content">
            <p class="titulo"> Editar imagens do menu </p>
            <p class="excluir">
                <a href="router.php?controller=index&modo=excluir&content=menu">
                Excluir imagens </a>
            </p>
        </div>
        <div class="menu_index">
            <form action="router.php?controller=index&modo=alterar&campo=2" method="post" enctype="multipart/form-data" class="opt1"> 
                <span> Faça Login </span> 
                <img src="<?php echo $rs[1]->imagem ?>"> 
                
                <input type="file" name="flFoto">
                <input type="submit" value="Salvar" class="botao2">
            </form>
            <form action="router.php?controller=index&modo=alterar&campo=3" method="post" enctype="multipart/form-data" class="opt2"> 
                <span>Ir para o site </span> 
                <img src="<?php echo $rs[2]->imagem ?>"> 
                
                <input type="file" name="flFoto" class="input">
                <input type="submit" value="Salvar" class="botao2">
            </form>
            <form action="router.php?controller=index&modo=alterar&campo=4" method="post" enctype="multipart/form-data" class="opt3"> 
                <span>Homens </span> 
                <img src="<?php echo $rs[3]->imagem ?>"> 
            
                <input type="file" name="flFoto" class="input">
                <input type="submit" value="Salvar" class="botao2">
            </form>
            <form action="router.php?controller=index&modo=alterar&campo=5" method="post" enctype="multipart/form-data" class="opt4"> 
                <span>Mulheres </span> 
                <img src="<?php echo $rs[4]->imagem ?>"> 
            
                <input type="file" name="flFoto" class="input">
                <input type="submit" value="Salvar" class="botao2">
            </form>
            <form action="router.php?controller=index&modo=alterar&campo=6" method="post" enctype="multipart/form-data" class="opt5"> 
                <span>Seja um acompanhante </span> 
                <img src="<?php echo $rs[5]->imagem ?>"> 
            
                <input type="file" name="flFoto" class="input">
                <input type="submit" value="Salvar" class="botao2">
            </form>
        </div>
        
    </div>