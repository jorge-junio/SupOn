<?php

session_start();

class supermercadoDAO{
    
    function adicionar(conexao $con, supermercado $sup){
        if($sup->getCnpj() != 0 and $sup->getLogin() != '' and $sup->getSenha() != ''){
        $consulta = "INSERT INTO Supermercado(cnpj, nomeO, nomeF, endereco, login, senha, valorMaximoDistancia, valorMinimoPreco) VALUES
            ('{$sup->getCnpj()}', '{$sup->getNomeOficial()}', '{$sup->getNomeFantasia()}', '{$sup->getEndereco()}', '{$sup->getLogin()}', '{$sup->getSenha()}', '{$sup->getValorMaximoDistancia()}', '{$sup->getValorMinimoPreco()}');";
       
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
        mysqli_query($con->conecta(), $consulta);
    }
    
    function alterar(conexao $con, supermercado $sup){
        $consulta = "UPDATE Supermercado SET cnpj = '{$sup->getCnpj()}', nomeF = '{$sup->getNomeFantasia()}', nomeO = '{$sup->getNomeOficial()}', 
            endereco = '{$sup->getEndereco()}', valorMaximoDistancia = '{$sup->getDistanciaMax()}',valorMinimoPreco = '{$sup->getValorMinimo()}', senha = '{$sup->getSenha()}' WHERE cnpj = '{$sup->getCnpj()}' ";
        mysqli_query($con->conecta(), $consulta);
    }
}


