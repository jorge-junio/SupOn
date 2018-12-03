<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <?php 
                if ($_SESSION['permissao'] == "cli") {
                    echo "<th>Código da Compra</th>";
                    echo "<th>Data</th>";
                    echo "<th></th>";
                }else if ($_SESSION['permissao'] == "sup") {
                    echo "<th>Código da Compra</th>";
                    echo "<th>Data</th>";
                    echo "<th>Cpf do Cliente</th>";
                    echo "<th></th>";
                }

            ?>
            

        </tr>
    </thead>
    <tbody>
        <?php
        $carrinhoController = new CarrinhoController();
        $carrinhoController->listaCarrinho();
        ?>
    </tbody>
</table>