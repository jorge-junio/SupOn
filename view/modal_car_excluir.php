<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div id="openModalExcCar" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h5>Excluir Carrinho</h5>
                <p>Tem certeza que deseja EXCLUIR esse Carrinho?</p>
                <form class="col s8 offset-s2" method="post" action="../controller/ItemCarrinhoController.php" id="for_fun">
                    <div class="section"></div>
                    <div class="row">
                        <button class="btn waves-effect waves-light col s3 offset-s2" type="submit" name="cancelarCompra" value="cancelarCompra" title="Confirmar Exclusão" ><i class="material-icons">check_circle</i>
                        </button>

                        <button class="btn waves-effect waves-red col s3 offset-s2" type="submit" name="direcionaCar" value="direcionaCar" title="Cancelar Exclusão" ><i class="material-icons">cancel</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html> 