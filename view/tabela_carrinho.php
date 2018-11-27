<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Código da Compra</th>
            <th>Data</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        <?php
        $carrinhoController = new CarrinhoController();
        $carrinhoController->listaCarrinho();
        ?>
    </tbody>
</table>