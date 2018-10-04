<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
            include("conexao.php");

            $consulta = "SELECT cpf, nome, endereco, login, senha FROM Cliente";

            $con = $dao->query($consulta) or die($dao->error);
        ?>
    </head>
    <body>
        
        <?php
			include "menuAdm.php";
		?>
		
        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">
                    
                    <?php
						include "titulo_fun.php";
						include "tabela_fun.php";
					?>
					
                </div>
				<div class="section"></div>
            </div>
        </div>
        
		<?php
			include "scriptsFim.php";
		?>
      
    </body>
</html>
