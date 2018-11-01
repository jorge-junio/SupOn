<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Cpf</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Login</th>
            <th>Senha</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $ClienteController = new ClienteController();
        $ClienteController->listaCliente();
        ?>
    </tbody>
</table>