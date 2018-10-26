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
 
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
			
			<div class="section" style="text-align: center; font-size: 25px;">Editar Supermercados</div>
			<div class="raw" style="text-align: right; font-size: 16px; ">
				<div class="section"></div><div class="section"></div>
			</div>

            <form class="col s8 offset-s2" method="get" action="editar_sup.php" id="for_fun">
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nomeF" type="text" class="validate" name="nomeF" required="" />
                        <label><i class="material-icons left">person_pin</i>Nome Fantasia</label>
                    </div>
                </div>
				
				<div class="row">
                    <div class="input-field col s12">
                        <input id="nomeO" type="text" class="validate" name="nomeO" required="" />
                        <label><i class="material-icons left">person</i>Nome Oficial</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" type="text" class="validate" name="cnpj" required />
                        <label><i class="material-icons left">verified_user</i>CNPJ</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="endereco" type="text" class="validate" name="endereco" required />
                        <label><i class="material-icons left">location_on</i>Endereço</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="senha" type="tel" class="validate" name="senha" required>
                        <label><i class="material-icons left">vpn_key</i>Senha</label>
                    </div>
                </div>
                
				<div class="row">
                    <div class="input-field col s12">
                        <input id="valorMaximoDistancia" type="text" class="validate" name="valorMaximoDistancia" required />
                        <label><i class="material-icons left">explore</i>Distância Máxima de Entrega</label>
                    </div>
                </div>
				
				<div class="row">
                    <div class="input-field col s12">
                        <input id="valorMinimoPreco" type="text" class="validate" name="valorMinimoPreco" required />
                        <label><i class="material-icons left">work</i>Valor Mínimo de Entrega</label>
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
