<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            include "../DAO/conexao.php";
            include "../model/produto.php";
            include "../controller/ProdutoController.php";
            
            include "includes/headTop.html";

            //pega o cpf que passei via post pelo botão da tabela
            $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_STRING);

            $produto = new produto();
            $produtoController = new ProdutoController();

            $produto = $produtoController->selecionaProduto($codigo);
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

                <div class="section" style="text-align: center; font-size: 25px;">Excluir Produtos</div>
                <div class="section" style="text-align: center; font-size: 18px;">Deseja Realmente excluir o Produto de CÓDIGO '<?php echo "$codigo' e NOME '{$produto->getNome()}"; ?>' ?</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/ProdutoController.php" id="for_fun">
                    <div class="row">
                        <div class="input-field col s12">
                            <?php  
                               echo '<input type="hidden" name="codigo" value="'.$codigo.'">';
                            ?> 
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s4 offset-s1" type="submit" name="excluir" value="excluir" >
                            SIM<i class="material-icons right">check_circle</i>
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
