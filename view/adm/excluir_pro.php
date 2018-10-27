<!DOCTYPE html>

<html>
    <head>
        <?php
        include "../includes/headTop.html";
        ?>

        <?php
        include "../../conexao.php";

        $codigo = (INT) isset($_GET["codigo"]) ? $_GET["codigo"] : 0;

        $consulta = "DELETE FROM Produto WHERE codigo = '$codigo'";

        if ($codigo > 0)
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

                <div class="section" style="text-align: center; font-size: 25px;">Excluir Produtos</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="get" action="excluir_pro.php" id="for_fun">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cnpj" type="text" class="validate" name="codigo" required="" />
                            <label class="active" for="codigo"><i class="material-icons left">verified_user</i>Código</label>
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
