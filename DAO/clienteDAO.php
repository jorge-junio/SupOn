<?php

//valida a sessão
include "../valida.php";

class clienteDAO{
    
    function adicionar(conexao $con, cliente $cli){
        if($cli->getCpf() != 0 and $cli->getEndereco() != '' and $cli->getLogin() != '' and $cli->getSenha() != ''){
            $consulta = "INSERT INTO Cliente(tipo, cpf, nome, endereco, login, senha) VALUES
                ('cli','{$cli->getCpf()}', '{$cli->getNome()}', '{$cli->getEndereco()}', '{$cli->getLogin()}', '{$cli->getSenha()}')";
           
            $verifica = $con->conecta();
            $verifica->query($consulta);

            if (($verifica->affected_rows) > 0) {
                $_SESSION['message'] = 'Registro cadastrado com sucesso.';
                $_SESSION['type'] = 'green';
                $_SESSION['ativaMsg'] = 1;
            } else {
                $_SESSION['message'] = 'Registro não foi cadastrado no sistema';
                $_SESSION['type'] = 'red';
                $_SESSION['ativaMsg'] = 1;
            }
        }
     }
     
    function remover(conexao $con, cliente $cli){
        if($cli->getCpf() > 0){
            $consulta = "DELETE FROM Cliente WHERE cpf = '{$cli->getCpf()}'";
            
            $verifica = $con->conecta();
            $verifica->query($consulta);

            if (($verifica->affected_rows) > 0) {
                $_SESSION['message'] = 'Registro removido com sucesso.';
                $_SESSION['type'] = 'green';
                $_SESSION['ativaMsg'] = 1;
            } else {
                $_SESSION['message'] = 'Registro não foi removido no sistema';
                $_SESSION['type'] = 'red';
                $_SESSION['ativaMsg'] = 1;
            }
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
                             <form name="formItem1" action="../view/editar_fun.php" method="POST">
                                    <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Cliente">edit</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>';

                    /*echo '<td align="center">
                             <form name="formItem1" action="../view/excluir_fun.php" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Editar Cliente">delete</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>';*/
                    
                    echo '<td align="center">
                             <form name="formItem1" action="#openModal" method="POST">
                                    <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Editar Cliente">delete</i></button>
                                    <input type="hidden" name="cpf" value="'.$row["cpf"].'">
                                    </form>
                                 </td>';
            }
        }
        
        include 'modal_fun.php';
        
    }

    function alterar(conexao $con, cliente $cli){
        $consulta = "UPDATE Cliente SET cpf = '{$cli->getCpf()}', nome = '{$cli->getNome()}', 
            endereco = '{$cli->getEndereco()}', senha = '{$cli->getSenha()}' WHERE cpf = '{$cli->getCpf()}' ";
        
        $verifica = $con->conecta();
        $verifica->query($consulta);

        if (($verifica->affected_rows) > 0) {
            $_SESSION['message'] = 'Registro alterado com sucesso.';
            $_SESSION['type'] = 'green';
            $_SESSION['ativaMsg'] = 1;
        } else {
            $_SESSION['message'] = 'Registro não foi alterado no sistema';
            $_SESSION['type'] = 'red';
            $_SESSION['ativaMsg'] = 1;
        }
    }

    function selecionar(conexao $con, cliente $cli){
        $consulta = "SELECT cpf, nome, endereco, login, senha FROM Cliente WHERE cpf = '{$cli->getCpf()}' ";
        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $cli->setNome($row["nome"]);
                $cli->setEndereco($row["endereco"]);
                $cli->setLogin($row["login"]);
                $cli->setSenha($row["senha"]);
            }
        }
        return $cli;
    }
}