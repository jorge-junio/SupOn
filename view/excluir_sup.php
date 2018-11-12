<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            include "../DAO/conexao.php";
            include "../model/supermercado.php";
            include "../controller/SupermercadoController.php";
            
            include "includes/headTop.html";

            //pega a cnpj que passei via post pelo botão da tabela
            $cnpj = filter_input(INPUT_POST, "cnpj", FILTER_SANITIZE_STRING);

            $supermercado = new supermercado();
            $supermercadoController = new SupermercadoController();


            $supermercado = $supermercadoController->selecionaSupermercado($cnpj);
        ?>
    </head>
    <body>

        <?php
            include "../menu.php";
        ?>    

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Excluir Supermercados</div>
                <div class="section" style="text-align: center; font-size: 18px;">Deseja Realmente excluir o Supermercado de CNPJ '<?php echo "$cnpj' e NOME OFICIAL '{$supermercado->getNomeOficial()}"; ?>'</div>

                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/SupermercadoController.php" id="for_fun">
                    <div class="row">
                        <div class="input-field col s12">
                            <?php  
                               echo '<input type="hidden" name="cnpj" value="'.$cnpj.'">';
                            ?> 
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s4 offset-s1" type="submit" name="excluir" value="excluir">
                            Excluir<i class="material-icons right">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-light col s4 offset-s2" type="submit" name="direcionaListar" value="direcionaListar" >
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
