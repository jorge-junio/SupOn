<!DOCTYPE html>

<html>
    <head>
        <?php

            include "includes/headTop.html";

            include "../DAO/conexao.php";
        ?>
    </head>
    <body>


        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Cadastrar-se como Cliente</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/ClienteController.php">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nome" required="" />
                            <label><i class="material-icons left">person_pin</i>Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cpf" type="text" class="validate" name="cpf" required="" data-length="11"/>
                            <label><i class="material-icons left">verified_user</i>CPF (digite somente números Ex: 12345678910)</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="endereco" type="text" class="validate" name="endereco" required="" />
                            <label><i class="material-icons left">location_on</i>Endereço (Ex: rua, bairro, número da casa)</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="telefone" type="text" class="validate" name="login" required="">
                            <label><i class="material-icons left">account_box</i>login</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="senha" type="password" class="validate" name="senha" required="">
                            <label><i class="material-icons left">vpn_key</i>Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s4 offset-s1" type="submit" name="cadastrar" value="cadastrar" >
                            Cadastrar-se<i class="material-icons right">send</i>
                        </button>
                    

                </form>
                <form method="post" action="../controller/ClienteController.php">
                        <button class="btn waves-effect waves-light col s4 offset-s2" type="submit" name="direcionaLogin" value="direcionaLogin">
                                Cancelar
                            <i class="material-icons right">cancel</i>
                        </button> 
                    
                    <div class="section"></div>

                </form>
                </div>
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
