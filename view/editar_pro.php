<!DOCTYPE html>

<html>
    <head>
        <?php
            include "../valida.php";
            
            include "includes/headTop.html";
        ?>

        <?php
            include "../conexao.php";

            //pega o codigo do produto que passei via post pelo botão da tabela
            $codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_STRING);

            //cria a consulta para pegar os dados do Produto que tem esse codigo que peguei no post
            $consulta = "SELECT * FROM Produto WHERE codigo = '$codigo' ";

            //executa a query
            $result = mysqli_query($dao, $consulta);

            //verifica se foi encontrada algum Produto no banco que tenha esse codigo e pega seus dados e joga em variáveis
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    $codigo = $row["codigo"];
                    $nome = $row["nome"];
                    $marca = $row["marca"];
                    $descricao = $row["descricao"];
                    $preco = (FLOAT) $row["preco"];
                }

            }
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
                <div class="raw" style="text-align: right; font-size: 16px; ">
                    <div class="section"></div><div class="section"></div>
                </div>

                <form class="col s8 offset-s2" method="post" action="../controller/ProdutoController.php">

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="codigo" type="text" class="validate" name="codigo" required="" value="<?php echo $codigo; ?>" />
                            <label><i class="material-icons left">shopping_basket</i>Código</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome" type="text" class="validate" name="nome" required="" value="<?php echo $nome; ?>" />
                            <label><i class="material-icons left">shopping_basket</i>Nome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="marca" type="text" class="validate" name="marca" required="" value="<?php echo $marca; ?>" />
                            <label><i class="material-icons left">receipt</i>Marca</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="descricao" type="text" class="validate" name="descricao" required="" value="<?php echo $descricao; ?>" />
                            <label><i class="material-icons left">insert_comment</i>Descrição</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="valor" type="text" class="validate" name="valor" required="" value="<?php echo $preco; ?>" />
                            <label><i class="material-icons left">monetization_on</i>Valor</label>
                        </div>
                    </div>



                    <div class="row">
                        <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="editar" value="editar" >
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
        include "includes/scriptFim.html";
        ?>

    </body>
</html>
