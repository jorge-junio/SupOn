<table class="highlight centered waves-teal ">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Marca</th>
			<th>Descrição</th>
			<th>Valor</th>
			<th>Supermercado</th>
			
			
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
			
		</tr>
		<?php } ?> 
	</tbody>
</table>

<div class="section"></div>
<div class="section"></div>