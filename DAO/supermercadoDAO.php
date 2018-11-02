<?php

class supermercadoDAO{
    
    function adicionar(conexao $con, supermercado $sup){
        if($sup->getCnpj() != 0 and $sup->getLogin() != '' and $sup->getSenha() != ''){
        $consulta = "INSERT INTO Supermercado(cnpj, nomeO, nomeF, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco) VALUES
            ('{$sup->getCnpj()}', '{$sup->getNomeOficial()}', '{$sup->getNomeFantasia()}', '{$sup->getEndereco()}', '{$sup->getLogin()}', '{$sup->getSenha()}', '{$sup->getDistanciaMax()}', '{$sup->getValorMinimo()}')";

        mysqli_query($con->conecta(), $consulta);
        }
     }
     
    function remover(conexao $con, supermercado $sup){
        if($sup->getCnpj() > 0){
           $consulta = "DELETE FROM Supermercado WHERE cnpj = '{$sup->getCnpj()}'";
            mysqli_query($con->conecta(), $consulta);
        }
    }
    
    function listar(conexao $con){
        $consulta = "SELECT cnpj, nomeF, nomeO, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco FROM Supermercado";
        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["cnpj"] . '</td>';
                    echo '<td>' . $row["nomeF"] . '</td>';
                    echo '<td>' . $row["nomeO"] . '</td>';
                    echo '<td>' . $row["endereco"] . '</td>';
                    echo '<td>' . $row["login"] . '</td>';
                    echo '<td>' . $row["senha"] . '</td>';
                    echo '<td>' . $row["valorMaximoDistancia"] . '</td>';
                    echo '<td>' . $row["valorMinimoPreco"] . '</td>';

                    echo '<td align="center">
                            <form name="formItem1" action="../view/editar_sup.php" method="POST">
                                <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Supermercado">edit</i></button>
                                    <input type="hidden" name="cnpj" value="'.$row["cnpj"].'">
                            </form>
                        </td>';

                    echo '<td align="center">
                            <form name="formItem1" action="../view/excluir_sup.php" method="POST">
                                <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Supermercado">delete</i></button>
                                    <input type="hidden" name="cnpj" value="'.$row["cnpj"].'">
                            </form>
                        </td>';

            }
        }
                    /*echo        '                                
                        <td><button name="excluir" value="" class="btn-primary"
                        type="button" data-toggle="modal" data-target="#modalDeleteItem'.$row["cnpj"].$row["nomeF"].'" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></button>                                    
                     </td>';
    
                    //Modal para confirmar a exclusão dos itens selecionados
                    //Devemos passar tanto o ID como a SIGLA para que o modal possa exibir e exluir o item
                    echo        '<!-- Modal -->
                                <div class="modal fade" id="modalDeleteItem'.$row["cnpj"].$row["nomeF"].'" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Aviso de exclusão</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Deseja realmente excluir o item <strong>'.$row["nomeF"].'</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <form name="formunidade2" action="../controller/ItemController.php" method="POST">
                                            <button type="submit" name="excluir" value="" class="btn btn-danger">Excluir</button>
                                            <input type="hidden" name="cnpj" value="'.$row["cnpj"].'">
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>';
                    echo    '</tr>';                  
                }
        } else {
            echo "0 results";
        }*/
    }
    
    function alterar(conexao $con, supermercado $sup){
        $consulta = "UPDATE Supermercado SET cnpj = '{$sup->getCnpj()}', nomeF = '{$sup->getNomeFantasia()}', nomeO = '{$sup->getNomeOficial()}', 
            endereco = '{$sup->getEndereco()}', valorMaximoDistancia = '{$sup->getDistanciaMax()}',valorMinimoPreco = '{$sup->getValorMinimo()}', senha = '{$sup->getSenha()}' WHERE cnpj = '{$sup->getCnpj()}' ";
        mysqli_query($con->conecta(), $consulta);
    }
}


