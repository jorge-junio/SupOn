<table class="highlight centered waves-teal ">
	<thead>
		<tr>
			<th>CNPJ</th>
			<th>Nome Fantasia</th>
			<th>Nome Oficial</th>
			<th>Endereço</th>
			<th>Login</th>
			<th>Senha</th>
			<th>Distancia Max. Entrega</th>
			<th>Valor Min. de Entrega</th>
			
		</tr>
	</thead>
	<tbody>
		<?php while ($dado = $con->fetch_array()) { ?>
		<tr class="hoverable">
			<td><?php echo $dado["cnpj"]; ?></td>
			<td><?php echo $dado["nomeF"]; ?></td>
			<td><?php echo $dado["nomeO"]; ?></td>
			<td><?php echo $dado["endereco"]; ?></td>
			<td><?php echo $dado["login"]; ?></td>
			<td><?php echo $dado["senha"]; ?></td>
			<td><?php echo $dado["valorMaximoDistancia"]; ?></td>
			<td><?php echo $dado["valorMinimoPreco"]; ?></td>
			
		</tr>
		<?php } ?> 
	</tbody>
</table>

<div class="section"></div>
<div class="section"></div>