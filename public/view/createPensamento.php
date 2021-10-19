<!doctype html>
<html lang="pt">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

      <!-- Css -->
      <link rel="stylesheet" href="../style/index.css">

      <title>Meus Pensamentos</title>
  </head>
  <body>
      <div class="container">
          <header class="header">
            <div class="page-controller">
              <a href="index.php" style="background-color: #0d6efd; color: white">Voltar</a>
              <a href="listPensamento.php" style="background-color: rgba(34,177,76); color: white">Avançar</a>
            </div>
            <h1>Registrar <br> Pensamentos </h1>
          </header>

          <main class="main">
            <form id="formCreation" action="createPensamento.php" method="post">
              <div class="input-group flex-nowrap inputs">
                <input type="text" name="username" class="form-control " placeholder="Username"/>
              </div>
                      
              <div class="input-group flex-nowrap inputs">
                <select class="form-select" name="description" aria-label="Default select example">
                  <option selected>Pensamento</option>
                  <option value="1">Felicidade</option>
                  <option value="2">Alegria</option>
                  <option value="3">Abnegação</option>
                  <option value="4">Amor</option>
                  <option value="5">Caridade</option>
                  <option value="6">Compreensão</option>
                  <option value="7">Confiança</option>
                  <option value="8">Coragem</option>
                  <option value="9">Desprendimento</option>
                  <option value="10">Entusiasmo</option>
                  <option value="11">Gentileza</option>
                  <option value="12">Gratidão</option>
                  <option value="13">Humildade</option>
                  <option value="14">Otimismo</option>
                  <option value="15">Perdão</option>
                  <option value="16">Perseverança</option>
                  <option value="17">Renúncia</option>
                  <option value="18">Serenidade</option>
                </select>
              </div>

              <div class="input-group flex-nowrap inputs">
                <select class="form-select" name="socialGroup" aria-label="Default select example">
                  <option selected>Grupo Social</option>
                  <option value="1">Amigos</option>
                  <option value="2">Bens Materiais</option>
                  <option value="3">Escola</option>
                  <option value="4">Eu</option>
                  <option value="5">Escola</option>
                  <option value="6">Meu próximo</option>
                  <option value="7">Namorado(a)</option>
                  <option value="8">Órgãos públicos e privados</option>
                  <option value="9">Politica</option>
                  <option value="10">Regiliosidade</option>
                  <option value="11">Trabalho</option>
                  <option value="12">Transporte</option>
                </select>
              </div>
            </main>
            
            <footer class="footer backToIndex">
              <input type="hidden" name="id">
              <button type="submit" onClick="return alert('Novo pensamento registrado com êxito')" name = "submit" class="btn submitButton">Salvar</button>
            </footer>
          </form>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>

