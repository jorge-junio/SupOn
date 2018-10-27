<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Cpf</th>
            <th>Nome</th>

            <th>Endereço</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($dado = $con->fetch_array()) { ?>
            <tr class="hoverable">
                <td><?php echo $dado["cpf"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>

                <td><?php echo $dado["endereco"]; ?></td>
                <td><?php echo $dado["login"]; ?></td>
                <td><?php echo $dado["senha"]; ?></td>
                <td><a href="editar_fun.php"><i class="material-icons prefix" title="Editar Cliente">edit</i></a>    
                    <a href="excluir_fun.php" style="color: #dd0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></a></td>

            </tr>
        <?php } ?> 
    </tbody>
</table>

<div class="section"></div>
<div class="section"></div>