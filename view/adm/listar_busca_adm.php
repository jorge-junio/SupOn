<div class="section"></div>


<?php
$b_nome = ' ';
$b_lista = 1;
$b_nome = $_GET['q_b'];
$b_lista = $_GET['tipo_b'];
if ($b_lista == 1) {
    $consulta = "SELECT cnpj, nomeF, nomeO, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco FROM Supermercado WHERE nomeF = '$b_nome'";
    $con = $dao->query($consulta) or die($dao->error);
    echo '<div class="col s10 offset-s1">';
    include "./tabela_sup.php";
    echo '</div>';
}
if ($b_lista == 2) {
    $consulta = "SELECT codigo, nome, marca, preco, descricao FROM Produto WHERE nome = '$b_nome'";
    $con = $dao->query($consulta) or die($dao->error);
    echo '<div class="col s10 offset-s1">';
    include "./tabela_pro.php";
    echo '</div>';
}
?>