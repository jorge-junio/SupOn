<table class="highlight centered waves-teal ">
	<thead>
		<tr>
			<th>CNPJ</th>
			<th>Nome Fantasia</th>
			<th>Nome Oficial</th>
			<th>Ações</th>
			
		</tr>
	</thead>
	<tbody>
		<?php while ($dado = $con->fetch_array()) { ?>
		<tr class="hoverable">
			<td><?php echo $dado["cnpj"]; ?></td>
			<td><?php echo $dado["nomeF"]; ?></td>
			<td><?php echo $dado["nomeO"]; ?></td>
			<td><a href="editar_sup.php"><i class="material-icons prefix" title="Editar Cliente">edit</i></a>    
				<a href="excluir_sup.php" style="color: #dd0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></a></td>
                                
		</tr>
		<?php } ?> 
	</tbody>
</table>

<div class="section"></div>
<div class="section"></div>