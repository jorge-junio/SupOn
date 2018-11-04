<!DOCTYPE html>

<html>
    <head>
        <?php
        //valida a sessão
        include "../valida.php";

        //imports
        include "includes/headTop.html";
        include "../DAO/conexao.php";
        include "../controller/ProdutoController.php";
        ?>
    </head>
    <body>

        <?php
        include "includes/menuAdm.html";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">

                    <?php
                    include "titulo_pro.php";
                    include './tabela_pro.php';
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
