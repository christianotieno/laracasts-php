<?php

class Connection {
  
  public static function make() {
    try {
  
      return new PDO('mysql:host=localhost;dbname=mytodo', 'christianotieno', 'Foothill431@'); 
    
    } catch (PDOExeption $e) {
    
      die($e->getMessage());
    
    }

  }
}
  

// $pdo = Connection::make();