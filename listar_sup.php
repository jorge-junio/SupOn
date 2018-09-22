<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
            include("conexao.php");

            $consulta = "SELECT cnpj, nomeF, nomeO, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco FROM Supermercado";


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
                <a href="#" class="breadcrumb">Listar Supermercados</a>
            </div>
                </div></div></nav>
       
        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">
                    <div class="section"></div>
                    <div class="section"></div>
                    <table class="highlight centered waves-teal ">
                        <thead>
                            <tr>
                                <th>CNPJ</th>
                                <th>Nome Fantasia</th>
                                <th>Nome Oficial</th>
                                <th>Endereço</th>
                                <th>Login</th>
                                <th>Senha</th>
								<th>Distancia Max. Entrega</th>
                                <th>Valor Min. de Entrega</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($dado = $con->fetch_array()) { ?>
                            <tr class="hoverable">
                                <td><?php echo $dado["cnpj"]; ?></td>
                                <td><?php echo $dado["nomeF"]; ?></td>
                                <td><?php echo $dado["nomeO"]; ?></td>
                                <td><?php echo $dado["endereco"]; ?></td>
                                <td><?php echo $dado["login"]; ?></td>
                                <td><?php echo $dado["senha"]; ?></td>
								<td><?php echo $dado["valorMaximoDistancia"]; ?></td>
                                <td><?php echo $dado["valorMinimoPreco"]; ?></td>
                                
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <div class="section"></div>
                    <div class="section"></div>
                </div>
				<div class="section"></div>
            </div>
        </div>
        
		<?php
			include "scriptsFim.php";
		?>
      
    </body>
</html>
