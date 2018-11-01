<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../../valida.php";
            
            include "../includes/headTop.html";
        ?>

        <?php
        include "../../conexao.php";

        //$cargo = isset($_GET["tipo"])?$_GET["tipo"]:null;
        $nomeFantasia = isset($_GET["nomeF"]) ? $_GET["nomeF"] : "";
        $nomeOficial = isset($_GET["nomeO"]) ? $_GET["nomeO"] : "";
        $cnpj = (INT) isset($_GET["cnpj"]) ? $_GET["cnpj"] : 0;
        $endereco = isset($_GET["endereco"]) ? $_GET["endereco"] : "";
        $login = isset($_GET["login"]) ? $_GET["login"] : "";
        //$login = (INT) isset($_GET["login"])?$_GET["login"]:0;
        $senha = isset($_GET["senha"]) ? $_GET["senha"] : "";
        $valorMaximoDistancia = (FLOAT) isset($_GET["valorMaximoDistancia"]) ? $_GET["valorMaximoDistancia"] : 0;
        $valorMinimoPreco = (FLOAT) isset($_GET["valorMinimoPreco"]) ? $_GET["valorMinimoPreco"] : 0;

        if ($cnpj != 0) {
            $consulta = "INSERT INTO Supermercado(cnpj, nomeO, nomeF, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco) VALUES
            ('$cnpj', '$nomeOficial', '$nomeFantasia', '$endereco', '$login', '$senha', '$valorMaximoDistancia', '$valorMinimoPreco');";
            $con = $dao->query($consulta) or die($dao->error);
        }
        ?>
    </head>
    <body>

        <?php
        include "../includes/menuAdm.html";
        ?>      

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Cadastrar Supermercados</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="get" action="cadastrar_sup.php">

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
                            <input id="cnpj" type="text" class="validate" name="cnpj" required />
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
                            <input id="login" type="text" class="validate" name="login" required>
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
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>
