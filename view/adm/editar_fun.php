<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../../valida.php";
            
            include "../includes/headTop.html";
        ?>

        <?php
        include "../../conexao.php";

        //pega os dados que são enviados para essa mesma página
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
        $cpf = (INT) isset($_GET["cpf"]) ? $_GET["cpf"] : 0;
        $endereco = isset($_GET["endereco"]) ? $_GET["endereco"] : "";
        $senha = isset($_GET["senha"]) ? $_GET["senha"] : "";

        //cria a consulta de update no bd
        $consulta = "UPDATE Cliente SET cpf = '$cpf', nome = '$nome', 
            endereco = '$endereco', senha = '$senha' WHERE cpf = '$cpf' ";

        //verifica se cpf é diferente de 0 e se sim ele realiza o update no banco e redireciona para a página de listar funcionario
        if ($cpf != 0){
            $con1 = $dao->query($consulta) or die($dao->error);
            exit('<script>location.href = "listar_fun.php"</script>');
        }


        //pega o cpf que passei via post pelo botão da tabela
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);

        //cria a consulta para pegar os dados do cliente que tem esse cpf que peguei no post
        $consulta = "SELECT cpf, nome, endereco, senha FROM Cliente WHERE cpf = '$cpf' ";

        //executa a query
        $result = mysqli_query($dao, $consulta);

        //verifica se foi encontrada algum Cliente no banco que tenha esse cpf e pega seus dados e joga em variáveis
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                $nome = $row["nome"];
                $endereco = $row["endereco"];
                $senha = $row["senha"];
            }

        }

        ?>


    </head>
    <body>

        <?php
        include "../includes/menuAdm.html";
        ?>

        <div class="section"></div>
        <div class="section"></div>
        <div class="container">  
            <!-- Page Content goes here --> 
            <div class="row white darken-2">
                <div class="section"></div>

                <div class="section" style="text-align: center; font-size: 25px;">Editar Clientes</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="get" action="editar_fun.php" id="for_fun">

                    <!--<div class="row">
                        <div class="input-field col s12">
                            <select id="tipo" name="tipo" required="">
                                <option value="" disabled selected>Opções:</option>
                                <option value="1">Administrador</option>
                                <option value="2">Funcionário</option>
                            </select>
                            <label for="tipo"><i class="material-icons left">supervisor_account</i>Tipo:</label>
                        </div>
                    </div>-->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cpf" type="text" class="validate" name="cpf" required="" value="<?php echo $cpf; ?>" />
                            <label class="active" for="cpf"><i class="material-icons left">verified_user</i>CPF</label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nome" value="<?php echo $nome; ?>" />
                            <label class="active" for="nome"><i class="material-icons left">person_pin</i>Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input  id="endereco" type="text" class="validate" name="endereco" value="<?php echo $endereco; ?>" />
                            <label class="active" for="endereco"><i class="material-icons left">location_on</i>Endereço</label>
                        </div>
                    </div>

                    <!--<div class="row">
                        <div class="input-field col s12">
                            <input id="salario" type="text" class="validate" name="salario" />
                            <label class="active" for="salario"><i class="material-icons left">work</i>Salário</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="email">
                            <label class="active" for="email"><i class="material-icons left">email</i>Email</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="telefone" type="tel" class="validate" name="telefone">
                            <label class="active" for="telefone"><i class="material-icons left">phone</i>Telefone</label>
                        </div>
                    </div>-->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="senha" type="password" class="validate" name="senha" value="<?php echo $senha; ?>">
                            <label class="active" for="senha"><i class="material-icons left">lock</i>Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                            Atualizar<i class="material-icons right">send</i>
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
        include "../includes/scriptFim.html";
        ?>

    </body>
</html>