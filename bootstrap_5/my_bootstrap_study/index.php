<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">

  <title>Painel CMS!</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue-default">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto" id="navbar">
            <a class="nav-link active" aria-current="page" href="#">Sobre</a>
            <a class="nav-link" href="#">Cadastrar Equipe</a>
            <a class="nav-link" href="#">Membros Equipe</a>
          </div>
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="?sair">Sair</a>
          </div>
        </div>
      </div>
    </nav>
    <div id="header" class="bg-dark">
      <div class="container text-light">
        <div class="black-belt row align-items-center">
          <div class="col-8">
            <h1><i class="bi bi-gear-fill pt-1"></i> Painel de controle</h1>
          </div>
          <div class="col-4 mt-3">
            <p><i class="bi bi-stopwatch"></i> Seu último login foi em 12/06/2019</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="bread container mb-2 col-12">
    <nav aria-label="breadcrumb" class="bg-light nav-horizontal-bar p-1">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>
  </section>
  <main class="container">
    <div class="row">
      <div class="col-3">
        <div class="list-group" id="list">
          <a href="#" class="list-group-item list-group-item-action bg-blue-default" aria-current="true"><i class="bi bi-card-list"></i> Sobre</a>
          <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-pen"></i> Cadastrar Equipe</a>
          <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-pen"></i> Membros Equipe</a>
        </div>
      </div>
      <div class="col-9 main">
        <div class="card mb-3">
          <h3 class="card-header bg-blue-default text-white">Sobre</h3>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="textArea" class="form-label">Código HTML:</label>
                <textarea style="height: 140px; resize: vertical;" id="textArea" class="form-control"></textarea>
                <div id="emailHelp" class="form-text">Digite seu código HTML aqui!</div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="card mb-3">
          <h3 class="card-header bg-blue-default text-white">Cadastrar Equipe</h3>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nome do membro:</label>
                <input type="text" class="form-control" name="nome_membro" id="name">
              </div>
              <div class="mb-3">
                <label for="textArea" class="form-label">Descrição do membro:</label>
                <textarea style="height: 140px; resize: vertical;" id="textArea" class="form-control"></textarea>
                <div id="emailHelp" class="form-text">Breve descrição aqui!</div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="card mb-3">
          <h3 class="card-header bg-blue-default text-white">Membros Equipe</h3>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome do membro</th>
                  <th scope="col"> ## </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope='row'>1</th>
                  <td>Franklin Henrique</td>
                  <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> excluir</button></td>
                </tr>
                <tr>
                  <th scope='row'>2</th>
                  <td>Pedro Henrique</td>
                  <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> excluir</button></td>
                </tr>
                <tr>
                  <th scope='row'>3</th>
                  <td>Guilherme Lucena</td>
                  <td><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> excluir</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="./assets/js/main.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>