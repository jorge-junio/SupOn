<?php

class produtoDAO{
    
    function adicionar(conexao $con, produto $pro){
         if ($pro->getNome() != ''){
            $consulta = "INSERT INTO Produto(nome, marca, preco, descricao) VALUES
                ('{$pro->getNome()}', '{$pro->getMarca()}', '{$pro->getValor()}', '{$pro->getDescricao()}');";
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
        $consulta = "SELECT codigo, nome, marca, preco, descricao, cnpj FROM Produto";

        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["codigo"] . '</td>';
                    echo '<td>' . $row["nome"] . '</td>';
                    echo '<td>' . $row["marca"] . '</td>';
                    echo '<td>' . $row["descricao"] . '</td>';
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
                    /*echo        '                                
                        <button name="excluir" value="" class="btn btn-danger btn-xs"
                        type="button" data-toggle="modal" data-target="#modalDeleteItem'.$row["codigo"].$row["nome"].'"><i class="material-icons prefix" title="Excluir Cliente">delete</i></button>                                    
                     </td>';
    
                    //Modal para confirmar a exclusão dos itens selecionados
                    //Devemos passar tanto o ID como a SIGLA para que o modal possa exibir e exluir o item
                    echo        '<!-- Modal -->
                                <div class="modal fade" id="modalDeleteItem'.$row["codigo"].$row["nome"].'" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Aviso de exclusão</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Deseja realmente excluir o item <strong>'.$row["nome"].'</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <form name="formunidade2" action="../controller/ItemController.php" method="POST">
                                            <button type="submit" name="excluir" value="" class="btn btn-danger">Excluir</button>
                                            <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>';
                    echo    '</tr>';                  
                }
        } else {
            echo "0 results";
        }  */
        
       include 'modal_pro.php';
    }
    
    function alterar(conexao $con, produto $pro){
        $consulta = "UPDATE Produto SET nome = '{$pro->getNome()}', marca = '{$pro->getMarca()}', descricao = '{$pro->getDescricao()}', 
            preco = '{$pro->getValor()}' WHERE codigo = '{$pro->getCodigo()}' ";
        mysqli_query($con->conecta(), $consulta);
    }

    function selecionar(conexao $con, produto $pro){
        $consulta = "SELECT nome, marca, preco, descricao, cnpj FROM Produto WHERE codigo = '{$pro->getCodigo()}'";
        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pro->setNome($row["nome"]);
                $pro->setMarca($row["marca"]);
                $pro->setValor($row["preco"]);
                $pro->setDescricao($row["descricao"]);
                $pro->setSupermercado($row["cnpj"]);
            }
        }
        return $pro;
    }
}




