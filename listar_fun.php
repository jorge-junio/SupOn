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
		
       <nav style="background: #455a64;"><div class="container center"><div class="nav-wrapper">
            <div class="col s12">
                <a href="listar_fun.php" class="breadcrumb">Home</a>
                <a href="excluir_fun.php" class="breadcrumb">Listar Cliente</a>
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
                                <th>Cpf</th>
                                <th>Nome</th>
                                
                                <th>Endereço</th>
                                <th>login</th>
                                <th>senha</th>
                                
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
		include "footerAdm.php";
	?> 
      
    </body>
</html>
