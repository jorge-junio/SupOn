<!DOCTYPE html>

<html>
    <head>
        <?php
        include "includes/headTop.html";
        include "../DAO/conexao.php";
        include_once '../controller/CarrinhoController.php';
        ?>
    </head>
    <body>

        <!-- Navbar goes here -->
        <?php
            include "./includes/menuCliente.php";
            include "modal_car_excluir.php";
        ?>
        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">
                    <?php
                    include "titulo_pro_car.php";
                    include "tabela_car_em_uso.php";
                    ?>
                <div class="section"></div>
                <div class="section"></div>
                <form method="post" action="../controller/ItemCarrinhoController.php">
                        <button class="btn waves-effect waves-light col s4 offset-s2" type="submit" name="efetuarCompra" value="efetuarCompra">
                                Efetuar Compra
                            <i class="material-icons right">check_circle</i>
                        </button> 
                </form>

                <form method="post" action="#openModalExcCar">
                        <button class="btn waves-effect waves-light col s4 offset-s2" type="submit" name="" value="">
                                Cancelar Compra
                            <i class="material-icons right">cancel</i>
                        </button> 
                    
                    <div class="section"></div>
                </form>

                

                </div>
                <div class="section"></div>
            </div>
        </div>

        <?php
        include "includes/scriptFim.html";
        ?>

    </body>
</html>
