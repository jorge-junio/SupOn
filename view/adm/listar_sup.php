<!DOCTYPE html>

<html>
    <head>
        <?php
        include "../includes/headTop.html";
        ?>

        <?php
        include "../../conexao.php";

        $consulta = "SELECT cnpj, nomeF, nomeO, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco FROM Supermercado";


        $con = $dao->query($consulta) or die($dao->error);
        ?>
    </head>
    <body>

        <?php
        include "../includes/menuAdm.html";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">

                    <?php
                    include "titulo_sup.php";
                    include "tabela_sup.php";
                    ?>

                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>
