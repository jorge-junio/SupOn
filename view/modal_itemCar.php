<!DOCTYPE html>
<html>
    <head>
        <?php
            $posicaoVetor = filter_input(INPUT_POST,"posicaoVetor",FILTER_SANITIZE_STRING);

        ?>
    </head>
    <body>
        <div id="openModalEdt" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h5>Editar Quantidade</h5>
                <form class="col s8 offset-s2" method="post" action="../controller/ItemCarrinhoController.php" id="for_fun">
                    <?php echo '<input type="hidden" name="posicaoVetor" value="'.$posicaoVetor.'"><br/>'; ?>
                    <p class="col offset-s1">Produto: tal</p>
                    
                    <div class="input-field col s10 offset-s1">
                                <input id="first_name" type="text" name="novaQuantidade">
                                <label for="first_name">Quantidade</label>
                            </div>
                    
                    <div class="section"></div>
                    <div class="row">
                        <button class="btn waves-effect waves-light col s3 offset-s2" type="submit" name="editar" value="editar" title="Confirmar" ><i class="material-icons">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-red col s3 offset-s2" type="submit" name="direcionaCar" value="direcionaCar" title="Cancelar" ><i class="material-icons">cancel</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html> 