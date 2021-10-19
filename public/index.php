<?php

  header('Content-Type: application/json');
  require_once realpath('../vendor/autoload.php');

  if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);

    if ($url[0] === 'api') {
      array_shift($url);

      $controller = 'Api\controllers\\'.ucfirst($url[0]).'Controller';
      array_shift($url);
      $method = strtolower($_SERVER['REQUEST_METHOD']);
      
      try {

        $response = call_user_func_array(array(new $controller, $method), $url); 
        echo json_encode(array('status' => 'sucess', 'data' => $response));
        exit;

      } catch (\Exception $e) {

        echo json_encode(array('status' => 'error', 'data' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
        exit;

      }
    }
  }
?>