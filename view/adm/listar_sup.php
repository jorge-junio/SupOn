<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../includes/headTop.html";
            include "../../DAO/conexao.php";
            include "../../controller/SupermercadoController.php";
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
                        include "titulo_sup.php";
                    ?>
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
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $SupermercadoController = new SupermercadoController();
                                $SupermercadoController->listaSupermercado();
                            ?>
                        </tbody>
                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>
