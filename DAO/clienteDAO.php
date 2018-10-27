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
        mysqli_query($con->conecta(), $consulta);
    }
    
    function alterar(conexao $con, cliente $cli){
        $consulta = "UPDATE Cliente SET cpf = '{$cli->getCpf()}', nome = '{$cli->getNome()}', 
            endereco = '{$cli->getEndereco}', senha = '{$cli->getSenha}' WHERE cpf = '{$cli->getCpf}' ";
        mysqli_query($con->conecta(), $consulta);
    }
}

