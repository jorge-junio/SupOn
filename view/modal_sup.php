<!DOCTYPE html>
<html>
    <head>
        <?php
        //pega a cnpj que passei via post pelo botão da tabela
        $cnpj = filter_input(INPUT_POST, "cnpj", FILTER_SANITIZE_STRING);

        $supermercado = new supermercado();
        $supermercadoController = new SupermercadoController();

        $supermercado = $supermercadoController->selecionaSupermercado($cnpj);
        ?>
    </head>
    <body>
        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h4>Excluir Supermercado</h4>
                <p>Deseja realmente excluir este Supermercado?</p>
                <form class="col s8 offset-s2" method="post" action="../controller/SupermercadoController.php" id="for_fun">
                    <?php echo '<input type="hidden" name="cnpj" value="'.$cnpj.'"><br/>'; ?>
                    <p>CNPJ: <?php echo $cnpj; ?></p>
                    <p>Nome: <?php echo $supermercado->getNomeFantasia(); ?></p>
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

    </body>
</html>	