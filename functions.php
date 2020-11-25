<?php


function connectToDb() {
  
  try {
  
    return new PDO('mysql:host=localhost;dbname=mytodo', 'christianotieno', 'Foothill431@'); 
  
  } catch (PDOExeption $e) {
  
    die($e->getMessage());
  
  }
}

function fetchAllTasks($pdo) {

  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}


function dd($data) {
  die(var_dump($data));
}