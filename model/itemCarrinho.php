<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of itemCarrinho
 *
 * @author Aluno
 */
class itemCarrinho {
    private $codCarrinho, $codProduto, $qtdProduto, $valorProduto;
    function getCodCarrinho() {
        return $this->codCarrinho;
    }

    function getCodProduto() {
        return $this->codProduto;
    }

    function getQtdProduto() {
        return $this->qtdProduto;
    }

    function getValorProduto() {
        return $this->valorProduto;
    }

    function setCodCarrinho($codCarrinho) {
        $this->codCarrinho = $codCarrinho;
    }

    function setCodProduto($codProduto) {
        $this->codProduto = $codProduto;
    }

    function setQtdProduto($qtdProduto) {
        $this->qtdProduto = $qtdProduto;
    }

    function setValorProduto($valorProduto) {
        $this->valorProduto = $valorProduto;
    }

}
