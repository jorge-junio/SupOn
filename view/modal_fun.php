<!DOCTYPE html>
<html>
    <head>
        <?php
        //pega o cpf que passei via post pelo botão da tabela
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);

        $cliente = new cliente();
        $clienteController = new ClienteController();

        $cliente = $clienteController->selecionaCliente($cpf);
        ?>
    </head>
    <body>
        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Fechar" class="closeModal"></a>
                <!-- Conteúdo do Modal -->
                <h4>Excluir Cliente</h4>
                <p>Deseja realmente excluir este Cliente?</p>
                <form class="col s8 offset-s2" method="post" action="../controller/ClienteController.php" id="for_fun">
                    <?php echo '<input type="hidden" name="cpf" value="'.$cpf.'"><br/>'; ?>
                    <p>CPF: <?php echo $cpf; ?></p>
                    <p>Nome: <?php echo $cliente->getNome(); ?></p>
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