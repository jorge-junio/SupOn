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
        include "../view/includes/menuAdm.php";
        ?>

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">

                <div class="section"></div>
                <div class="section" style="text-align: center; font-size: 25px;">Buscar Supermercados</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <?php
                include "./form_buscar_adm.php";
                include "./listar_busca_sup.php";
                ?>
            </div>
            <div class="section"></div>
            <div class="section"></div>
        </div>

        <?php
        include_once "includes/scriptFim.html";
        ?>

    </body>
</html>
