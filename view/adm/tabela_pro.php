<table class="highlight centered waves-teal ">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Supermercado</th>
            <th>Ações</th>


        </tr>
    </thead>
    <tbody>
        <?php while ($dado = $con->fetch_array()) { ?>
            <tr class="hoverable">
                <td><?php echo $dado["codigo"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["marca"]; ?></td>
                <td><?php echo $dado["descricao"]; ?></td>
                <td><?php echo $dado["preco"]; ?></td>
                <td> </td>
                <td><a href="editar_pro.php"><i class="material-icons prefix" title="Editar Cliente">edit</i></a>    
                    <a href="excluir_pro.php" style="color: #dd0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></a></td>

            </tr>
        <?php } ?> 
    </tbody>
</table>

<div class="section"></div>
<div class="section"></div>