<?php


  require './dao/DAOFactory.class.php';
  require './dao/GenericDAO.class.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author Informática
 */
class UsuarioDAO extends GenericDAO{

public function salvar(Usuario $oUsuario){
    $this->conexao->beginTransaction();
    try{
    if($oUsuario->getId()){
        $query = $this->db->prepare("INSERT INTO usuario(nome, email, cpf, telefone, rg, endereco, login, senha) "
        . "VALUES(:nome, :email, :cpf, :telefone, :rg, :endereco, :login, :senha)");
        $query->bindparam(":nome", $oUsuario->getNome());
        $query->bindparam(":email", $oUsuario->getEmail());
        $query->bindparam(":cpf", $oUsuario->getCpf());
        $query->bindparam(":telefone", $oUsuario->getTelefone());
        $query->bindparam(":rg", $oUsuario->setCpf());
        $query->bindparam(":endereco", $oUsuario->getEndereco());
        $query->bindparam(":login", $oUsuario->getLogin());
        $query->bindparam(":senha", $oUsuario->getSenha());
        $query->execute();
        $oUsuario->setId($this->conexao->lastInsertId());
    }else{
        $query = $this->db->prepare("UPDATE usuario SET(nome = :nome, email = :email, cpf = :cpf, telefone = :telefone, rg = :rg, endereco = :endereco, login = :login, senha = :senha");
        $query->bindparam(":nome", $oUsuario->getNome());
        $query->bindparam(":email", $oUsuario->getEmail());
        $query->bindparam(":cpf", $oUsuario->getCpf());
        $query->bindparam(":telefone", $oUsuario->getTelefone());
        $query->bindparam(":rg", $oUsuario->setCpf());
        $query->bindparam(":endereco", $oUsuario->getEndereco());
        $query->bindparam(":login", $oUsuario->getLogin());
        $query->bindparam(":senha", $oUsuario->getSenha());
        $query->execute();
        $oUsuario->setId($this->conexao->lastInsertId());

}
$this->conexao->commit();
 return $oUsuario;
        
}catch (PDOException $ex) {
        
        $this->conexao->rollback();
        return $oUsuario;
        
      
    }
  }public function excluir() {
        try {
            $this->banco->beginTransaction();
            $consulta = $this->banco->prepare("DELETE FROM usuario WHERE id = :id");
            $consulta->bindParam(":id", $this->getID());
            $consulta->execute();
            $this->banco->commit();
            return TRUE;
        } catch (PDOException $e) {
            $this->banco->rollback();
            return FALSE;
        }
    }
}





