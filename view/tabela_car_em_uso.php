<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Código do Produto</th>
            <th>Quantidade</th>
            <th>Preço da Unidade (R$)</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $itemCarrinhoController = new ItemCarrinhoController();
        $itemCarrinhoController->listarProdutosNoCarrinho();
        ?>
    </tbody>
</table>



        