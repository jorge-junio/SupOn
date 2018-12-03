<?php

include_once '../DAO/itemcarrinhoDAO.php';
include_once '../DAO/conexao.php';
include_once '../model/itemcarrinho.php';

class ItemCarrinhoController {
    
    public function insereItemCarrinho(itemCarrinho $itemcarrinho) {
        $conexao = new conexao();
        $itemcarrinhoDAO = new itemcarrinhoDAO();
        $itemcarrinhoDAO->adicionar($conexao, $itemcarrinho);
    }
  
    public function listaItemCarrinho($codCarrinho) {
        $conexao = new conexao();
        $itemCarrinhoDAO = new itemCarrinhoDAO();
        $itemCarrinhoDAO->listar($conexao, $codCarrinho);
    }
 
    public function excluiItemCarrinho() {
        $posicaoVetor = filter_input(INPUT_POST,"posicaoVetor",FILTER_SANITIZE_STRING);
        
        unset($_SESSION["codigoProduto"][$posicaoVetor]);
        unset($_SESSION["qtdProduto"][$posicaoVetor]);
        unset($_SESSION["precoProduto"][$posicaoVetor]);

        array_push($_SESSION["quantItemExcluidos"], $posicaoVetor);
    }
    
    public function editaItemCarrinho() {
        $posicaoVetor = filter_input(INPUT_POST,"posicaoVetor",FILTER_SANITIZE_STRING);
        $novaQuant = filter_input(INPUT_POST,"novaQuantidade",FILTER_SANITIZE_STRING);
    
        $_SESSION["qtdProduto"][$posicaoVetor] = $novaQuant;
    }

    public function selecionaItemCarrinho($codigo) {

        $conexao = new conexao();
        $itemcarrinho = new itemcarrinho();
        $itemcarrinho->setCodigo($codigo);
        $itemcarrinhoDAO = new produtoDAO();
        return $itemcarrinhoDAO->selecionar($conexao, $itemcarrinho);
         
    }

    public function listaBusca($codItemCarrinho) {
        $conexao = new conexao();
        $itemcarrinhoDAO = new itemcarrinhoDAO();
        $itemcarrinhoDAO->listarBusca($conexao, $codItemCarrinho);
    }

    public function adicionaAoCarrinho(){
        $codigo = filter_input(INPUT_POST,"codigo",FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST,"preco",FILTER_SANITIZE_STRING);
        $quantidadePro = filter_input(INPUT_POST,"quantidadePro",FILTER_SANITIZE_STRING);

        array_push($_SESSION["codigoProduto"], $codigo);
        array_push($_SESSION["qtdProduto"], $quantidadePro);
        array_push($_SESSION["precoProduto"], $preco);
    }

    public function listarProdutosNoCarrinho(){
        $conexao = new conexao();
        $itemCarrinhoDAO = new itemCarrinhoDAO();
        

        // Arrays simples:
        $count = count($_SESSION["codigoProduto"]) - 1;
        $count1 = count($_SESSION["quantItemExcluidos"]) - 1;

        echo " ---- Cadastrados no array: ".$_SESSION["codigoProduto"][0].", ";

        echo "Quantidade de Itens na Lista: ";
        echo $count;
        echo " >>>> quantidadeExc: ".$count1;
        echo " ---- Excluidos: ".$_SESSION["quantItemExcluidos"][1].", ".$_SESSION["quantItemExcluidos"][2];

        for ($i = 1; $i <= $count+1; $i++) {
            $imprime = true;
            for ($j=1; $j < $count1; $j++) { 
                if ($i == (INT) $_SESSION["quantItemExcluidos"][$j]) {
                    $imprime = false;
                    break;
                }
            }
            if ($imprime == true) {
                echo '<tr class="hoverable">';
                        echo '<td>' . $_SESSION["codigoProduto"][$i] . '</td>';
                        echo '<td>' . $itemCarrinhoDAO->getNomeNoBanco($conexao, $_SESSION["codigoProduto"][$i]) . '</td>';
                        echo '<td>' . $_SESSION["qtdProduto"][$i] . '</td>';
                        echo '<td>' . $_SESSION["precoProduto"][$i] . '</td>';

                        echo '<td align="center">
                                     <form name="formItem1" action="#openModalEdt" method="POST">
                                            <button type="submit" name="editar1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Editar Quantidade Deste Item">edit</i></button>
                                            <input type="hidden" name="posicaoVetor" value="'.$i.'">
                                            </form>
                                         </td>';

                        echo '<td align="center">
                                     <form name="formItem1" action="#openModalExc" method="POST">
                                            <button type="submit" name="excluir1" value="" class="btn-primary" style="color: #4488FF;"><i class="material-icons prefix" title="Excluir Item">cancel</i></button>
                                            <input type="hidden" name="posicaoVetor" value="'.$i.'">
                                            </form>
                                         </td>';
            }
        }

        include 'modal_itemCar.php';
        include 'modal_itemCar_excluir.php';
    }

}

$itemcarrinho = new ItemCarrinhoController();

// se apertou casdastar, $cadastrar recebe $_POST['cadastrar(name do input)']...
        $excluir = filter_input(INPUT_POST,"excluir",FILTER_SANITIZE_STRING);
        $editar = filter_input(INPUT_POST,"editar",FILTER_SANITIZE_STRING);
        $adicionaAoCarrinho = filter_input(INPUT_POST,"adicionaAoCarrinho",FILTER_SANITIZE_STRING);
        $direcionaHome = filter_input(INPUT_POST,"direcionaHome",FILTER_SANITIZE_STRING);

if (isset($excluir)) {
    $itemcarrinho->excluiItemCarrinho();
    header("Location: ../view/cli_carrinho.php");
}

if (isset($editar)) {
    $itemcarrinho->editaItemCarrinho();
    header("Location: ../view/cli_carrinho.php");
}

if (isset($adicionaAoCarrinho)) {
    $itemcarrinho->adicionaAoCarrinho();
    header("Location: ../view/home.php");
}

if (isset($direcionaHome)) {
    header("Location: ../view/home.php");
}





if (isset($direcionaListar)) {
    header("Location: ../view/listar_itemCarrinho.php");
}

if (isset($cadastrar)) {
    $itemcarrinho->insereItemCarrinho();
    header("Location: ../view/listar_itemCarrinho.php");
}


