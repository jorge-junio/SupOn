<div class="section"></div>


<?php
$b_nome = ' ';
$b_nome = filter_input(INPUT_POST,"q_b",FILTER_SANITIZE_STRING);

	if ($_SESSION['permissao'] == 'cli') {
		echo '<div class="col s10 offset-s1">';
		include "./tabela_sup_cli.php";
		echo '</div>';
	}else{
		echo '<div class="col s10 offset-s1">';
		include "./tabela_sup_busca.php";
		echo '</div>';
	}
?>