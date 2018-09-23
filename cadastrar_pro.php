<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
            include("conexao.php");

        //$cargo = isset($_GET["tipo"])?$_GET["tipo"]:null;
        $nome = isset($_GET["nome"])?$_GET["nome"]:"";
        $marca = isset($_GET["marca"])?$_GET["marca"]:"";
        $descricao = isset($_GET["descricao"])?$_GET["descricao"]:"";
        $preco = (FLOAT) isset($_GET["valor"])?$_GET["valor"]: 0;

        if ($nome != " "){
            $consulta = "INSERT INTO Produto(nome, marca, preco, descricao) VALUES
            ('$nome', '$marca', '$preco', '$descricao');";
            $con = $dao->query($consulta) or die($dao->error);
        }
        ?>
    </head>
    <body>
        
        <?php
			include "menuAdm.php";
		?>      
        
		<nav style="background: #455a64;"><div class="container center"><div class="nav-wrapper">
            <div class="col s12">
                <a href="listar_fun.php" class="breadcrumb">Home</a>
                <a href="#" class="breadcrumb">Cadastrar Produto</a>
            </div>
                </div></div></nav>
        
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="cadastrar_pro.php">
                
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
                    <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                        Cadastrar<i class="material-icons right">send</i>
                    </button>
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
