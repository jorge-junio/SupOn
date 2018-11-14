<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../DAO/conexao.php";
            include "../model/cliente.php";
            include "../controller/ClienteController.php";

            include "includes/headTop.html";
            
            $cpf = $_SESSION['id_usuario'];

            $cliente = new cliente();
            $clienteController = new ClienteController();

            $cliente = $clienteController->selecionaCliente($cpf);
        ?>


    </head>
    <body>

        <?php
        include "../menu.php";
        ?>

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Editar Perfil</div>
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
                            <input disabled id="nome" type="text" class="validate" name="cpf_off" value="<?php echo $cliente->getCpf(); ?>" />
                            <label class="active" for="CPF"><i class="material-icons left">verified_user</i>CPF</label>
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
                            <input disabled id="senha" type="text" class="validate" name="login_off" value="<?php echo $cliente->getLogin(); ?>">
                            <label class="active" for="login_off"><i class="material-icons left">star</i>Login</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="senha" type="text" class="validate" name="senha" value="<?php echo $cliente->getSenha(); ?>">
                            <label class="active" for="senha"><i class="material-icons left">lock</i>Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s4 offset-s1" type="submit" name="editarPerfil" value="editarPerfil">
                            Atualizar<i class="material-icons right">send</i>
                        </button>

                        <button class="btn waves-effect waves-light col s4 offset-s2" type="submit" name="direcionaListar" value="direcionaListar" >
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