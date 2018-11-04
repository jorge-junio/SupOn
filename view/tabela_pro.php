<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Supermercado</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $ProdutoController = new ProdutoController();
        $ProdutoController->listaProduto();
        ?>
    </tbody>
</table>