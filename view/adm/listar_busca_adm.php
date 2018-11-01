<div class="section"></div>


<?php
$b_nome = ' ';
$b_lista = 1;
$b_nome = $_GET['q_b'];
$b_lista = $_GET['tipo_b'];
if ($b_lista == 1) {
    
    echo '<div class="col s10 offset-s1">';
    include "./tabela_sup.php";
    echo '</div>';
}
if ($b_lista == 2) {
    
    echo '<div class="col s10 offset-s1">';
    include "./tabela_pro.php";
    echo '</div>';
}
?>