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
        <div id="openModalQnt" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h5>Adicionar ao Carrinho</h5>
                <form class="col s8 offset-s2" method="post" action="../controller/ItemCarrinhoController.php" id="for_fun">
                    <?php echo '<input type="hidden" name="codigo" value="'.$codigo.'"><br/>'; ?>
                    <?php echo '<input type="hidden" name="preco" value="'.$produto->getValor().'"><br/>'; ?>

                    <p class="col offset-s1">Produto: <?php echo $produto->getNome(); ?></p>
                    
                    <div class="input-field col s10 offset-s1">
                                <input id="first_name" type="text" name="quantidadePro">
                                <label for="first_name">Quantidade</label>
                            </div>
                    
                    <div class="section"></div>
                    <div class="row">
                        <button class="btn waves-effect waves-light col s3 offset-s2" type="submit" name="adicionaAoCarrinho" value="adicionaAoCarrinho" title="Adicionar" ><i class="material-icons">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-red col s3 offset-s2" type="submit" name="direcionaListar" value="direcionaListar" title="Cancelar" ><i class="material-icons">cancel</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>	