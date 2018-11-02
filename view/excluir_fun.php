<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            
            include "includes/headTop.html";
        ?>

        <?php
        include "../conexao.php";

        //pega o cpf que passei via post pelo botão da tabela
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        ?>
    </head>
    <body>

        <?php
        include "includes/menuAdm.html";
        ?>

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Excluir Clientes</div>
                <div class="section" style="text-align: center; font-size: 18px;">Deseja Realmente excluir o Cliente de CPF '<?php echo "$cpf"; ?>'</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <div class="section"></div>
                <form class="col s8 offset-s2" method="post" action="../controller/ClienteController.php" id="for_fun">
                    <div class="row">
                        <div class="input-field col s12">
                            <?php  
                               echo '<input type="hidden" name="cpf" value="'.$cpf.'">';
                            ?> 
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="excluir" value="excluir" >
                            SIM<i class="material-icons right">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="direcionaListar" value="direcionaListar" >
                            NÃO<i class="material-icons right">cancel</i>
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
        include "includes/scriptFim.html";
        ?>

    </body>
</html>