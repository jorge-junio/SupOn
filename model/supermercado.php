<?php

class supermercado{
    
   private $cnpj, $nomeFantasia, $nomeOficial, $endereco, $login, $senha, $distanciaMax, $valorMinimo;
   
    function getCnpj() {
        return $this->cnpj;
    }
    function getNomeFantasia() {
        return $this->nomeFantasia;
    }
    function getNomeOficial() {
        return $this->nomeOficial;
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
    function getDistanciaMax() {
        return $this->distanciaMax;
    }
    function getValorMinimo() {
        return $this->valorMinimo;
    }
    
    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }
    function setNomeOficial($nomeOficial) {
        $this->nomeOficial = $nomeOficial;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    function setLogin($login) {
        $this->login = $login;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }
    function setDistanciaMax($distanciaMax) {
        $this->distanciaMax = $distanciaMax;
    }
    function setValorMinimo($valorMinimo) {
        $this->valorMinimo = $valorMinimo;
    }

}

