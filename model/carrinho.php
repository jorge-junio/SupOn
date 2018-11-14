<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carrinho
 *
 * @author Aluno
 */
class carrinho {
    private $codigo, $data, $cpfCliente, $produtos = Array();
    
    function getCodigo() {
        return $this->codigo;
    }

    function getData() {
        return $this->data;
    }

    function getCpfCliente() {
        return $this->cpfCliente;
    }

    function getProdutos() {
        return $this->produtos;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setCpfCliente($cpfCliente) {
        $this->cpfCliente = $cpfCliente;
    }

    function setProdutos($produtos) {
        $this->produtos = $produtos;
    }


}
