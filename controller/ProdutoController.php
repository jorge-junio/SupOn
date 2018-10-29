<?php

include_once '../../DAO/produtoDAO.php';
include_once '../../DAO/conexao.php';
include_once '../../model/produto.php';

class ProdutoController {
    
    public function insereProduto() {
    
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        var_dump($nome);
        $marca = filter_input(INPUT_POST,"marca",FILTER_SANITIZE_STRING);
        var_dump($marca);
        $preco = filter_input(INPUT_POST,"preco",FILTER_SANITIZE_STRING);
        var_dump($preco);
        $descricao = filter_input(INPUT_POST,"descricao",FILTER_SANITIZE_STRING);
        var_dump($descricao);
        
        $conexao = new conexao();
        $produto = new produto();
        $produto->setNome($nome);
        $produto->setMarca($marca);
        $produto->setCnpj($preco);
        $produto->setEndereco($descricao);
        $produtoDAO = new produtoDAO();
        $produtoDAO->adicionar($conexao, $produto);
    }
  
    public function listaProduto() {
        $conexao = new conexao();
        $produtoDAO = new produtoDAO();
        $produtoDAO->listar($conexao);
    }
 
    public function excluiProduto() {
        if($_POST['nome'] != ""){
            $nome = $_POST['nome'];
            $conexao = new conexao();
            $produto = new produto();
            $produto->setNome($nome);
            $produtoDAO = new produtoDAO();
            $produtoDAO->remover($conexao, $produto);
        }
        
    }
    
    public function editaProduto() {
        
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_POST,"marca",FILTER_SANITIZE_STRING);   
        $preco = filter_input(INPUT_POST,"preco",FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST,"descricao",FILTER_SANITIZE_STRING);
        
        $conexao = new conexao();       
        $produto = new produto();
        $produto->setNome($nome);
        $produto->setMarca($marca);
        $produto->setPreco($preco);
        $produto->setdescricao($descricao);
        $produtoDAO = new produtoDAO();
        $produtoDAO->alterar($conexao, $produto);
    }
}

