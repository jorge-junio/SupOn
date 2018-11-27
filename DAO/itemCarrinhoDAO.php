<?php
include "../valida.php";

class itemCarrinhoDAO {
    function adicionar(conexao $con, itemCarrinho $icar){
        if($icar->getCodCarrinho() != 0){
        $consulta = "INSERT INTO Item_Carrinho(codCarrinho, codProduto, qtdProduto, valorProduto) VALUES
            ('{$icar->getCodCarrinho()}', '{$icar->getCodProduto()}', '{$icar->getQtdProduto()}', '{$icar->getValorProduto()}')";
       
        mysqli_query($con->conecta(), $consulta);
        }
     }
     
    function remover(conexao $con, itemCarrinho $icar){
        if($icar->getCodCarrinho() > 0){
            $consulta = "DELETE FROM Item_Carrinho WHERE codCarrinho = '{$icar->getCodCarrinho()}'";
            mysqli_query($con->conecta(), $consulta);
        }
    }
    
    function listar(conexao $con, $codCarrinho){
        $consulta = "SELECT i.codCarrinho, i.codProduto, p.nome, i.qtdProduto, i.valorProduto FROM Item_Carrinho i, Produto p WHErE i.codProduto = p.codigo  AND codCarrinho = ".$codCarrinho;

        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["codCarrinho"] . '</td>';
                    echo '<td>' . $row["codProduto"] . '</td>';
                    echo '<td>' . $row["nome"] . '</td>';
                    echo '<td>' . $row["qtdProduto"] . '</td>';
                    echo '<td>' . $row["valorProduto"] . '</td>';
                    
                    //deve ser alterado
                    /*echo '<td align="center">
                             <form name="formItem1" action="../view/editar_fun.php" method="POST">
                                    <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Cliente">edit</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>'; */
                    

                    /*echo '<td align="center">
                             <form name="formItem1" action="../view/excluir_fun.php" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Editar Cliente">delete</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>';*/
                    
                    //deve ser alterado
                    /*echo '<td align="center">
                             <form name="formItem1" action="#openModal" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Editar Cliente">delete</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>'; */
            }
        }
    
     //include 'modal_fun.php';
        
    }

    function alterar(conexao $con, itemCarrinho $icar){
        $consulta = "UPDATE Item_Carrinho SET codCarrinho = '{$icar->getCodCarrinho()}', codProduto = '{$icar->getCodProduto()}', 
            qtdProduto = '{$icar->getQtdProduto()}', valorProduto = '{$icar->getValorProduto()}' WHERE codCarrinho = '{$icar->getCodCarrinho()}' ";
        mysqli_query($con->conecta(), $consulta);
    }

    function selecionar(conexao $con, itemCarrinho $icar){
        $consulta = "SELECT codProduto, qtdProduto, valorProduto WHERE codCarrinho = '{$icar->getCodCarrinho()}' ";
        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $icar->setCodProduto($row["codProduto"]);
                $icar->setQtdProduto($row["qtdProduto"]);
                $icar->setValorProduto($row["valorProduto"]);
             
            }
        }
        return $icar;
    }
    
    //alterar para imprimir direto na tabela
    function listarItens(conexao $con, carrinho $car){
        $consulta = "SELECT codCarrinho, codProduto, qtdProduto, valorProduto FROM Item_Carrinho where codCarrinho = '{$car->getCodigo()}'";

        $result = mysqli_query($con->conecta(), $consulta);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["codCarrinho"] . '</td>';
                    echo '<td>' . $row["codProduto"] . '</td>';
                    echo '<td>' . $row["qtdProduto"] . '</td>';
                    echo '<td>' . $row["valorProduto"] . '</td>';
                    
                    //deve ser alterado
                    /*echo '<td align="center">
                             <form name="formItem1" action="../view/editar_fun.php" method="POST">
                                    <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Cliente">edit</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>'; */
                    

                    /*echo '<td align="center">
                             <form name="formItem1" action="../view/excluir_fun.php" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Editar Cliente">delete</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>';*/
                    
                    //deve ser alterado
                    /*echo '<td align="center">
                             <form name="formItem1" action="#openModal" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Editar Cliente">delete</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>'; */
            }
        }
    }
}
