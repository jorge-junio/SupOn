<!DOCTYPE html>

<html>
    <head>
        <?php
        include "includes/headTop.html";
        include "../DAO/conexao.php";
        include "../controller/ClienteController.php";
        include "../model/produto.php";
        ?>
    </head>
    <body>

        <?php
        /*
        for ($i=0; $i <= 3 ; $i++) { 
            echo "---> codigo = ".$_SESSION["codigoProduto"][$i];
            echo " ,quantidade = ".$_SESSION["qtdProduto"][$i];
            echo " ,preco = ".$_SESSION["precoProduto"][$i];
        }*/
        include "../menu.php";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <?php include "includes/alert.php"; ?>
                <div class="container">


                    <div class="section"></div>
                    <div class="section" style="text-align: center; font-size: 25px;">SUPON - Supermercado On-line</div>
                    <div class="raw" style="text-align: right; font-size: 16px; ">
                        <div class="section"></div><div class="section"></div>
                    </div>

                    <?php
                    include './home_card.php';
                    ?>

                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "includes/scriptFim.html";
        ?>

    </body>
</html>
