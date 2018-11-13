<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            
            include "includes/headTop.html";

            include "../DAO/conexao.php";
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

                <div class="section" style="text-align: center; font-size: 25px;">Cadastrar Produtos</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/ProdutoController.php">

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nome" required="" />
                            <label><i class="material-icons left">shopping_basket</i>Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="marca" type="text" class="validate" name="marca" required="" />
                            <label><i class="material-icons left">receipt</i>Marca</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="descricao" type="text" class="validate" name="descricao" required />
                            <label><i class="material-icons left">insert_comment</i>Descrição</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="quantidade" type="text" class="validate" name="quantidade" required />
                            <label><i class="material-icons left">insert_comment</i>Quantidade</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="valor" type="text" class="validate" name="valor" required />
                            <label><i class="material-icons left">monetization_on</i>Valor</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <?php echo '<input type="hidden" name="cnpj" value="'.$_SESSION["id_usuario"].'">'; ?>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="cadastrar" value="cadastrar">
                            Cadastrar<i class="material-icons right">send</i>
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
        include './includes/scriptFim.html';
        ?>

    </body>
</html>
