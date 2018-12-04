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
        include "./includes/menuSup.php";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">
                    <div class="section"></div>
                    <div class="section" style="text-align: center; font-size: 25px;">Listar Pedidos Requisitados</div>
                        <div class="section"></div><div class="section"></div>
                    </div>
                    <?php
                        include "tabela_carrinho.php";
                    ?>
                    <div class="section"></div>
                </div>
                <div class="section"></div>
                
            </div>
        </div>

        <?php
        include "includes/scriptFim.html";
        ?>

    </body>
</html>
