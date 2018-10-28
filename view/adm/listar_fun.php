<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../includes/headTop.html";
            include "../../DAO/conexao.php";
            include "../../controller/ClienteController.php";
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
                        include "titulo_fun.php";
                    ?>
                    <table class="highlight centered waves-teal ">
                        <thead>
                            <tr>
                                <th>Cpf</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Login</th>
                                <th>Senha</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $ClienteController = new ClienteController();
                                $ClienteController->listaCliente();
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
