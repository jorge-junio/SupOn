<?php
    include "../valida.php";
    include "../DAO/conexao.php";


    if ($_SESSION["permissao"] == "cli" || $_SESSION["permissao"] == "adm") {
        header("Location: ../view/editarPerfil_cli.php");
    }else{
        header("Location: ../view/editarPerfil_sup.php");
    }
?>