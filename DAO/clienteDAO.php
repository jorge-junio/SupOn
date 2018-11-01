<?php

//session_start();

class clienteDAO{
    
    function adicionar(conexao $con, cliente $cli){
        if($cli->getCpf() != 0 and $cli->getEndereco() != '' and $cli->getLogin() != '' and $cli->getSenha() != ''){
        $consulta = "INSERT INTO Cliente(tipo, cpf, nome, endereco, login, senha) VALUES
            ('cli','{$cli->getCpf()}', '{$cli->getNome()}', '{$cli->getEndereco()}', '{$cli->getLogin()}', '{$cli->getSenha()}')";
       
        mysqli_query($con->conecta(), $consulta);
        }
     }
     
    function remover(conexao $con, cliente $cli){
        if($cli->getCpf() > 0){
            $consulta = "DELETE FROM Cliente WHERE cpf = '{$cli->getCpf()}'";
            mysqli_query($con->conecta(), $consulta);
        }
    }
    
    function listar(conexao $con){
        $consulta = "SELECT cpf, nome, endereco, login, senha FROM Cliente";

        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo '<tr class="hoverable">';
                    echo '<td>' . $row["cpf"] . '</td>';
                    echo '<td>' . $row["nome"] . '</td>';
                    echo '<td>' . $row["endereco"] . '</td>';
                    echo '<td>' . $row["login"] . '</td>';
                    echo '<td>' . $row["senha"] . '</td>';
                    
                    echo '<td align="center">
                             <form name="formItem1" action="../adm/editar_fun.php" method="POST">
                                    <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Cliente">edit</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>';

                    echo        '                                
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
        }  
        
    }

    function alterar(conexao $con, cliente $cli){
        $consulta = "UPDATE Cliente SET cpf = '{$cli->getCpf()}', nome = '{$cli->getNome()}', 
            endereco = '{$cli->getEndereco}', senha = '{$cli->getSenha}' WHERE cpf = '{$cli->getCpf}' ";
        mysqli_query($con->conecta(), $consulta);
    }

    function selecionarCliente(conexao $con, cliente $cli){
        $consulta = "SELECT cpf, nome, endereco, senha FROM Cliente WHERE cpf = '{$cli->getCpf()}' ";

        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
                $cli->setNome($row["nome"]);
                $endereco = $row["endereco"];
                $senha = $row["senha"];
            }

        }
        return $cli;
    }
}