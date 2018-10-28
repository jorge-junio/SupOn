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
        $con = mysqli_query($con->conecta(), $consulta);

        while ($dado = $con->fetch_array()) { ?>
            <tr class="hoverable">
                <td><?php echo $dado["cnpj"]; ?></td>
                <td><?php echo $dado["nomeF"]; ?></td>
                <td><?php echo $dado["nomeO"]; ?></td>
                <td><?php echo $dado["endereco"]; ?></td>
                <td><?php echo $dado["login"]; ?></td>
                <td><?php echo $dado["senha"]; ?></td>
                <td><?php echo $dado["valorMaximoDistancia"]; ?></td>
                <td><?php echo $dado["valorMinimoPreco"]; ?></td>
                <td><a href="editar_sup.php"><i class="material-icons prefix" title="Editar Cliente">edit</i></a>    
                    <a href="excluir_sup.php" style="color: #dd0000;"><i class="material-icons prefix" title="Excluir Cliente">delete</i></a></td>

            </tr>
        <?php }
    }
    
    function alterar(conexao $con, supermercado $sup){
        $consulta = "UPDATE Supermercado SET cnpj = '{$sup->getCnpj()}', nomeF = '{$sup->getNomeFantasia()}', nomeO = '{$sup->getNomeOficial()}', 
            endereco = '{$sup->getEndereco()}', valorMaximoDistancia = '{$sup->getDistanciaMax()}',valorMinimoPreco = '{$sup->getValorMinimo()}', senha = '{$sup->getSenha()}' WHERE cnpj = '{$sup->getCnpj()}' ";
        mysqli_query($con->conecta(), $consulta);
    }
}


