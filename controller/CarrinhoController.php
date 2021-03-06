<?php

include_once '../DAO/carrinhoDAO.php';
include_once '../DAO/conexao.php';
//include_once '../model/carrinho.php';
include "ItemCarrinhoController.php";

class CarrinhoController {
    //codigo, $data, $cpfCliente, $produtos
    public function insereCarrinho() {
    
        $data = filter_input(INPUT_POST,"data",FILTER_SANITIZE_STRING);

        
        $conexao = new conexao();
        $carrinho = new carrinho();
        $carrinho->setData($data);
        $carrinho->setCpfCliente($_SESSION['id_usuario']);
        $carrinhoDAO = new carrinhoDAO();
        $carrinhoDAO->adicionar($conexao, $carrinho);
    }
  
    public function listaCarrinho() {
        $conexao = new conexao();
        $carrinhoDAO = new carrinhoDAO();
        $carrinhoDAO->listar($conexao);
    }
 
    public function excluiCarrinho() {
            $codigo = $_POST['codigo'];
            $conexao = new conexao();
            $carrinho = new carrinho();
            $carrinho->setCodigo($codigo);
            $carrinhoDAO = new carrinhoDAO();
            $carrinhoDAO->remover($conexao, $carrinho);
        
    }
    
    public function editaCarrinho() {
        $codigo = filter_input(INPUT_POST,"codigo",FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,"data",FILTER_SANITIZE_STRING);
        $cpfCliente = filter_input(INPUT_POST,"cpfCliente",FILTER_SANITIZE_STRING);
                
        $conexao = new conexao();
        $carrinho = new carrinho();
        $carrinho->setCodigo($codigo);
        $carrinho->setData($data);
        $carrinho->setCpfCliente($cpfCliente);
        $carrinhoDAO = new carrinhoDAO();
        $carrinhoDAO->alterar($conexao, $carrinho);
        

    }

    public function selecionaCarrinho($codigo) {

        $conexao = new conexao();
        $carrinho = new carrinho();
        $carrinho->setCodigo($codigo);
        $carrinhoDAO = new produtoDAO();
        return $carrinhoDAO->selecionar($conexao, $carrinho);
         
    }

    public function listaBusca($codCarrinho) {
        $conexao = new conexao();
        $carrinhoDAO = new carrinhoDAO();
        $carrinhoDAO->listarBusca($conexao, $codCarrinho);
    }
    
    
    public function finalizarCompra(carrinho $car){
        foreach($car->getProdutos() as $ic){
            $itemCarControl = new ItemCarrinhoController();
            $itemCarControl->insereItemCarrinho($ic);
            
        }
        $car->limpaProdutos();
            
    }
    
    public function adicionaAoCarrinho(){
        $codigo = filter_input(INPUT_POST,"codigo",FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,"data",FILTER_SANITIZE_STRING);
        $cpfCliente = filter_input(INPUT_POST,"cpfCliente",FILTER_SANITIZE_STRING);

        array_push($_SESSION["nomes"], $produto);
        array_push($_SESSION["nomes"], $produto);
        array_push($_SESSION["nomes"], $produto);
        
        $conexao = new conexao();
        $itemCarrinho = new itemCarrinho();
        $carrinho->setData($data);
        $carrinho->setCpfCliente($_SESSION['id_usuario']);
        $carrinhoDAO = new carrinhoDAO();
        $carrinhoDAO->adicionar($conexao, $carrinho);
    }
    
}

$carrinho = new CarrinhoController();

// se apertou casdastar, $cadastrar recebe $_POST['cadastrar(name do input)']...
        $codigo = filter_input(INPUT_POST,"codigo",FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,"data",FILTER_SANITIZE_STRING);
        $cpfCliente = filter_input(INPUT_POST,"cpfCliente",FILTER_SANITIZE_STRING);
        $adicionaAoCarrinho = filter_input(INPUT_POST,"adicionaAoCarrinho",FILTER_SANITIZE_STRING);
//fazer views e concertar
if (isset($cadastrar)) {
    $carrinho->insereCarrinho();
    header("Location: ../view/listar_carrinho.php");
}

if (isset($excluir)) {
    $carrinho->excluiCarrinho();
    header("Location: ../view/listar_carrinho.php");
}

if (isset($editar)) {
    $carrinho->editaCarrinho();
    header("Location: ../view/listar_carrinho.php");
}

if (isset($direcionaListar)) {
    header("Location: ../view/listar_carrinho.php");
}

if (isset($adicionaAoCarrinho)) {
    $carrinho->adicionaAoCarrinho();
    header("Location: ../view/home.php");
}