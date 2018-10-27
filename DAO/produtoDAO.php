<?php

session_start();

class produtoDAO{
    
    function adicionar(conexao $con, produto $pro){
         if ($pro->getNome() != ''){
            $consulta = "INSERT INTO Produto(nome, marca, preco, descricao) VALUES
                ('{$pro->getNome()}', '{$pro->getMarca()}', '{$pro->getPreco()}', '{$pro->getDescricao()}');";
            mysqli_query($con->conecta(), $consulta);
        }
     }
     
    function remover(conexao $con, produto $pro){
        if($pro->getCnpj() > 0){
            $consulta = "DELETE FROM Supermercado WHERE cnpj = '{$pro->getCnpj()}'";
            mysqli_query($con->conecta(), $consulta);
        }
    }
    
    function listar(conexao $con){
        $consulta = "SELECT codigo, nome, marca, preco, descricao FROM Produto";
        mysqli_query($con->conecta(), $consulta);
    }
    
    function alterar(conexao $con, produto $pro){
        $consulta = "UPDATE Produto SET nome = '{$pro->getNome()}', marca = '{$pro->getMarca()}', descricao = '{$pro->getDescricao()}', 
            preco = '{$pro->getPreco()}' WHERE nome = '{$pro->getNome()}' ";
        mysqli_query($con->conecta(), $consulta);
    }
}




