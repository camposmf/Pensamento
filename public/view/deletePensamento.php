<?php 
  header('Content-Type: application/json');
  require_once realpath('../vendor/autoload.php');
  
  use Api\controllers\PensamentoController;

  $id = $_GET['id'];
  var_dump($id);

  $controller = new PensamentoController;
  $controller->delete($id);
  header('Location: listPensamento.php');
?>