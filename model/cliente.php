<?php

class cliente{
    public $cpf, $nome, $endereco, $login, $senha;
    
     function getCpf() {
        return $this->cpf;
    }
    function getNome() {
        return $this->nome;
    }
    function getEndereco() {
        return $this->endereco;
    }
    function getLogin() {
        return $this->login;
    }
    function getSenha() {
        return $this->senha;
    }
   
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    function setLogin($login) {
        $this->login = $login;
    }
    function setSenha($senha) {
        $this->senha = senha;
    }     
}

