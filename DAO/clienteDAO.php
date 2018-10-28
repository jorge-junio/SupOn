<?php

session_start();

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
        $con = mysqli_query($con->conecta(), $consulta);

        while ($dado = $con->fetch_array()) { ?>
            <tr class="hoverable">
                <td><?php echo $dado["cpf"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>

                <td><?php echo $dado["endereco"]; ?></td>
                <td><?php echo $dado["login"]; ?></td>
                <td><?php echo $dado["senha"]; ?></td>
                <td><a href="editar_fun.php"><i class="material-icons prefix" title="Editar Cliente">edit</i></a>    
                    <a href="excluir_fun.php" style="color: #dd0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></a></td>

            </tr>
        <?php } 
    }
    
    function alterar(conexao $con, cliente $cli){
        $consulta = "UPDATE Cliente SET cpf = '{$cli->getCpf()}', nome = '{$cli->getNome()}', 
            endereco = '{$cli->getEndereco}', senha = '{$cli->getSenha}' WHERE cpf = '{$cli->getCpf}' ";
        mysqli_query($con->conecta(), $consulta);
    }
}