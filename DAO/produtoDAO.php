<?php
//valida a sessão
include "../valida.php";

class produtoDAO{
    
    function adicionar(conexao $con, produto $pro){
         if ($pro->getNome() != ''){
            
            $consulta = "INSERT INTO Produto(nome, marca, preco, descricao, quantidade, cnpj) VALUES
                ('{$pro->getNome()}', '{$pro->getMarca()}', '{$pro->getValor()}', '{$pro->getDescricao()}', '{$pro->getQtd()}', '{$pro->getSupermercado()}');";

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
     
    function remover(conexao $con, produto $pro){
        if($pro->getCodigo() > 0){
            $consulta = "DELETE FROM Produto WHERE codigo = '{$pro->getCodigo()}'";
            
            $verifica = $con->conecta();
            $verifica->query($consulta);

            if (($verifica->affected_rows) > 0) {
                $_SESSION['message'] = 'Registro removido com sucesso.';
                $_SESSION['type'] = 'green';
                $_SESSION['ativaMsg'] = 1;
            } else {
                $_SESSION['message'] = 'Registro não removido no sistema';
                $_SESSION['type'] = 'red';
                $_SESSION['ativaMsg'] = 1;
            }
        }
    }
    
    function listar(conexao $con){
        if ($_SESSION['permissao'] == "adm") {
            //$consulta = "SELECT codigo, nome, marca, preco, descricao, quantidade, cnpj FROM Produto";

            $consulta = "SELECT p.codigo, p.nome, p.marca, p.preco, p.descricao, p.quantidade, s.nomeF FROM Produto p, Supermercado s WHERE p.cnpj = s.cnpj";

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr class="hoverable">';
                        echo '<td>' . $row["codigo"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["marca"] . '</td>';
                        echo '<td>' . $row["descricao"] . '</td>';
                        echo '<td>' . $row["quantidade"] . '</td>';
                        echo '<td>' . $row["preco"] . '</td>';
                        echo '<td>' . $row["nomeF"] . '</td>';

                        
                        echo '<td align="center">
                                 <form name="formItem1" action="../view/editar_pro.php" method="POST">
                                        <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Produto">edit</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';

                        /*echo '<td align="center">
                                 <form name="formItem1" action="../view/excluir_pro.php" method="POST">
                                        <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';*/

                        echo '<td align="center">
                                 <form name="formItem1" action="#openModal" method="POST">
                                        <button type="submit" name="excluir2" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';
                }
            }
        
            include 'cli_modal_quantidade.php'; 
            include 'modal_pro.php';
        }elseif ($_SESSION['permissao'] == "sup") {
            //$consulta = "SELECT codigo, nome, marca, preco, descricao, quantidade, cnpj FROM Produto";

            $consulta = "SELECT p.codigo, p.nome, p.marca, p.preco, p.descricao, p.quantidade, s.nomeF FROM Produto p, Supermercado s WHERE p.cnpj = s.cnpj AND s.cnpj = ".$_SESSION['id_usuario'];

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr class="hoverable">';
                        echo '<td>' . $row["codigo"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["marca"] . '</td>';
                        echo '<td>' . $row["descricao"] . '</td>';
                        echo '<td>' . $row["quantidade"] . '</td>';
                        echo '<td>' . $row["preco"] . '</td>';
                        echo '<td>' . $row["nomeF"] . '</td>';

                        
                        echo '<td align="center">
                                 <form name="formItem1" action="../view/editar_pro.php" method="POST">
                                        <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Produto">edit</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';

                        /*echo '<td align="center">
                                 <form name="formItem1" action="../view/excluir_pro.php" method="POST">
                                        <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';*/

                        echo '<td align="center">
                                 <form name="formItem1" action="#openModal" method="POST">
                                        <button type="submit" name="excluir2" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';
                }
            }
        
            
           include 'modal_pro.php';
        }
    }
    
    function alterar(conexao $con, produto $pro){
        $consulta = "UPDATE Produto SET nome = '{$pro->getNome()}', marca = '{$pro->getMarca()}', descricao = '{$pro->getDescricao()}', 
            preco = '{$pro->getValor()}', quantidade = '{$pro->getQtd()}' WHERE codigo = '{$pro->getCodigo()}' ";
        
        $verifica = $con->conecta();
        $verifica->query($consulta);
            
        if (($verifica->affected_rows) > 0) {
            $_SESSION['message'] = 'Registro alterado com sucesso.';
            $_SESSION['type'] = 'green';
                $_SESSION['ativaMsg'] = 1;
        } else {
            $_SESSION['message'] = 'Registro não alterado no sistema';
            $_SESSION['type'] = 'red';
                $_SESSION['ativaMsg'] = 1;
        }
    }

    function selecionar(conexao $con, produto $pro){
        $consulta = "SELECT nome, marca, preco, descricao, quantidade, cnpj FROM Produto WHERE codigo = '{$pro->getCodigo()}'";
        $result = mysqli_query($con->conecta(), $consulta);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pro->setNome($row["nome"]);
                $pro->setMarca($row["marca"]);
                $pro->setValor($row["preco"]);
                $pro->setDescricao($row["descricao"]);
                $pro->setQtd($row["quantidade"]);
                $pro->setSupermercado($row["cnpj"]);
            }
        }
        return $pro;
    }

    function listarBusca(conexao $con, $nome){

        if ($_SESSION['permissao'] == "cli") {
            $consulta = "SELECT p.codigo, p.nome, p.marca, p.preco, p.descricao, p.quantidade, s.nomeF FROM Produto p, Supermercado s WHERE p.nome = '$nome' AND p.cnpj = s.cnpj";

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr class="hoverable">';
                        echo '<td>' . $row["codigo"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["marca"] . '</td>';
                        echo '<td>' . $row["descricao"] . '</td>';
                        echo '<td>' . $row["quantidade"] . '</td>';
                        echo '<td>' . $row["preco"] . '</td>';
                        echo '<td>' . $row["nomeF"] . '</td>';

                        
                        echo '<td align="center">
                                 <form name="formItem1" action="#" method="POST">
                                        <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Produto">add_shopping_cart</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';

                        /*echo '<td align="center">
                                 <form name="formItem1" action="../view/excluir_pro.php" method="POST">
                                        <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';*/

                        /*echo '<td align="center">
                                 <form name="formItem1" action="#openModal" method="POST">
                                        <button type="submit" name="excluir2" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';*/
                }
            }
        
            
           //include 'modal_pro.php';
        }elseif ($_SESSION['permissao'] == "adm") {
            $consulta = "SELECT p.codigo, p.nome, p.marca, p.preco, p.descricao, p.quantidade, s.nomeF FROM Produto p, Supermercado s WHERE p.nome = '$nome' AND p.cnpj = s.cnpj";

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr class="hoverable">';
                        echo '<td>' . $row["codigo"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["marca"] . '</td>';
                        echo '<td>' . $row["descricao"] . '</td>';
                        echo '<td>' . $row["quantidade"] . '</td>';
                        echo '<td>' . $row["preco"] . '</td>';
                        echo '<td>' . $row["nomeF"] . '</td>';

                        
                        echo '<td align="center">
                                 <form name="formItem1" action="../view/editar_pro.php" method="POST">
                                        <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Produto">edit</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';

                        echo '<td align="center">
                                 <form name="formItem1" action="#openModal" method="POST">
                                        <button type="submit" name="excluir2" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';
                }
            }
        
            
           include 'modal_pro.php';
        }elseif ($_SESSION['permissao'] == "sup") {
            $cnpj1 = $_SESSION['id_usuario'];
            //$consulta = "SELECT p.codigo, p.nome, p.marca, p.preco, p.descricao, p.quantidade, s.nomeF FROM Produto p WHERE p.nome = '$nome' AND p.cnpj = '$cnpj1'";

            $consulta = "SELECT p.codigo, p.nome, p.marca, p.preco, p.descricao, p.quantidade, s.nomeF FROM Produto p, Supermercado s WHERE p.nome = '$nome' AND p.cnpj = s.cnpj AND s.cnpj = ".$_SESSION['id_usuario'];

            $result = mysqli_query($con->conecta(), $consulta);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr class="hoverable">';
                        echo '<td>' . $row["codigo"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["marca"] . '</td>';
                        echo '<td>' . $row["descricao"] . '</td>';
                        echo '<td>' . $row["quantidade"] . '</td>';
                        echo '<td>' . $row["preco"] . '</td>';
                        echo '<td>' . $row["nomeF"] . '</td>';

                        
                        echo '<td align="center">
                                 <form name="formItem1" action="../view/editar_pro.php" method="POST">
                                        <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Produto">edit</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';

                        /*echo '<td align="center">
                                 <form name="formItem1" action="../view/excluir_pro.php" method="POST">
                                        <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';*/

                        echo '<td align="center">
                                 <form name="formItem1" action="#openModal" method="POST">
                                        <button type="submit" name="excluir2" value="" class="btn-primary" style="color: #FF0000;"><i class="material-icons prefix" title="Excluir Produto">delete</i></button>
                                        <input type="hidden" name="codigo" value="'.$row["codigo"].'">
                                        </form>
                                     </td>';
                }
            }
        
            
           include 'modal_pro.php';
        }
        
    }
}




