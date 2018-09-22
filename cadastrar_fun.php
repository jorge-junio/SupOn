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
        $cpf = (INT) isset($_GET["cpf"])?$_GET["cpf"]: 0;
        $endereco = isset($_GET["endereco"])?$_GET["endereco"]:"";
        $login = isset($_GET["login"])?$_GET["login"]:"";
        //$login = (INT) isset($_GET["login"])?$_GET["login"]:0;
        $senha = isset($_GET["senha"])?$_GET["senha"]:"";

        if ($cpf != 0){
            $consulta = "INSERT INTO Cliente(cpf, nome, endereco, login, senha) VALUES
            ('$cpf', '$nome', '$endereco', '$login', '$senha')";
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
                <a href="#" class="breadcrumb">Cadastrar Cliente</a>
            </div>
                </div></div></nav>
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="cadastrar_fun.php">
                
                <!--<div class="row">
                    <div class="input-field col s12">
                        <select id="tipo" name="tipo" required />
                            <option value="" disabled selected>Opções:</option>
                            <option value="0">Funcionário</option>
                            <option value="1">Administrador</option>
                        </select>
                        <label><i class="material-icons left">supervisor_account</i>Tipo:</label>
                    </div>
                </div>-->
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nome" type="text" class="validate" name="nome" required="" />
                        <label><i class="material-icons left">person_pin</i>Nome</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" type="text" class="validate" name="cpf" required />
                        <label><i class="material-icons left">verified_user</i>CPF</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="endereco" type="text" class="validate" name="endereco" required />
                        <label><i class="material-icons left">location_on</i>Endereço</label>
                    </div>
                </div>
                
                <!--<div class="row">
                    <div class="input-field col s12">
                        <input id="salario" type="text" class="validate" name="salario" required />
                        <label><i class="material-icons left">work</i>Salário</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email" required>
                        <label><i class="material-icons left">email</i>Email</label>
                    </div>
                </div>-->
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="telefone" type="text" class="validate" name="login" required>
                        <label><i class="material-icons left">account_box</i>login</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="senha" type="tel" class="validate" name="senha" required>
                        <label><i class="material-icons left">vpn_key</i>Senha</label>
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
