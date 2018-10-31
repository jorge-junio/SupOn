<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../../valida.php";

            include "../includes/headTop.html";
        ?>

        <?php
        include "../../conexao.php";

        $consulta = "SELECT codigo, nome, marca, preco, descricao FROM Produto";
        //lembrar de por o atributo cnpj depois que fazer a sessão

        $con = $dao->query($consulta) or die($dao->error);
        ?>
    </head>
    <body>

        <?php
        include "../includes/menuAdm.html";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">

                    <?php
                    include "titulo_pro.php";
                    include "tabela_pro.php";
                    ?>

                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>
