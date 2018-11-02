<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            include "../conexao.php";
            include "../model/produto.php";
            include "../controller/ProdutoController.php";
            
            include "includes/headTop.html";

            //pega o codigo do produto que passei via post pelo botão da tabela
            $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_STRING);

            $produto = new produto();
            $produtoController = new ProdutoController();

            $produto = $produtoController->selecionaProduto($codigo);
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

                <div class="section" style="text-align: center; font-size: 25px;">Editar Produtos</div>
                <div class="section" style="text-align: center; font-size: 18px;">Editando o Produto de CÓDIGO '<?php echo "$codigo"; ?>' ?</div>
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/ProdutoController.php">

                    <div class="row">
                        <div class="input-field col s12">
                            <?php  
                               echo '<input type="hidden" name="codigo" value="'.$codigo.'">';
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nome" required="" value="<?php echo $produto->getNome(); ?>" />
                            <label><i class="material-icons left">shopping_basket</i>Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="marca" type="text" class="validate" name="marca" required="" value="<?php echo $produto->getMarca(); ?>" />
                            <label><i class="material-icons left">receipt</i>Marca</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="descricao" type="text" class="validate" name="descricao" required="" value="<?php echo $produto->getDescricao(); ?>" />
                            <label><i class="material-icons left">insert_comment</i>Descrição</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="valor" type="text" class="validate" name="valor" required="" value="<?php echo $produto->getValor(); ?>" />
                            <label><i class="material-icons left">monetization_on</i>Valor</label>
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
