<?php

include_once '../../DAO/supermercadoDAO.php';
include_once '../../DAO/conexao.php';
include_once '../../model/supermercado.php';

class SupermercadoController {
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
    public function insereSupermercado() {
        //recuperando os dados do formulário
        //$tipo = filter_input(INPUT_POST,"tipo",FILTER_SANITIZE_STRING);
        //var_dump($tipo);

        
        $nomeF = filter_input(INPUT_POST,"nomeF",FILTER_SANITIZE_STRING);
        var_dump($nomeF);
        $nomeO = filter_input(INPUT_POST,"nomeO",FILTER_SANITIZE_STRING);
        var_dump($nomeO);
        $cnpj = filter_input(INPUT_POST,"cnpj",FILTER_SANITIZE_STRING);
        var_dump($cnpj);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_STRING);
        var_dump($endereco);
        $login = filter_input(INPUT_POST,"login",FILTER_SANITIZE_STRING);
        var_dump($login);
        $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
        var_dump($senha);
        $valorMaximoDistancia = filter_input(INPUT_POST,"valorMaximoDistancia",FILTER_SANITIZE_STRING);
        var_dump($valorMaximoDistancia);
        $valorMinimoPreco = filter_input(INPUT_POST,"valorMinimoPreco",FILTER_SANITIZE_STRING);
        var_dump($valorMinimoPreco);

        $conexao = new conexao();

        $supermercado = new supermercado();
        $supermercado->setNomeFantasia($nomeF);
        $supermercado->setNomeOficial($nomeF);
        $supermercado->setCnpj($cnpj);
        $supermercado->setEndereco($endereco);
        $supermercado->setLogin($login);
        $supermercado->setSenha($senha);
        $supermercado->setDistanciaMax($valorMaximoDistancia);
        $supermercado->setValorMin($valorMinimoPreco);

        $supermercadoDAO = new supermercadoDAO();
        $supermercadolDAO->adicionar($conexao, $supermercado);
    }
    //done
    public function listaSupermercado() {
        $conexao = new conexao();
        $supermercadoDAO = new supermercadoDAO();
        $supermercadoDAO->listar($conexao);
    }
    //done
    public function excluiSupermercado() {
        if($_POST['cnpj'] != ""){
            $cnpj = $_POST['cnpj'];
            $conexao = new conexao();
            $supermercado = new supermercado();
            $supermercado->setCpf($cnpj);
            $supermercadoDAO = new supermercadoDAO();
            $supermercadoDAO->remover($conexao, $supermercado);
        }
        
    }
    
    public function editaSupermercado() {

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
        $supermercado = new supermercado();
        $supermercado->setNomeFantasia($nomeF);
        $supermercado->setNomeOficial($nomeF);
        $supermercado->setCnpj($cnpj);
        $supermercado->setEndereco($endereco);
        $supermercado->setLogin($login);
        $supermercado->setSenha($senha);
        $supermercado->setDistanciaMax($valorMaximoDistancia);
        $supermercado->setValorMin($valorMinimoPreco);
        $supermercadoDAO = new supermercadoDAO();
        $supermercadoDAO->alterar($conexao, $supermercado);
    }
}

