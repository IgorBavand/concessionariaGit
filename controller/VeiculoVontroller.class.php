<?php
  
  require_once './dao/VeiculoDAO.class.php';
  //Controle Usuario
  
  switch ($acao) {

    case 'salvar':

      if (isset($_POST['descricao'])) {
              
        $nome = $_POST['descricao'];
        $email = $_POST['modelo'];
        $cpf = $_POST['preco'];
        $telefone = $_POST['fabricante'];
        

        $oVeiculo = new Veiculo();
        $oVeiculo->setDescricao($Descricao);
        $oVeiculo->setPreco($preco);
        $oVeiculo->setModelo($modelo);
        $oVeiculo->setFabricante($fabricante);
      
           
        
        if (DAOFactory::getUsuarioDAO()->salvar($oVeiculo)) {
          $cod = 100;
        } else {
          $cod = 102;
        }
        #prestar atenção aqui
        header('Location: index.php?area=pessoa&acao=cad&cod='.$cod);
      }


      break;

    case 'excluir':

      if ($_GET['id']) {                
        
        $idExcluir = $_GET['id'];
        $resultado = DAOFactory::getVeiculoDAO()->excluir($idExcluir);
        if ($resultado) {
          echo "excluÃ­do com sucesso";
        } else {
          echo "nÃ£o foi possÃ­vel excluir";
        }
      }

      break;

    case 'listar':
            
      $lista = DAOFactory::getVeiculoDAO()->listar();
      
    // include './view da listagem
      break;

    case 'cad':

     // include './view do cadastro

      break;
  }