<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Informática
 */
class Usuario {

    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $rg;
    private $endereco;
    private $login;
    private $senha;

    public function __construct($id = null, $nome = null, $email = null, $cpf = null, $telefone = null, $rg = null, $endereco = null, $login = null, $senha = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

}
