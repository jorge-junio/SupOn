<!DOCTYPE html>
<html>
    <head>
        <?php

        //pega o cpf que passei via post pelo botão da tabela
        $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_STRING);

        $produto = new produto();
        $produtoController = new ProdutoController();

        $produto = $produtoController->selecionaProduto($codigo);
        ?>
    </head>
    <body>
        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h4>Excluir Produto</h4>
                <p>Deseja realmente excluir este Produto?</p>
                <form class="col s8 offset-s2" method="post" action="../controller/ProdutoController.php" id="for_fun">
                    <?php echo '<input type="hidden" name="codigo" value="'.$codigo.'"><br/>'; ?>
                    <p>Código: <?php echo $codigo; ?></p>
                    <p>Nome: <?php echo $produto->getNome(); ?></p>
                    <hr>
                    <div class="row">
                        <button class="btn waves-effect waves-light col s3 offset-s2" type="submit" name="excluir" value="excluir" >
                            SIM<i class="material-icons right">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-light col s3 offset-s2" type="submit" name="direcionaListar" value="direcionaListar" >
                            NÃO<i class="material-icons right">cancel</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        include "includes/scriptFim.html";
        ?>

    </body>
</html>	