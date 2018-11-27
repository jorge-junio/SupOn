<!DOCTYPE html>

<html>
    <head>
        <?php
        include "includes/headTop.html";
        include "../DAO/conexao.php";
        include_once '../controller/CarrinhoController.php';
        ?>
    </head>
    <body>

        <!-- Navbar goes here -->
        <?php
        include "./includes/menuCliente.php";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">
                    <?php
                    include "titulo_car.php";
                    include "tabela_carrinho.php";
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
