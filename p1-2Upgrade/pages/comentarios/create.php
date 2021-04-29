<?php
session_start();

function publicar() {

  $comentario = $_POST['comentario'];

  $sql = 'insert into comentarios (comentario, id)
                          values (:comentario, :id)';

  $connection = connection();
  $result = $connection->prepare($sql);
  $result->bindValue(':comentario', $comentario);
  $result->bindValue(':id', isset($_SESSION['id']) ? $_SESSION['id'] : null);
  $result->execute();
}

if (isset($_POST['btnPublicar'])) {
  publicar();
}
