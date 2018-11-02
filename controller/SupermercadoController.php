<?php

include_once '../DAO/supermercadoDAO.php';
include_once '../DAO/conexao.php';
include_once '../model/supermercado.php';

class SupermercadoController {
    public function insereSupermercado() {

        $nomeF = filter_input(INPUT_POST,"nomeF",FILTER_SANITIZE_STRING);
        $nomeO = filter_input(INPUT_POST,"nomeO",FILTER_SANITIZE_STRING);
        $cnpj = filter_input(INPUT_POST,"cnpj",FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
        $valorMaximoDistancia = filter_input(INPUT_POST,"valorMaximoDistancia",FILTER_SANITIZE_STRING);
        $valorMinimoPreco = filter_input(INPUT_POST,"valorMinimoPreco",FILTER_SANITIZE_STRING);

        $conexao = new conexao();

        $supermercado = new supermercado();
        $supermercado->setNomeFantasia($nomeF);
        $supermercado->setNomeOficial($nomeF);
        $supermercado->setCnpj($cnpj);
        $supermercado->setEndereco($endereco);
        $supermercado->setLogin($login);
        $supermercado->setSenha($senha);
        $supermercado->setDistanciaMax($valorMaximoDistancia);
        $supermercado->setValorMinimo($valorMinimoPreco);

        $supermercadoDAO = new supermercadoDAO();
        $supermercadoDAO->adicionar($conexao, $supermercado);
    }
    
    public function listaSupermercado() {
        $conexao = new conexao();
        $supermercadoDAO = new supermercadoDAO();
        $supermercadoDAO->listar($conexao);
    }
    
    public function excluiSupermercado() {
            $cnpj = $_POST['cnpj'];
            $conexao = new conexao();
            $supermercado = new supermercado();
            $supermercado->setCnpj($cnpj);
            $supermercadoDAO = new supermercadoDAO();
            $supermercadoDAO->remover($conexao, $supermercado);
    }
    
    public function editaSupermercado() {
        $nomeF = filter_input(INPUT_POST,"nomeF",FILTER_SANITIZE_STRING);
        $nomeO = filter_input(INPUT_POST,"nomeO",FILTER_SANITIZE_STRING);
        $cnpj = filter_input(INPUT_POST,"cnpj",FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
        $valorMaximoDistancia = filter_input(INPUT_POST,"valorMaximoDistancia",FILTER_SANITIZE_STRING);
        $valorMinimoPreco = filter_input(INPUT_POST,"valorMinimoPreco",FILTER_SANITIZE_STRING);
        
        $conexao = new conexao();       
        $supermercado = new supermercado();
        $supermercado->setNomeFantasia($nomeF);
        $supermercado->setNomeOficial($nomeO);
        $supermercado->setCnpj($cnpj);
        $supermercado->setEndereco($endereco);
        $supermercado->setLogin($login);
        $supermercado->setSenha($senha);
        $supermercado->setDistanciaMax($valorMaximoDistancia);
        $supermercado->setValorMinimo($valorMinimoPreco);
        $supermercadoDAO = new supermercadoDAO();
        $supermercadoDAO->alterar($conexao, $supermercado);
    }

    public function selecionaSupermercado($cnpj) {
        $conexao = new conexao();
        $supermercado = new supermercado();
        $supermercado->setCnpj($cnpj);
        $supermercadoDAO = new supermercadoDAO();
        return $supermercadoDAO->selecionar($conexao, $supermercado);
         
    }
}

$supermercado = new SupermercadoController();

// se apertou casdastar, $cadastrar recebe $_POST['cadastrar(name do input)']...
$cadastrar = filter_input(INPUT_POST,"cadastrar",FILTER_SANITIZE_STRING);
$excluir = filter_input(INPUT_POST,"excluir",FILTER_SANITIZE_STRING);
$editar = filter_input(INPUT_POST,"editar",FILTER_SANITIZE_STRING);
$direcionaListar = filter_input(INPUT_POST,"direcionaListar",FILTER_SANITIZE_STRING);

if (isset($cadastrar)) {
    $supermercado->insereSupermercado();
    header("Location: ../view/listar_sup.php");
}

if (isset($excluir)) {
    $supermercado->excluiSupermercado();
    header("Location: ../view/listar_sup.php");
}

if (isset($editar)) {
    $supermercado->editaSupermercado();
    header("Location: ../view/listar_sup.php");
}

if (isset($direcionaListar)) {
    header("Location: ../view/listar_sup.php");
}