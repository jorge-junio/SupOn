<!DOCTYPE html>

<html>
    <head>
        <?php
            //valida a sessão
            include "../../valida.php";

            //imports
            include "../includes/headTop.html";
            include "../../DAO/conexao.php";
            include "../../controller/ProdutoController.php";
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
                    ?>
                    <table class="highlight centered waves-teal ">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Marca</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Supermercado</th>
                                <th>Ações</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $ProdutoController = new ProdutoController();
                                $ProdutoController->listaProduto();
                            ?>
                        </tbody>
                    </table>

                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>
