<!DOCTYPE html>
<html>
    <head>
        <?php
        include "../includes/headTop.html";
        include "../../conexao.php";
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
                <?php
                include "./titulo_busca.php";
                include "./form_buscar_adm.php";
                include "./listar_busca_adm.php";
                ?>
            </div>
            <div class="section"></div>
            <div class="section"></div>
        </div>

        <?php
                include_once "../includes/scriptFim.html";
        ?>

    </body>
</html>
