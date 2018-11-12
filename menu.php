<?php

	if ($_SESSION["permissao"] == "cli") {
        include "../view/includes/menuCliente.html";
    }else if( $_SESSION["permissao"] == "adm"){
        include "../view/includes/menuAdm.html";
    }else{
        include "../view/includes/menuSup.html";
    }
?>