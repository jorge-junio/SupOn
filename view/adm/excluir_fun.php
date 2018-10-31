<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../../valida.php";
            
            include "../includes/headTop.html";
        ?>

        <?php
        include "../../conexao.php";

        $cpf = (INT) isset($_GET["cpf"]) ? $_GET["cpf"] : 0;

        $consulta = "DELETE FROM Cliente WHERE cpf = '$cpf'";

        if ($cpf > 0)
            $con = $dao->query($consulta) or die($dao->error);
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

                <div class="section" style="text-align: center; font-size: 25px;">Excluir Clientes</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <div class="section"></div>
                <form class="col s8 offset-s2" method="get" action="excluir_fun.php" id="for_fun">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cpf" type="text" class="validate" name="cpf" required="" />
                            <label class="active" for="cpf"><i class="material-icons left">verified_user</i>CPF</label>
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
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>
