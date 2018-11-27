<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Número</th>
            <th>Código do Produto</th>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codCarrinho = filter_input(INPUT_POST,"codCarrinho",FILTER_SANITIZE_STRING);

        $itemCarrinhoController = new ItemCarrinhoController();
        $itemCarrinhoController->listaItemCarrinho($codCarrinho);

        ?>
    </tbody>
</table>