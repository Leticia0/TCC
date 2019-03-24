<!DOCTYPE html>
<html>
<head>
  <title>ola mundo</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

      <link rel="stylesheet" type="text/css" href="../../assets/css/carrossel.css">


</head>

<body>

<center>
  <div class="espaco">
    <div id="tamanho-carrossel" class="carousel slide" data-ride="carousel"  >
      <ol class="carousel-indicators">
        <li data-target="#macarrom" data-slide-to="0" class="active"></li>
        <li data-target="#melancia" data-slide-to="1"></li>
        <li data-target="#pratos" data-slide-to="2"></li>
      </ol>

    <div  class="carousel-inner"  >  <!-- a class muda o tamanho da imagem -->
        <div class="carousel-item active" class="imagem-menu">
          <img id="tamanho" src="../../assets/img/carrossel/macarron.jpg" alt="First slide" class="imagem-menu">
        </div>

        <div  class="carousel-item" >
          <img id="tamanho" src="../../assets/img/carrossel/melancia.jpg" alt="Second slide">
        </div>

        <div  class="carousel-item" >
          <img id="tamanho" src="../../assets/img/carrossel/pratos.jpg" alt="Third slide">
        </div>

    </div>

    <a class="carousel-control-prev" href="#tamanho-carrossel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>

    <a class="carousel-control-next" href="#tamanho-carrossel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>

    </div>
  </div>
</center>  
</body>
</html>