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
                    <div class="section"></div>
                    <div class="section" style="text-align: center; font-size: 25px;">Listar Clientes</div>
                    <div class="section" style="text-align: right; font-size: 16px; "><a href="#" style="color: #00dd00;">Cadastrar <i class=" material-icons">person_add</i></a> </div>
                    <table class="highlight centered waves-teal ">
                        <thead>
                            <tr>
                                <th>Cpf</th>
                                <th>Nome</th>
                                
                                <th>Endereço</th>
                                <th>login</th>
                                <th>senha</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($dado = $con->fetch_array()) { ?>
                            <tr class="hoverable">
                                <td><?php echo $dado["cpf"]; ?></td>
                                <td><?php echo $dado["nome"]; ?></td>
                                
                                <td><?php echo $dado["endereco"]; ?></td>
                                <td><?php echo $dado["login"]; ?></td>
                                <td><?php echo $dado["senha"]; ?></td>
                                <td><a href="#"><i class="material-icons prefix">edit</i></a>    
                                    <a href="#" style="color: #dd0000;"><i class="material-icons prefix">delete</i></a></td>
                                
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
