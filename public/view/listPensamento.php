<?php
  $url = "http://localhost/pensamento/public/api/pensamento";
  $response = file_get_contents($url);
  $result = json_decode($response, 1);
?>

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <!-- Bootstrap CSS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

      <!-- CSS -->
      <link rel="stylesheet" href="../style/index.css">
      <link rel="stylesheet" href="../style//listPensamento.css">
      <title>Meus Pensamentos</title>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>Listar <br> Pensamentos </h1>
      </header>
      <br>
      <main class="main">
        <div class="data-gridview">
          <div class="input-group flex-nowrap search-input">
            <input type="text" name="username" class="form-control " placeholder="Nome"/>
            <img src="../img/search.png" width="40px" height="40px" alt="">
          </div>
          
          <table class="table-pensamento">
            <tr>
              <td>Id</td>
              <td>Nome</td>
              <td>Grupo Social</td>
              <td>Pensamento</td>
              <td>Editar</td>
              <td>Deletar</td>
            </tr>
            <?php 
              $ids = array();
              $usernames = array();
              $grupoSociais = array();
              $pensamentos = array();
              
              array_walk_recursive($result, function($item, $key) {
                  global $ids;
                  global $usernames;
                  global $grupoSociais;
                  global $pensamentos;

                  if($key == "id_pensamento")
                    $ids[] = $item;

                  if($key == "nm_username")
                    $usernames[] = $item;

                  if($key == "ds_gpsocial")
                    $grupoSociais[] = $item;

                  if($key == "ds_pensamento")
                    $pensamentos[] = $item;
              });

              for($line = 0; $line <= count($ids); $line++){
                 if(isset($ids[$line])){
                   echo "<tr>";
                   echo "<td>".$ids[$line]."</td>";
                   echo "<td>".$usernames[$line]."</td>";
                   echo "<td>".$grupoSociais[$line]."</td>";
                   echo "<td>".$pensamentos[$line]."</td>";
                   echo "<td><a id='update' href=\"edit.php?id=.$ids[$line]\">Editar</a></td>";
                   echo "<td><a id='delete' href=\"deletePensamento.php?id=$ids[$line]\" onClick=\"return confirm('Are you sure you want to delete?')\">Deletar</a></td>";
                 }
              }
            ?>
          </table>
        </div>
      </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>