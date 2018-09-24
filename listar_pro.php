<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
            include("conexao.php");

            $consulta = "SELECT codigo, nome, marca, preco, descricao FROM Produto";
            //lembrar de por o atributo cnpj depois que fazer a sessão

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
                <a href="#" class="breadcrumb">Listar Produtos</a>
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
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Marca</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Supermercado</th>
								
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($dado = $con->fetch_array()) { ?>
                            <tr class="hoverable">
                                <td><?php echo $dado["codigo"]; ?></td>
                                <td><?php echo $dado["nome"]; ?></td>
                                <td><?php echo $dado["marca"]; ?></td>
                                <td><?php echo $dado["descricao"]; ?></td>
                                <td><?php echo $dado["preco"]; ?></td>
								
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
