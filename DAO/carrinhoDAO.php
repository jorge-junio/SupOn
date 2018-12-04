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
        if ($_SESSION['permissao'] == "cli") {
            $consulta = "SELECT codigo, data FROM Carrinho where cpfCliente = ".$_SESSION['id_usuario'];

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr class="hoverable">';
                        echo '<td>' . $row["codigo"] . '</td>';
                        echo '<td>' . $row["data"] . '</td>';
                        
                        //deve ser alterado
                        echo '<td align="center">
                                 <form name="formItem1" action="cli_produtos_car.php" method="POST">
                                        <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Visualizar Detalhes">visibility</i></button>
                                        <input type="hidden" name="codCarrinho" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';
                }
            }
        }else{

            //modificar o banco e alterar esta consulta
            $consulta = "SELECT c.codigo, c.data, c.cpfCliente FROM Carrinho c, Item_Carrinho i, Produto p WHERE c.codigo = i.codCarrinho AND p.cnpj =".$_SESSION['id_usuario'];

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                        echo '<tr class="hoverable">';
                            echo '<td>' . $row["codigo"] . '</td>';
                            echo '<td>' . $row["data"] . '</td>';
                            echo '<td>' . $row["cpfCliente"] . '</td>';


                            //deve ser alterado
                            echo '<td align="center">
                                     <form name="formItem1" action="cli_produtos_car.php" method="POST">
                                            <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Cliente">edit</i></button>
                                            <input type="hidden" name="codCarrinho" value="'.$row["codigo"].'">
                                            </form>
                                         </td>'; 
                            

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
        }
    }
}
