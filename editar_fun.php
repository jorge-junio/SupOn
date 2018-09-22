<!DOCTYPE html>

<html>
    <head>
        <?php
			include "headTop.html";
		?>
		
        <?php
        include ("conexao.php");

        $nome = isset($_GET["nome"])?$_GET["nome"]:"";
        $cpf = (INT) isset($_GET["cpf"])?$_GET["cpf"]: 0;
        $endereco = isset($_GET["endereco"])?$_GET["endereco"]:"";
        $senha = isset($_GET["senha"])?$_GET["senha"]:"";

        $consulta = "UPDATE Cliente SET cpf = '$cpf', nome = '$nome', 
            endereco = '$endereco', senha = '$senha' WHERE cpf = '$cpf' ";

        if($cpf != 0)
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
                <a href="#" class="breadcrumb">Editar Cliente</a>
            </div>
                </div></div></nav>
        
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="editar_fun.php" id="for_fun">
                
                <!--<div class="row">
                    <div class="input-field col s12">
                        <select id="tipo" name="tipo" required="">
                            <option value="" disabled selected>Opções:</option>
                            <option value="1">Administrador</option>
                            <option value="2">Funcionário</option>
                        </select>
                        <label for="tipo"><i class="material-icons left">supervisor_account</i>Tipo:</label>
                    </div>
                </div>-->
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" type="text" class="validate" name="cpf" required="" />
                        <label class="active" for="cpf"><i class="material-icons left">verified_user</i>CPF</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="nome" type="text" class="validate" name="nome" />
                        <label class="active" for="nome"><i class="material-icons left">person_pin</i>Nome</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input  id="endereco" type="text" class="validate" name="endereco" />
                        <label class="active" for="endereco"><i class="material-icons left">location_on</i>Endereço</label>
                    </div>
                </div>
                
                <!--<div class="row">
                    <div class="input-field col s12">
                        <input id="salario" type="text" class="validate" name="salario" />
                        <label class="active" for="salario"><i class="material-icons left">work</i>Salário</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label class="active" for="email"><i class="material-icons left">email</i>Email</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="telefone" type="tel" class="validate" name="telefone">
                        <label class="active" for="telefone"><i class="material-icons left">phone</i>Telefone</label>
                    </div>
                </div>-->

                <div class="row">
                    <div class="input-field col s12">
                        <input id="senha" type="password" class="validate" name="senha">
                        <label class="active" for="senha"><i class="material-icons left">lock</i>Senha</label>
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
