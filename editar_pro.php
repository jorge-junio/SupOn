<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
        include ("conexao.php");
	    
	    $nome = isset($_GET["nome"])?$_GET["nome"]:"";
        $marca = isset($_GET["marca"])?$_GET["marca"]:"";
        $descricao = isset($_GET["descricao"])?$_GET["descricao"]:"";
        $preco = (FLOAT) isset($_GET["valor"])?$_GET["valor"]: 0;

        $consulta = "UPDATE Produto SET nome = '$nome', marca = '$marca', descricao = '$descricao', 
            preco = '$preco' WHERE nome = '$nome' ";

        if ($nome != " ")  {
        $con = $dao->query($consulta) or die($dao->error);
        }
        ?>
    </head>
    <body>
        
        <?php
			include "menuAdm.php";
		?>
 
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
			
			<div class="section" style="text-align: center; font-size: 25px;">Editar Produtos</div>
			<div class="raw" style="text-align: right; font-size: 16px; ">
				<div class="section"></div><div class="section"></div>
			</div>

            <form class="col s8 offset-s2" method="get" action="editar_pro.php">
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nome" type="text" class="validate" name="nome" required="" />
                        <label><i class="material-icons left">shopping_basket</i>Nome</label>
                    </div>
                </div>
				
				<div class="row">
                    <div class="input-field col s12">
                        <input id="marca" type="text" class="validate" name="marca" required="" />
                        <label><i class="material-icons left">receipt</i>Marca</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="descricao" type="text" class="validate" name="descricao" required />
                        <label><i class="material-icons left">insert_comment</i>Descrição</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="valor" type="text" class="validate" name="valor" required />
                        <label><i class="material-icons left">monetization_on</i>Valor</label>
                    </div>
                </div>
                
                
				
                <div class="row">
                    <button class="btn waves-effect waves-light col s4 offset-s1" type="submit" name="action" >
                        Confirmar<i class="material-icons right">done</i>
                    </button>
                    
                        <a href="listar_fun.php" class="btn waves-effect waves-light col s4 offset-s2" >
                            Voltar<i class="material-icons right">close</i>
                        </a>
                </div>
                
                <div class="section"></div>

            </form>
			
            <div class="section"></div>
        </div>
        <div class="section"></div>
		<div class="section"></div>
    </div>
        
		<?php
			include "scriptsFim.php";
		?>
        
    </body>
</html>
