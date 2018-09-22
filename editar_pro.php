<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
        include ("conexao.php");
               
        $nomeF = isset($_GET["nomeF"])?$_GET["nomeF"]:"";
        $nomeO = isset($_GET["nomeO"])?$_GET["nomeO"]:"";
        $cnpj = (INT) isset($_GET["cnpj"])?$_GET["cnpj"]: 0;
        $endereco = isset($_GET["endereco"])?$_GET["endereco"]:"";
        $valorMaximoDistancia = isset($_GET["valorMaximoDistancia"])?$_GET["valorMaximoDistancia"]:"";
        $valorMinimoPreco = isset($_GET["valorMinimoPreco"])?$_GET["valorMinimoPreco"]:"";
        $senha = isset($_GET["senha"])?$_GET["senha"]:"";

        $consulta = "UPDATE Supermercado SET cnpj = '$cnpj', nomeF = '$nomeF', nomeO = '$nomeO', 
            endereco = '$endereco', valorMaximoDistancia = '$valorMaximoDistancia',valorMinimoPreco = '$valorMinimoPreco', senha = '$senha' WHERE cnpj = '$cnpj' ";

        if ($cnpj != 0) {
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
                <a href="#" class="breadcrumb">Editar Produto</a>
            </div>
                </div></div></nav>
				
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="cadastrar_sup.php">
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nomeF" type="text" class="validate" name="nomeF" required="" />
                        <label><i class="material-icons left">shopping_basket</i>Nome</label>
                    </div>
                </div>
				
				<div class="row">
                    <div class="input-field col s12">
                        <input id="nomeO" type="text" class="validate" name="nomeO" required="" />
                        <label><i class="material-icons left">receipt</i>Marca</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cnpj" type="text" class="validate" name="cnpj" required />
                        <label><i class="material-icons left">insert_comment</i>Descrição</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="endereco" type="text" class="validate" name="endereco" required />
                        <label><i class="material-icons left">monetization_on</i>Valor</label>
                    </div>
                </div>
                
                
				
                <div class="row">
                    <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                        Atualizar<i class="material-icons right">send</i>
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
