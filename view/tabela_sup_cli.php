<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Nome Fantasia</th>
            <th>Nome Oficial</th>
            <th>Endereço</th>
            <th>Distancia Max. Entrega</th>
            <th>Valor Min. de Entrega</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        <?php
        $SupermercadoController = new SupermercadoController();
        $SupermercadoController->listaBusca($b_nome);
        ?>
    </tbody>
</table>