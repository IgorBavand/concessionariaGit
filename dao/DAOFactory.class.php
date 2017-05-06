<?php

  
  class DAOFactory {
    
    public static function getUsuarioDAO(){
      return new UsuarioDAO();
    }
    
  }
  