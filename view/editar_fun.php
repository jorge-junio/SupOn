<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            include "../DAO/conexao.php";
            include "../model/cliente.php";
            include "../controller/ClienteController.php";

            include "includes/headTop.html";

            //pega o cpf que passei via post pelo botão da tabela
            $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);

            $cliente = new cliente();
            $clienteController = new ClienteController();

            $cliente = $clienteController->selecionaCliente($cpf);
        ?>


    </head>
    <body>

        <?php
        include "includes/menuAdm.html";
        ?>

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Editar Clientes</div>
                <div class="section" style="text-align: center; font-size: 18px;">Editando o Cliente de CPF '<?php echo "$cpf"; ?>'</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/ClienteController.php" id="for_fun">

                    <div class="row">
                        <div class="input-field col s12">
                            <?php  
                               echo '<input type="hidden" name="cpf" value="'.$cpf.'">';
                            ?> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nome" value="<?php echo $cliente->getNome(); ?>" />
                            <label class="active" for="nome"><i class="material-icons left">person_pin</i>Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input  id="endereco" type="text" class="validate" name="endereco" value="<?php echo $cliente->getEndereco(); ?>" />
                            <label class="active" for="endereco"><i class="material-icons left">location_on</i>Endereço</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="senha" type="password" class="validate" name="senha" value="<?php echo $cliente->getSenha(); ?>">
                            <label class="active" for="senha"><i class="material-icons left">lock</i>Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="editar" value="editar">
                            Atualizar<i class="material-icons right">send</i>
                        </button>

                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="direcionaListar" value="direcionaListar" >
                            Cancelar<i class="material-icons right">cancel</i>
                        </button>
                    </div>

                    <div class="section"></div>

                </form>
                <div class="section"></div>
            </div>
            <div class="section"></div>
            <div class="section"></div>
        </div>

        <?php
        include "includes/scriptFim.html";
        ?>

    </body>
</html>