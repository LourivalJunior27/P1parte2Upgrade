<?php  // CONEXÃO

function connection() {
  try {
   $connection = new PDO('mysql:host=localhost;port=3306;dbname=p1','root','');    
    return $connection;
  } catch (Exception $error) {
    echo "Ocorreu o seguinte erro: {$error->getMessage()}";
  }
}
