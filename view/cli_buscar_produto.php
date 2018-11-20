<!DOCTYPE html>

<html>
    <head>
        <?php
        include "includes/headTop.html";
        include "../DAO/conexao.php";
        include_once '../controller/ProdutoController.php';
        ?>
        
    </head>
    <body>

        <!-- Navbar goes here -->
        <?php
        include "./includes/menuCliente.php";
        ?>

        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">

                    <div class="section"></div>
                    <div class="section" style="text-align: center; font-size: 25px;">Produtos do Supermercado asvfcsdbfds</div>
                    <div class="raw" style="text-align: right; font-size: 16px; ">
                        <div class="section"></div><div class="section"></div>
                    </div>

                    <!-- ******************************* Busca por Produtos **************************************** -->
                    <form class="col s12" action="#">

                        <div class="row">
                            <div class="section"></div>
                            <div class="input-field col s7 offset-s1">
                                <i class="material-icons prefix">search</i>
                                <input id="first_name2" type="text" name="q_b">
                                <label for="first_name2">Nome do Produto</label>
                            </div>
                            <button class="btn waves-effect waves-light col s3 offset-s1" type="submit" name="action" >
                                Buscar
                            </button>
                        </div>
                        <div class="section"></div>
                    </form>

                    <div class="section"></div>
                    <div class="section"></div>

                    <!-- ******************************** Lista de Produtos *************************************** -->

                    <?php
                    include "./listar_busca_adm.php";
                    ?>

                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "includes/scriptFim.html";
        ?>

    </body>
</html>
