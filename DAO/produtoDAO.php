<?php

class produtoDAO{
    
    function adicionar(conexao $con, produto $pro){
         if ($pro->getNome() != ''){
            $consulta = "INSERT INTO Produto(nome, marca, preco, descricao, quantidade, cnpj) VALUES
                ('{$pro->getNome()}', '{$pro->getMarca()}', '{$pro->getValor()}', '{$pro->getDescricao()}', '{$pro->getQtd()}', '{$pro->getSupermercado()}');";
            mysqli_query($con->conecta(), $consulta);
        }
     }
     
    function remover(conexao $con, produto $pro){
        if($pro->getCodigo() > 0){
            $consulta = "DELETE FROM Produto WHERE codigo = '{$pro->getCodigo()}'";
            mysqli_query($con->conecta(), $consulta);
        }
    }
    
    function listar(conexao $con){
        $consulta = "SELECT codigo, nome, marca, preco, descricao, quantidade, cnpj FROM Produto";

        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["codigo"] . '</td>';
                    echo '<td>' . $row["nome"] . '</td>';
                    echo '<td>' . $row["marca"] . '</td>';
                    echo '<td>' . $row["descricao"] . '</td>';
                    echo '<td>' . $row["quantidade"] . '</td>';
                    echo '<td>' . $row["preco"] . '</td>';
                    echo '<td>' . $row["cnpj"] . '</td>';

                    
                    echo '<td align="center">
                             <form name="formItem1" action="../view/editar_pro.php" method="POST">
                                    <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Produto">edit</i></button>
                                    <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                    </form>
                                 </td>';

                    /*echo '<td align="center">
                             <form name="formItem1" action="../view/excluir_pro.php" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                    <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                    </form>
                                 </td>';*/

                    echo '<td align="center">
                             <form name="formItem1" action="#openModal" method="POST">
                                    <button type="submit" name="excluir2" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                    <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                    </form>
                                 </td>';
            }
        }
    
        
       include 'modal_pro.php';
    }
    
    function alterar(conexao $con, produto $pro){
        $consulta = "UPDATE Produto SET nome = '{$pro->getNome()}', marca = '{$pro->getMarca()}', descricao = '{$pro->getDescricao()}', 
            preco = '{$pro->getValor()}', quantidade = '{$pro->getQtd()}' WHERE codigo = '{$pro->getCodigo()}' ";
        mysqli_query($con->conecta(), $consulta);
    }

    function selecionar(conexao $con, produto $pro){
        $consulta = "SELECT nome, marca, preco, descricao, quantidade, cnpj FROM Produto WHERE codigo = '{$pro->getCodigo()}'";
        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pro->setNome($row["nome"]);
                $pro->setMarca($row["marca"]);
                $pro->setValor($row["preco"]);
                $pro->setDescricao($row["descricao"]);
                $pro->setQtd($row["quantidade"]);
                $pro->setSupermercado($row["cnpj"]);
            }
        }
        return $pro;
    }
}




