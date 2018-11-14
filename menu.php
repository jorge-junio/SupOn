<?php
	if ($_SESSION["permissao"] == "cli") {
        include "../view/includes/menuCliente.php";
    }else if( $_SESSION["permissao"] == "adm"){
        include "../view/includes/menuAdm.php";
    }else{
        include "../view/includes/menuSup.php";
    }
?>