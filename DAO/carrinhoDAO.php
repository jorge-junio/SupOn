<?php
include_once '../model/itemCarrinho.php';
class carrinhoDAO {
    function adicionar(conexao $con, carrinho $car){
        if($car->getCpf_cliente() != 0){
        $consulta = "INSERT INTO Carrinho(data, cpfCliente) VALUES
            ('{$car->getData()}', '{$car->getCpfCliente()}')";
       
        mysqli_query($con->conecta(), $consulta);
        }
     }
     
    function remover(conexao $con, carrinho $car){
        if($car->getCpf_cliente() > 0){
            $consulta = "DELETE FROM Carrinho WHERE codigo = '{$car->getCodigo()}'";
            mysqli_query($con->conecta(), $consulta);
        }
    }
    
    function listar(conexao $con){
        $consulta = "SELECT codigo, data, cpfCliente FROM Carrinho where cpfCliente = ".$_SESSION['id_usuario'];

        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["codigo"] . '</td>';
                    echo '<td>' . $row["data"] . '</td>';
                    echo '<td>' . $row["codCliente"] . '</td>';
                    
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
    

                    /*echo        '                                
                        <td><button name="excluir" value="" class="btn-primary"
                        type="button" data-toggle="modal" data-target="#modalDelCliente'.$row["cpf"].$row["nome"].'" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></button>                                    
                     </td>';
    
                    //Modal para confirmar a exclusão dos itens selecionados
                    //Devemos passar tanto o ID como a SIGLA para que o modal possa exibir e exluir o item
                    echo        '<!-- Modal -->
                                <div class="modal fade" id="modalDelCliente'.$row["cpf"].$row["nome"].'" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
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
                                        <form name="formunidade2" action="../controller/ClienteController.php" method="POST">
                                            <button type="submit" name="excluir" value="" class="btn btn-danger">Excluir</button>
                                            <input type="hidden" name="cpf" value="'.$row["cpf"].'">
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
        
     //include 'modal_fun.php';
        
    }
    
}
