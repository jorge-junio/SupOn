<?php

include_once '../../DAO/clienteDAO.php';
include_once '../../DAO/conexao.php';
include_once '../../model/cliente.php';

class ClienteController {
    /*
    //done
    public function listaOptions() {
        $conexao = new conexao();
        $policialDao = new PolicialDao();
        $policialDao->listaSelect($conexao);
    }

    //done
    public function listaOptionsEdicao($idSubunidade) {
        $conexao = new conexao();
        $policialDao = new PolicialDao();
        $policialDao->listaSelectEdicao($conexao, $idSubunidade);
    }
*/

    //done
    public function insereCliente() {
        //recuperando os dados do formulário
        //$tipo = filter_input(INPUT_POST,"tipo",FILTER_SANITIZE_STRING);
        //var_dump($tipo);
        $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_STRING);
        var_dump($cpf);
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        var_dump($nome);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        var_dump($endereco);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        var_dump($login);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
        var_dump($senha);

        $conexao = new conexao();

        $cliente = new cliente();
        $cliente->setTipo($tipo);
        $cliente->setCpf($cpf);
        $cliente->setNome($nome);
        $cliente->setEndereco($endereco);
        $cliente->setLogin($login);
        $cliente->setSenha($senha);

        $clienteDAO = new clienteDAO();
        $clientelDAO->adicionar($conexao, $cliente);
    }
    //done
    public function listaCliente() {
        $conexao = new conexao();
        $clienteDAO = new clienteDAO();
        $clienteDAO->listar($conexao);
    }
    //done
    public function excluiCliente() {
        if($_POST['cpf'] != ""){
            $cpf = $_POST['cpf'];
            $conexao = new conexao();
            $cliente = new cliente();
            $cliente->setCpf($cpf);
            $clienteDAO = new clienteDAO();
            $clienteDAO->remover($conexao, $cliente);
        }
        
    }
    
    public function editaCliente() {

        //$tipo = filter_input(INPUT_POST,"tipo",FILTER_SANITIZE_STRING);
        //var_dump($email);
        $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_STRING);
        //var_dump($situacao);
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
        //var_dump($nome);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        //var_dump($patente);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        //var_dump($nome_funcional);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
        //var_dump($matricula);
        
        $conexao = new conexao();       
        $cliente = new cliente();
        $cliente->setTipo($tipo);
        $cliente->setCpf($cpf);
        $cliente->setNome($nome);
        $cliente->setEndereco($endereco);
        $cliente->setLogin($login);
        $cliente->setSenha($senha);
        $clienteDAO = new clienteDAO();
        $clienteDAO->alterar($conexao, $cliente);
    }
}

