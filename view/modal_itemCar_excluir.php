<!DOCTYPE html>
<html>
    <head>
        <?php
            $posicaoVetor = filter_input(INPUT_POST,"posicaoVetor",FILTER_SANITIZE_STRING);

        ?>
    </head>
    <body>
        <div id="openModalExc" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h5>Tem certeza que deseja EXCLUIR esse item?</h5>
                <form class="col s8 offset-s2" method="post" action="../controller/ItemCarrinhoController.php" id="for_fun">
                    <?php echo '<input type="hidden" name="posicaoVetor" value="'.$posicaoVetor.'"><br/>'; ?>
                    <div class="section"></div>
                    <div class="row">
                        <button class="btn waves-effect waves-light col s3 offset-s2" type="submit" name="excluir" value="excluir" ><i class="material-icons">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-red col s3 offset-s2" type="submit" name="direcionaHome" value="direcionaHome" ><i class="material-icons">cancel</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html> 