<?php

function delete() {

  $id = $_POST['btnExcluir'];

  $sql = "delete from comentarios where idComentario = :id";

  $connection = connection();
  $result = $connection->prepare($sql);
  $result->bindValue(':id', intval($id));
  $result->execute();
}

if (isset($_POST['btnExcluir']) && !empty($_SESSION['id'])) {
  delete();
}
