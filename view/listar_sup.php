<!DOCTYPE html>

<html>
    <head>
        <?php
            include "includes/headTop.html";
            include "../DAO/conexao.php";
            include_once "../controller/SupermercadoController.php";
        ?>
    </head>
    <body>

        <?php
        include "../menu.php";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <?php include "includes/alert.php"; ?>
                <div class="container">

                    <?php
                        include "titulo_sup.php";
                        include './tabela_sup.php';
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
