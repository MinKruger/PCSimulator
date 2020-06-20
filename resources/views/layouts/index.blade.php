<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lista de Peças</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="">PCSimulator</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- Search form -->
          <form class="form-inline mr-auto">
            <div class="md-form my-0">
              <input class="form-control" type="text" placeholder="Search" aria-label="Search">
              <i class="fas fa-search text-white ml-3" aria-hidden="true"></i>
            </div>
          </form>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Monte seu computador!</h1>
        <div class="list-group">
          <a href="" class="list-group-item">Processador</a>
          <a href="" class="list-group-item">Placa Mãe</a>
          <a href="" class="list-group-item">Cooler (Opcional)</a>
          <a href="" class="list-group-item">Memória RAM</a>
          <a href="" class="list-group-item">Placa de Vídeo</a>
          <a href="" class="list-group-item">Hard Disk</a>
          <a href="" class="list-group-item">SSD (Opcional)</a>
          <a href="" class="list-group-item">Fonte</a>
          <a href="" class="list-group-item">Gabinete</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        @yield('content')
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; PCSimulator 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>
