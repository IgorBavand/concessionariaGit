<?php
  
  require_once './dao/UsuarioDAO.class.php';
  //Controle Usuario
  
  switch ($acao) {

    case 'salvar':

      if (isset($_POST['nome'])) {
              
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $rg = $_POST['rg'];
        $endereco = $_POST['endereco'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $oPessoa = new Pessoa();
        $oPessoa->setNome($nome);
        $oPessoa->setNome($email);
        $oPessoa->setNome($cpf);
        $oPessoa->setTelefone($telefone);
        $oPessoa->setTelefone($rg);
        $oPessoa->setTelefone($endereco);
        $oPessoa->setTelefone($login);
        $oPessoa->setTelefone($senha);
           
        
        if (DAOFactory::getUsuarioDAO()->salvar($oPessoa)) {
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
        $resultado = DAOFactory::getUsuarioDAO()->excluir($idExcluir);
        if ($resultado) {
          echo "excluÃ­do com sucesso";
        } else {
          echo "nÃ£o foi possÃ­vel excluir";
        }
      }

      break;

    case 'listar':
            
      $lista = DAOFactory::getUsuarioDAO()->listar();
      
    // include './view/lista_usuario.php';
      break;

    case 'cad':

     // include './view/#';

      break;
  }