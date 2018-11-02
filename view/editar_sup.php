<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            include "../conexao.php";
            include "../model/supermercado.php";
            include "../controller/SupermercadoController.php";
            
            include "includes/headTop.html";

            //pega a cnpj que passei via post pelo botão da tabela
            $cnpj = filter_input(INPUT_POST, "cnpj", FILTER_SANITIZE_STRING);

            $supermercado = new supermercado();
            $supermercadoController = new SupermercadoController();

            $supermercado = $supermercadoController->selecionaSupermercado($cnpj);
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

                <div class="section" style="text-align: center; font-size: 25px;">Editar Supermercados</div>
                <div class="section" style="text-align: center; font-size: 18px;">Editando o Supermercado de CNPJ '<?php echo "$cnpj"; ?>'</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/SupermercadoController.php" id="for_fun">

                    <div class="row">
                        <div class="input-field col s12">
                            <?php  
                               echo '<input type="hidden" name="cnpj" value="'.$cnpj.'">';
                            ?> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nomeF" type="text" class="validate" name="nomeF" required="" value="<?php echo $supermercado->getNomeFantasia(); ?>"/>
                            <label class="active"><i class="material-icons left">person_pin</i>Nome Fantasia</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nomeO" type="text" class="validate" name="nomeO" required="" value="<?php echo $supermercado->getNomeOficial(); ?>" />
                            <label class="active"><i class="material-icons left">person</i>Nome Oficial</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="endereco" type="text" class="validate" name="endereco" required="" value="<?php echo $supermercado->getEndereco(); ?>" />
                            <label class="active"><i class="material-icons left">location_on</i>Endereço</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="senha" type="tel" class="validate" name="senha" required="" value="<?php echo $supermercado->getSenha(); ?>" >
                            <label class="active"><i class="material-icons left">vpn_key</i>Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="valorMaximoDistancia" type="text" class="validate" name="valorMaximoDistancia" required="" value="<?php echo $supermercado->getDistanciaMax(); ?>"  />
                            <label class="active"><i class="material-icons left">explore</i>Distância Máxima de Entrega</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="valorMinimoPreco" type="text" class="validate" name="valorMinimoPreco" required="" value="<?php echo $supermercado->getValorMinimo(); ?>"  />
                            <label class="active"><i class="material-icons left">work</i>Valor Mínimo de Entrega</label>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="editar" value="editar" >
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
