<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Veiculo{
    private $id;
    private $descricao;
    private $preco;
    private $modelo;
    private $fabricante;
    
        public function __construct($id = null, $descricao = null, $preco = null, $modelo = null, $fabricante = null) {
        $this->id = $id;
        $this->nome = $descricao;
        $this->email = $preco;
        $this->cpf = $modelo;
        $this->telefone = $fabricante;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreco() {
        return $this->preco;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }


}
