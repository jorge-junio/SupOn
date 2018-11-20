<?php

include_once '../DAO/itemcarrinhoDAO.php';
include_once '../DAO/conexao.php';
include_once '../model/itemcarrinho.php';

class ProdutoController {

    public function insereItemCarrinho() {
    
        $codcarrinho = filter_input(INPUT_POST,"codcarrinho",FILTER_SANITIZE_STRING);
        $codproduto = filter_input(INPUT_POST,"codproduto",FILTER_SANITIZE_STRING);
        $qtdproduto = filter_input(INPUT_POST,"qtdproduto",FILTER_SANITIZE_STRING);
        $valorproduto = filter_input(INPUT_POST,"valorproduto",FILTER_SANITIZE_STRING);
        
        $conexao = new conexao();
        $itemcarrinho = new itemcarrinho();
        $itemcarrinho->setcodcarrinho($codcarrinho);
        $itemcarrinho->setcodproduto($codproduto);
        $itemcarrinho->setqtdproduto($qtdproduto);
        $itemcarrinho->setvalorproduto($valorproduto);
        $itemcarrinhoDAO = new itemcarrinhoDAO();
        $itemcarrinhoDAO->adicionar($conexao, $itemcarrinho);
    }
  
    public function listaItemCarrinho() {
        $conexao = new conexao();
        $itemcarrinhoDAO = new itemcarrinhoDAO();
        $itemcarrinhoDAO->listar($conexao);
    }
 
    public function excluiItemCarrinho() {
            $codigo = $_POST['codigo'];
            $conexao = new conexao();
            $itemcarrinho = new itemcarrinho();
            $itemcarrinho->setCodigo($codigo);
            $itemcarrinhoDAO = new itemcarrinhoDAO();
            $itemcarrinhoDAO->remover($conexao, $itemcarrinho);
        
    }
    
    public function editaItemCarrinho() {
        $codcarrinho = filter_input(INPUT_POST,"codcarrinho",FILTER_SANITIZE_STRING);
        $codproduto = filter_input(INPUT_POST,"codproduto",FILTER_SANITIZE_STRING);
        $qtdproduto = filter_input(INPUT_POST,"qtdproduto",FILTER_SANITIZE_STRING);
        $valorproduto = filter_input(INPUT_POST,"valorproduto",FILTER_SANITIZE_STRING);
                
        $conexao = new conexao();
        $itemcarrinho = new itemcarrinho();
        $itemcarrinho->setcodcarrinho($codcarrinho);
        $itemcarrinho->setcodproduto($codproduto);
        $itemcarrinho->setqtdproduto($qtdproduto);
        $itemcarrinho->setvalorproduto($valorproduto);
        $itemcarrinhoDAO = new itemcarrinhoDAO();
        $itemcarrinhoDAO->adicionar($conexao, $itemcarrinho);
        

    }

    public function selecionaCarrinho($codigo) {

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
}

$itemcarrinho = new ItemCarrinhoController();

// se apertou casdastar, $cadastrar recebe $_POST['cadastrar(name do input)']...
        $codigo = filter_input(INPUT_POST,"codigo",FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,"data",FILTER_SANITIZE_STRING);
        $cpfCliente = filter_input(INPUT_POST,"cpfCliente",FILTER_SANITIZE_STRING);
        $produtos = filter_input(INPUT_POST,"´produtos",FILTER_SANITIZE_STRING);

if (isset($cadastrar)) {
    $itemcarrinho->insereItemCarrinho();
    header("Location: ../view/listar_itemCarrinho.php");
}

if (isset($excluir)) {
    $itemcarrinho->excluiItemCarrinho();
    header("Location: ../view/listar_itemCarrinho.php");
}

if (isset($editar)) {
    $itemcarrinho->editaItemCarrinho();
    header("Location: ../view/listar_itemCarrinho.php");
}

if (isset($direcionaListar)) {
    header("Location: ../view/listar_itemCarrinho.php");
}
