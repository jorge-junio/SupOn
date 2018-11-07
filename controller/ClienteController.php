<?php

include_once '../DAO/clienteDAO.php';
include_once '../DAO/conexao.php';
include_once '../model/cliente.php';

class ClienteController {
    
    public function insereCliente() {
        //recuperando os dados do formulário
        $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);

        $conexao = new conexao();

        $cliente = new cliente();
        $cliente->setTipo("cli");
        $cliente->setCpf($cpf);
        $cliente->setNome($nome);
        $cliente->setEndereco($endereco);
        $cliente->setLogin($login);
        $cliente->setSenha($senha);

        $clienteDAO = new clienteDAO();
        $clienteDAO->adicionar($conexao, $cliente);
    }
    
    public function listaCliente() {
        $conexao = new conexao();
        $clienteDAO = new clienteDAO();
        $clienteDAO->listar($conexao);
    }

    public function excluiCliente() {
            $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_STRING);
            $conexao = new conexao();
            $cliente = new cliente();
            $cliente->setCpf($cpf);
            $clienteDAO = new clienteDAO();
            $clienteDAO->remover($conexao, $cliente);        
    }
    
    public function editaCliente() {
        $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
        
        $conexao = new conexao();       
        $cliente = new cliente();
        $cliente->setCpf($cpf);
        $cliente->setNome($nome);
        $cliente->setEndereco($endereco);
        $cliente->setLogin($login);
        $cliente->setSenha($senha);
        $clienteDAO = new clienteDAO();
        $clienteDAO->alterar($conexao, $cliente);
    }

    public function selecionaCliente($cpf) {
        $conexao = new conexao();
        $cliente = new cliente();
        $cliente->setCpf($cpf);
        $clienteDAO = new clienteDAO();
        return $clienteDAO->selecionar($conexao, $cliente);
         
    }
}

$cliente = new ClienteController();

// se apertou casdastar, $cadastrar recebe $_POST['cadastrar(name do input)']...
$cadastrar = filter_input(INPUT_POST,"cadastrar",FILTER_SANITIZE_STRING);
$excluir = filter_input(INPUT_POST,"excluir",FILTER_SANITIZE_STRING);
$editar = filter_input(INPUT_POST,"editar",FILTER_SANITIZE_STRING);
$direcionaListar = filter_input(INPUT_POST,"direcionaListar",FILTER_SANITIZE_STRING);

if (isset($cadastrar)) {
    $cliente->insereCliente();
    header("Location: ../view/listar_fun.php");
}

if (isset($excluir)) {
    $cliente->excluiCliente();
    header("Location: ../view/listar_fun.php");
}

if (isset($editar)) {
    $cliente->editaCliente();
    header("Location: ../view/listar_fun.php");
}

if (isset($direcionaListar)) {
    header("Location: ../view/listar_fun.php");
}