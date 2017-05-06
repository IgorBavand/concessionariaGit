<?php

  require './dao/DAOFactory.class.php';
  require './dao/GenericDAO.class.php';

  class VeiculoDAO extends GenericDAO {

    public function salvar(Veiculo $oVeiculo) {

      $this->conexao->beginTransaction();
      try {

        if (!$oVeiculo->getId()) { //Inserir um novo registro
          
          $query = $this->conexao->prepare("INSERT INTO veiculo (descricao, preco, modelo, fabricante) "
            . " values (:descricao, :preco, :modelo, :fabricante)");
          
        } else {//Alterar um registro existente

          $query = $this->conexao->prepare("UPDATE veiculo SET descricao = :descricao, "
            . "preco = :preco, modelo = :modelo, fabricante = :fabricante WHERE id = :id");
          #NOME NO BANCO DA TABELA veiculo
          $query->bindParam(':id', $oVeiculo->getId());
          
        }
        
        $query->bindParam(':descricao', $oVeiculo->getVeiculo());
        $query->bindParam(':preco', $oVeiculo->getPreco());
        $query->bindParam(':modelo', $oVeiculo->getModelo());
        $query->bindParam(':fabricante', $oVeiculo->getFabricante());
        $query->execute();        
        $this->conexao->commit();
        
        return TRUE;
        
      } catch (PDOException $ex) {

        $this->conexao->rollback();
        return FALSE;
        
      }
    }

    public function excluir($id) {

      $this->conexao->beginTransaction();
      try {

        if ($id > 0) { //Excluir veiculo
          $query = $this->conexao->prepare("DELETE FROM veiculo WHERE id = :id");
          $query->bindParam(':id', $id);
          $query->execute();
        }

        $this->conexao->commit();
        return TRUE;
      } catch (PDOException $ex) {

        $this->conexao->rollback();
        return FALSE;
      }
    }

    public function listar() {

      $this->conexao->beginTransaction();
      try {

        $query = $this->conexao->prepare("SELECT id, descricao,"
          . " modelo, preco, fabricante FROM veiculo");
        $query->execute();
        
        return $query->fetchALL(PDO::FETCH_CLASS, 'Veiculo');
        
        
      } catch (PDOException $ex) {

        $this->conexao->rollback();
        return NULL;
      }
    }

  }