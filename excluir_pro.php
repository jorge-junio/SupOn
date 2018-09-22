<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
            include ("conexao.php");

            $cnpj = (INT) isset($_GET["cnpj"])?$_GET["cnpj"]: 0;

            $consulta = "DELETE FROM Supermercado WHERE cnpj = '$cnpj'";
            
            if($cnpj > 0)
                $con = $dao->query($consulta) or die($dao->error);
        ?>
    </head>
    <body>
        
        <?php
			include "menuAdm.php";
		?>    
        
        <nav style="background: #455a64;"><div class="container center"><div class="nav-wrapper">
            <div class="col s12">
                <a href="listar_fun.php" class="breadcrumb">Home</a>
                <a href="#" class="breadcrumb">Remover Produto</a>
            </div>
                </div></div></nav>
				
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="excluir_sup.php" id="for_fun">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cnpj" type="text" class="validate" name="cnpj" required="" />
                        <label class="active" for="cpf"><i class="material-icons left">verified_user</i>Código</label>
                    </div>
                </div>
                
                <div class="row">
                    <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                        Excluir<i class="material-icons right">send</i>
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
