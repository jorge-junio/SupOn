<?php

class produto{
    
    private $codigo, $nome, $marca, $descricao, $valor, $supermercado;
            
    function getCodigo() {
        return $this->codigo;
    }
    function getNome() {
        return $this->nome;
    }
    function getMarca() {
        return $this->marca;
    }
    function getDescricao() {
        return $this->descricao;
    }
    function getValor() {
        return $this->valor;
    }
    function getSupermercado() {
        return $this->supermercado;
    }
    
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setMarca($marca) {
        $this->marca = $marca;
    }
    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    function setValor($valor) {
        $this->valor = $valor;
    }
    function setSupermercado($supermercado) {
        $this->supermercado = $supermercado;
    }
   
    
    
}

