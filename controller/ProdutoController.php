<?php

include_once '../DAO/produtoDAO.php';
include_once '../DAO/conexao.php';
include_once '../model/produto.php';

class ProdutoController {
    
    public function insereProduto() {
    
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_POST,"marca",FILTER_SANITIZE_STRING);
        $valor = filter_input(INPUT_POST,"valor",FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST,"descricao",FILTER_SANITIZE_STRING);
        
        $conexao = new conexao();
        $produto = new produto();
        $produto->setNome($nome);
        $produto->setMarca($marca);
        $produto->setValor($valor);
        $produto->setDescricao($descricao);
        $produtoDAO = new produtoDAO();
        $produtoDAO->adicionar($conexao, $produto);
    }
  
    public function listaProduto() {
        $conexao = new conexao();
        $produtoDAO = new produtoDAO();
        $produtoDAO->listar($conexao);
    }
 
    public function excluiProduto() {
            $codigo = $_POST['codigo'];
            $conexao = new conexao();
            $produto = new produto();
            $produto->setCodigo($codigo);
            $produtoDAO = new produtoDAO();
            $produtoDAO->remover($conexao, $produto);
        
    }
    
    public function editaProduto() {
        $codigo = filter_input(INPUT_POST,"codigo",FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_POST,"marca",FILTER_SANITIZE_STRING);   
        $valor = (FLOAT) filter_input(INPUT_POST,"valor",FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST,"descricao",FILTER_SANITIZE_STRING);
        
        $conexao = new conexao();       
        $produto = new produto();
        $produto->setCodigo($codigo);
        $produto->setNome($nome);
        $produto->setMarca($marca);
        $produto->setValor($valor);
        $produto->setDescricao($descricao);
        $produtoDAO = new produtoDAO();
        $produtoDAO->alterar($conexao, $produto);
    }
}

$produto = new ProdutoController();

// se apertou casdastar, $cadastrar recebe $_POST['cadastrar(name do input)']...
$cadastrar = filter_input(INPUT_POST,"cadastrar",FILTER_SANITIZE_STRING);
$excluir = filter_input(INPUT_POST,"excluir",FILTER_SANITIZE_STRING);
$editar = filter_input(INPUT_POST,"editar",FILTER_SANITIZE_STRING);
$direcionaListar = filter_input(INPUT_POST,"direcionaListar",FILTER_SANITIZE_STRING);

if (isset($cadastrar)) {
    $produto->insereProduto();
    header("Location: ../view/listar_pro.php");
}

if (isset($excluir)) {
    $produto->excluiProduto();
    header("Location: ../view/listar_pro.php");
}

if (isset($editar)) {
    $produto->editaProduto();
    header("Location: ../view/listar_pro.php");
}

if (isset($direcionaListar)) {
    header("Location: ../view/listar_pro.php");
}